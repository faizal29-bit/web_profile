<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<style>/* Hero Section Styles */
/* Reset & Base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  overflow-x: hidden;
}

/* Hero Section */
.hero {
  width: 100vw;
  min-height: 100vh;
  background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
  padding: 100px 30px 80px;
  color: white;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Container */
.hero-container {
  max-width: 1200px;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

/* Text Bagian Kiri */
.hero-text {
  flex: 1 1 55%;
  padding-right: 30px;
  animation: slideInLeft 1s ease;
  margin-left: 20px;
}

.tagline {
  background-color: rgba(255, 255, 255, 0.15);
  padding: 6px 18px;
  border-radius: 20px;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  margin-bottom: 18px;
  font-weight: 500;
}

.hero h1 {
  font-size: 48px;
  margin-bottom: 15px;
  font-weight: 700;
  line-height: 1.2;
}

.hero h2.subheading {
  font-size: 20px;
  font-weight: 400;
  margin-bottom: 25px;
  opacity: 0.9;
}

.hero p {
  font-size: 16px;
  line-height: 1.8;
  margin-bottom: 35px;
  color: #e0f7fa;
}

/* Tombol */
.hero-buttons a {
  display: inline-block;
  margin-right: 15px;
  padding: 10px 24px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: #ffffff;
  color: #007bff;
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
}

.btn-primary:hover {
  background-color: #f1f1f1;
}

.btn-secondary {
  background-color: transparent;
  border: 2px solid white;
  color: white;
}

.btn-secondary:hover {
  background-color: rgba(255, 255, 255, 0.15);
}

.hero-img {
  width: 100%;
  max-width: 320px;
  height: 400px;
  overflow: hidden;
  border-radius: 25px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  margin: auto 30px;
}
.hero-img img {
  width: 100%;
  height: auto;
  border-radius: 25px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  transform: translateY(0);
  transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}

.hero-img img:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.beda{
    color:rgb(93, 97, 98);
}

/* Animasi */
@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Responsif */
@media (max-width: 768px) {
  .hero-container {
    flex-direction: column-reverse;
    text-align: center;
    gap: 30px;
    margin-top: 60%;
  }

  .hero-text {
    padding: 0;
  }

  .hero h1 {
    font-size: 36px;
  }

  .hero h2 {
    font-size: 18px;
  }

  .hero-img{
    width: 200px;
    height: 200px;
    align-items: center;
  }

  .hero-img img {
    max-width: 80%;
    border-radius: 50px;
  }
}

</style>

<body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa-solid fa-user-secret"></i> My Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="profile.php">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="hobi.php">Hobi</a></li>
          <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <span class="tagline">Hi, I'm</span>
                <h1>Faizal Imam <span class="beda">Safangat</span></h1>
                <h2 class="subheading">Saya adalah Mahasiswa Teknik Informatika</h2>
                <p>Saya tertarik dengan pengembangan aplikasi berbasis web, mulai dari frontend hingga backend. Lanjut??</p>
                <div class="hero-buttons">
                    <a href="profile.php" class="btn-primary">Lihat Profil</a>
                    <a href="kontak.php" class="btn-secondary">Hubungi Saya <i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </div>
            <div class="hero-img">
                <img src="image/y.png" alt="Foto Faizal">
            </div>
        </div>
    </section>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>