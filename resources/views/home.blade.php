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
    @include('header')
<div class="row">
        <div class="col-md-8 articles" id="site-content">
            <article class="posts">
                <h2 class="haidpost">
                    Tips Mengatasi Nyeri Haid
                </h2>
                <div class="haidtanggal">
                    <span><em class="glyphicon glyphicon-user"></em>
                    @icawdnn_</span>
                    <span><em class="glyphicon glyphicon-time"></em> Selasa, 22 
                        Maret 2022 - 10:42 WIB</span>
                </div>
                <div class="isihaid">
                    <img class="Gambar1" src="sakit haid.jpg">
                    <p>
                        Tips mengatasi nyeri haid bisa kamu coba dengan
                        cara 1.Kompres dengan air hangat 2.Lakukan pijatan lembut
                        3.Olahraga ringan 4.Kurangi kafein dan makanan asin
                    </p>
                </div>
                <h2 class="sunscreenpost">
                    Kenapa Sih Harus Memakai Sunscreen Setiap Hari?
                </h2>
                <div class="suntanggal">
                    <span><em class="glyphicon glyphicon-user"></em>
                    @icawdnn_</span>
                    <span><em class="glyphicon glyphicon-time"></em> Minggu, 3 
                        April 2022 - 07:15 WIB</span>
                </div>
                <div class="isisunscreen">
                    <img class="Gambar2" src="sunscreen.jpg">
                    <p>
                        Selain untuk mencegah melindungi kulit dari paparan 
                        sinar matahari, ternyata ada manfaat lain dari rutin 
                        memakai Sunscreen setiap hari.
                    </p>
                </div>
                <h2 class="insomniapost">
                    Cara Mengatasi Insomnia Yang Perlu Dicoba
                </h2>
                <div class="tanggalinsom">
                    <span><em class="glyphicon glyphicon-user"></em>
                    @icawdnn_</span>
                    <span><em class="glyphicon glyphicon-time"></em> Rabu, 23 
                        Maret 2022 - 15:15 WIB</span>
                </div>
                <div class="isiinsom">
                    <img class="Gambar3" src="insomnia.jpg">
                    <p>
                        Berbagai zat yang anda konsumsi dapat mempengaruhi atau
                        justru memicu stress hingga susah tidur. Berikut cara 
                        mengatasi insomnia yang paling ampuh 
                    </p>
                </div>
                <h2 class="ibuhamil">
                    Olahraga Untuk Ibu Hamil yang Aman di Setiap Trimester
                </h2>
                <div class="tanggalibu">
                    <span><em class="glyphicon glyphicon-user"></em>
                    @icawdnn_</span>
                    <span><em class="glyphicon glyphicon-time"></em> Kamis, 6 
                        Januari 2022 - 12:00 WIB</span>
                </div>
                <div class="isihamil">
                    <img class="Gambar4" src="ibu hamil.jpg">
                    <p>
                        Hamil bukan alasan untuk anda tidak berolahraga. Selain
                        memperlancar persalinan, ada banyak lagi manfaat Olahraga
                        untuk ibu hamil. Berikut rekomendasinya
                    </p>
                </div>
                <h2 class="tidurpost">
                    Ingin Tidur Nyenyak? Coba Terapkan 5 Cara Berikut Ini
                </h2>
                <div class="tanggaltidur">
                    <span><em class="glyphicon glyphicon-user"></em>
                    @icawdnn_</span>
                    <span><em class="glyphicon glyphicon-time"></em> Minggu, 3 
                        April 2022 - 07:15 WIB</span>
                </div>
                <div class="isi tidur">
                    <img class="Gambar5" src="tidur lama.jpg">
                    <p>
                        Tips agar tidur nyanyak setiap malam. 1.Tetapkan jadwal 
                        bangun pada waktu yang sama 2.Ciptakan waktu tenang sebelum
                        tidur 3.Mandi air hangat sebelum tidur 
                    </p>
                </div>
            </article>
        </div>
        <div class="col-md-4 sidebar" id="site-sidebar">
            <aside class="widgets">
                <h3 class="widget-tittle">Posting Teratas</h3>
                <ul>
                    <h2></h2>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Informasi</a></li>
                    <li><a href="#">Health</a></li>
                    <li><a href="#">Konsultasi</a></li>
                    <li><a href="#">Saran</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Lain - lain</a></li>
                </ul>
            </aside> 
        </div>
        @yield('content')
        @include('footer')
</body>
</html>