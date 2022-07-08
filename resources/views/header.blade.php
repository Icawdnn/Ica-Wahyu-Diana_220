<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <nav>
          <input type="checkbox" id="show-search">
          <input type="checkbox" id="show-menu">
          <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
          <div class="content">
          <div class="logo"><a href="#">Permata Bunda</a></div>
            <ul class="links">
              <li><a href="/home">Home</a></li>
              <li><a href="/profil">Profil</a></li>
              <!-- <li><a href="/index">Admin</a></li> -->
              <li>
                <a href="#" class="desktop-link">Kategori</a>
                <input type="checkbox" id="show-kategori">
                <label for="show-kategori">Kategori</label>
                <ul>
                  <li><a href="Tentang Klinik.html">Tentang Klinik</a></li>
                  <li><a href="jadwal.html">Jadwal Klinik</a></li>
                  <li><a href="Calculator.html">Calculator App</a></li>
                  <li><a href="list.html">Watch List</a></li>
                  <li><a href="modul4(1).php">Memecah String</a></li>
                  <li><a href="modul4(2).php">Tugas 2 </a></li>
                  <li><a href="formdata.php">Tugas 3 </a></li>
                </ul>
              </li>
              <li><a href="/login">Admin</a></li>
          </div>
          <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
          <form action="#" class="search-box">
            <input type="text" placeholder="Type Something to Search..." required>
            <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
          </form>
        </nav>
      </div>
    <hr>
    <br>
</body>
</html>