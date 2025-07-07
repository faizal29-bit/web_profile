<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa | Web Profil Faizal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<style>
 /* Global reset & font */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    display: block; /* biar scroll normal */
    background: linear-gradient( #4facfe );
    overflow-x: hidden;
}

/* Container utama */
.container {
    width: 100%;
    max-width: 850px;
}

/* Card Styling */
.kartu {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.07);
    margin-bottom: 30px;
    overflow: hidden;
}

.kartu-header {
    background: linear-gradient(to right, #36d1dc, #5b86e5);
    padding: 20px;
    color: white;
    text-align: center;
}

.kartu-header h3 {
    margin: 0;
}

.kartu-body {
    padding: 30px 25px;
}

/* Form styling */
.form-label {
    font-weight: 500;
    margin-bottom: 5px;
    display: block;
}

.form-control {
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #5b86e5;
    outline: none;
}

/* Buttons */
.btn {
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 500;
    border: none;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-primary {
    background-color: #36d1dc;
    color: white;
}

.btn-primary:hover {
    background-color: #2bb3c0;
}

.btn-secondary {
    background-color: #6c757d;
    color: white;
    margin-left: 10px;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

/* Student list styling */
#studentList {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.student-card {
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 10px;
    border: 1px solid #ddd;
}

.text-muted {
    font-size: 14px;
    color: #888;
}

.text-center {
    text-align: center;
    margin-top: 100px;
}

/* Responsive */
@media (max-width: 600px) {
    .kartu-body {
        padding: 20px 15px;
    }

    .form-control {
        font-size: 13px;
    }

    .text-center{
        margin-top: 80px;
    }

    .btn {
        width: 100%;
        margin-top: 10px;
    }

    .btn-secondary {
        margin-left: 0;
    }
}


</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fa-solid fa-user-secret"></i> My Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hobi.php">Hobi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center">Profil Mahasiswa</h1>

        <div class="kartu">
            <div class="kartu-header">
                <h3>Tambah / Edit Profil Mahasiswa</h3>
            </div>
            <div class="kartu-body">
                <form id="studentForm">
                    <input type="hidden" id="studentId">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" required>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="number" class="form-control" id="angkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                     <div class="mb-3">
                        <label for="phone" class="form-label">Telepon (Opsional)</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">LinkedIn (Opsional)</label>
                        <input type="url" class="form-control" id="linkedin">
                    </div>
                    <div class="mb-3">
                        <label for="github" class="form-label">GitHub (Opsional)</label>
                        <input type="url" class="form-control" id="github">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Diri (Opsional)</label>
                        <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Profil</button>
                    <button type="button" class="btn btn-secondary" id="cancelEditBtn" style="display: none;">Batal Edit</button>
                </form>
            </div>
        </div>

        <div class="kartu">
            <div class="kartu-header">
                <h3>Daftar Profil Mahasiswa</h3>
            </div>
            <div class="kartu-body">
                <div id="studentList" class="row">
                    <p class="text-center text-muted" id="noStudentsMessage">Belum ada profil mahasiswa.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>