<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Web Profil Faizal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #dfe9f3 0%, #ffffff 100%);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .informasi {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            animation: fadeIn 1s ease-in-out;
            margin-top: 50px;
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
            background: linear-gradient(to right, #4facfe, #00f2fe);
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

        .sosmed {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sosmed li {
            display: flex;
            align-items: center;
            font-size: 16px;
            margin-bottom: 15px;
            gap: 12px;
            transition: transform 0.3s ease;
        }

        .sosmed li:hover {
            transform: translateX(5px);
        }

        .sosmed i {
            font-size: 22px;
            color: #4facfe;
        }

        .sosmed a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .sosmed a:hover {
            color: #00bcd4;
        }

        .lain {
            font-size: 13px;
            color: #999;
            text-align: center;
            margin-top: 25px;
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
                        <a class="nav-link" href="hobi.php">Hobi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="informasi">
    <h1 class="text-center mb-4">Informasi Sosial Media</h1>

    <div class="kartu">
        <div class="kartu-header">
            <h3>Kontak Saya</h3>
        </div>
        <div class="kartu-body">
            <p>Berikut adalah beberapa sosial media saya:</p>
            <ul class="sosmed">
                <li><i class="fa-brands fa-square-whatsapp"></i> <a href="https://wa.me/6285888675578">0858-8867-5578</a></li>
                <li><i class="fa-brands fa-square-instagram"></i> <a href="https://www.instagram.com/_faizalsfngt_?igsh=MTZ6dG9vbmhuZXRvMQ==">Instagram</a></li>
                <li><i class="fa-solid fa-envelope"></i> <a href="mailto:faizalsafaat46@mail.com">Email</a></li>
                <li><i class="fa-brands fa-tiktok"></i> <a href="https://www.tiktok.com/@buah_25sj?is_from_webapp=1&sender_device=pc">Tiktok</a></li>
            </ul>
            <p class="lain">Informasi ini adalah tentang media sosial yang saya gunakan.</p>
        </div>
    </div>
</div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>