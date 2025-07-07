<?php
header('Content-Type: application/json');
require_once '../config/database.php';

$method = $_SERVER['REQUEST_METHOD'];
$db = getDbConnection();

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $stmt = $db->prepare("SELECT * FROM students WHERE id = ?");
            $stmt->execute([$id]);
            $student = $stmt->fetch();
            if ($student) {
                echo json_encode($student);
            } else {
                http_response_code(404);
                echo json_encode(['message' => 'Profil mahasiswa tidak ditemukan.']);
            }
        } elseif (isset($_GET['nim'])) {
            $nim = $_GET['nim'];
            $stmt = $db->prepare("SELECT * FROM students WHERE nim = ?");
            $stmt->execute([$nim]);
            $student = $stmt->fetch();
            if ($student) {
                echo json_encode($student);
            } else {
                http_response_code(404);
                echo json_encode(['message' => 'Profil mahasiswa tidak ditemukan.']);
            }
        } else {
            $stmt = $db->query("SELECT * FROM students ORDER BY nama ASC");
            $students = $stmt->fetchAll();
            echo json_encode($students);
        }
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);

        if (!isset($data['nim'], $data['nama'], $data['jurusan'], $data['angkatan'], $data['email'])) {
            http_response_code(400);
            echo json_encode(['message' => 'Data wajib (NIM, Nama, Jurusan, Angkatan, Email) tidak lengkap.']);
            break;
        }

        try {
            $stmt = $db->prepare("INSERT INTO students (nim, nama, jurusan, angkatan, email, phone, linkedin, github, deskripsi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([
                $data['nim'],
                $data['nama'],
                $data['jurusan'],
                $data['angkatan'],
                $data['email'],
                $data['phone'] ?? null,
                $data['linkedin'] ?? null,
                $data['github'] ?? null,
                $data['deskripsi'] ?? null
            ]);
            $lastInsertId = $db->lastInsertId();
            $stmt = $db->prepare("SELECT * FROM students WHERE id = ?");
            $stmt->execute([$lastInsertId]);
            $newStudent = $stmt->fetch();
            http_response_code(201);
            echo json_encode($newStudent);
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') {
                http_response_code(400);
                echo json_encode(['message' => 'NIM atau Email sudah terdaftar.']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Gagal menambahkan profil: ' . $e->getMessage()]);
            }
        }
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        if (!isset($_GET['nim'])) {
            http_response_code(400);
            echo json_encode(['message' => 'NIM mahasiswa tidak diberikan untuk pembaruan.']);
            break;
        }
        $nim_to_update = $_GET['nim'];

        // Ambil data mahasiswa yang ada untuk mempertahankan field yang tidak dikirim
        $stmt_old = $db->prepare("SELECT * FROM students WHERE nim = ?");
        $stmt_old->execute([$nim_to_update]);
        $old_data = $stmt_old->fetch();

        if (!$old_data) {
            http_response_code(404);
            echo json_encode(['message' => 'Profil mahasiswa tidak ditemukan.']);
            break;
        }

        // Gabungkan data lama dengan data baru
        $merged_data = array_merge($old_data, $data);

        try {
            $stmt = $db->prepare("UPDATE students SET nama = ?, jurusan = ?, angkatan = ?, email = ?, phone = ?, linkedin = ?, github = ?, deskripsi = ? WHERE nim = ?");
            $stmt->execute([
                $merged_data['nama'],
                $merged_data['jurusan'],
                $merged_data['angkatan'],
                $merged_data['email'],
                $merged_data['phone'] ?? null, // Gunakan merged_data
                $merged_data['linkedin'] ?? null,
                $merged_data['github'] ?? null,
                $merged_data['deskripsi'] ?? null,
                $nim_to_update
            ]);

            if ($stmt->rowCount() > 0) {
                $stmt = $db->prepare("SELECT * FROM students WHERE nim = ?");
                $stmt->execute([$nim_to_update]);
                $updatedStudent = $stmt->fetch();
                echo json_encode($updatedStudent);
            } else {
                http_response_code(200); // OK, but no changes were made
                echo json_encode($old_data); // Return old data if no row was affected
            }
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') {
                http_response_code(400);
                echo json_encode(['message' => 'Email baru sudah terdaftar untuk mahasiswa lain.']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Gagal memperbarui profil: ' . $e->getMessage()]);
            }
        }
        break;

    case 'DELETE':
        if (!isset($_GET['nim'])) {
            http_response_code(400);
            echo json_encode(['message' => 'NIM mahasiswa tidak diberikan untuk penghapusan.']);
            break;
        }
        $nim_to_delete = $_GET['nim'];

        try {
            $stmt = $db->prepare("DELETE FROM students WHERE nim = ?");
            $stmt->execute([$nim_to_delete]);

            if ($stmt->rowCount() > 0) {
                echo json_encode(['message' => 'Profil mahasiswa berhasil dihapus.']);
            } else {
                http_response_code(404);
                echo json_encode(['message' => 'Profil mahasiswa tidak ditemukan.']);
            }
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['message' => 'Gagal menghapus profil: ' . $e->getMessage()]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(['message' => 'Metode request tidak diizinkan.']);
        break;
}
?>