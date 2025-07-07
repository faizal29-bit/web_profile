<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobi | Web Profil Faizal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
 <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    .hobi {
      max-width: 600px;
      width: 100%;
      padding: 20px;
      animation: fadeIn 1s ease-in-out;
    }

    .text-center {
      text-align: center;
    }

    .mb-4 {
      margin-bottom: 1.5rem;
    }

    .kartu {
      background: #ffffff;
      border-radius: 18px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .kartu-header {
      background: linear-gradient(to right, #667eea, #764ba2);
      padding: 20px;
      color: white;
      text-align: center;
      border-top-left-radius: 18px;
      border-top-right-radius: 18px;
    }

    .kartu-body {
      padding: 25px;
      background-color: #fdfdfd;
    }

    .kartu-body p {
      font-size: 15px;
      color: #444;
      margin-bottom: 20px;
    }

    .tombol {
      background: #667eea;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.3s ease;
      margin-bottom: 20px;
    }

    .tombol:hover {
      background: #5a67d8;
    }

    .flex {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .badge {
      background-color: #6c757d;
      color: white;
      border-radius: 12px;
      padding: 8px 12px;
      font-size: 14px;
      transition: background 0.3s ease;
    }

    .badge:hover {
      background-color: #495057;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
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
                        <a class="nav-link" href="profile.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="hobi.php">Hobi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hobi">
        <h1 class="text-center mb-4">Hobi Saya</h1>

        <div class="kartu">
            <div class="kartu-header">
                <h3>Daftar Hobi</h3>
            </div>
            <div class="kartu-body">
                <p>Ini adalah beberapa hobi yang sering saya lakukan.</p>
                
                <div class="flex" id="hobiList">
                    <span class="badge bg-secondary p-2">Membaca Buku</span>
                    <span class="badge bg-secondary p-2">Bermain Game Online</span>
                    <span class="badge bg-secondary p-2">Sepak Bola</span>
                    <span class="badge bg-secondary p-2">Memasak</span>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>