<!DOCTYPE html>
  <html>
    <head>
      <title>aneFauzan Website</title>
      <!--Import Google Icon Font-->
      <link href="fonts.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="fonts/style.css">
    </head>

    <body>
      <header>
          <div class="navbar-fixed">
    <nav class="indigo">
    <div class="container">
      <div class="nav-wrapper">
          <a href="#!" class="brand-logo logo1">aneFauzan</a>
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="biografi.php">Biografi</a></li>
        <li><a href="biodata.php">Biodata</a></li>
        <li><a href="fotopribadi.php">Foto Pribadi</a></li>
        <li><a href="fotobareng.php">Foto Bersama</a></li>
    </ul>
      </div>
      </div>
    </nav>
    <!-- mobile navbar -->
  <nav class="nav-extended navbar-fixed indigo">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">aneFauzan</a>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="index.php">Beranda</a></li>
        <li class="tab"><a href="biografi.php">Biografi</a></li>
        <li class="tab"><a href="biodata.php">Biodata</a></li>
        <li class="tab"><a href="fotopribadi.php">Foto Pribadi</a></li>
        <li class="tab"><a href="fotobareng.php">Foto Bersama</a></li>
      </ul>
    </div>
  </nav>
      </header>

<!-- biografi -->
<section id="biografi" class="biografi">
  <div class="container konten">
  <h4 class="center">Biografi</h4>
  <p>
    Nama saya adalah Ahmad Fauzan dan saya lahir di Jakarta pada tanggal 09 April 2003 dari orang tua bernama Syarifudin dan Uswatun Hasanah. <br><br>
    Sampai sekarang, saya masih tinggal di Jakarta atau lebih tepatnya lagi di Jl. Rawa Simprug IV. Saya bersekolah dasar di SDN 06 Pt. yang berlokasi tidak jauh dari rumah saya. Pada saat SD, saya adalah orang yang lumayan berprestasi. Saya mendapatkan peringkat pertama dari kelas 1 SD sampai kelas 6 SD. <br><br>
    Setelah tamat SD, selanjutnya saya bersekolah di SMPN 66 yang lokasinya pun sama, tidak jauh dari rumah saya. Berbeda dengan SD, ketika saya SMP, saya sudah tidak mendapatkan peringkat 3 besar lagi dikarenakan saya lebih tertarik dengan dunia internet dibandingkan dunia pelajaran sekolah. Ketika saya SMP, pengetahuan saya mengenai pelajaran di sekolah tidaklah banyak, itulah yang membuat saya tidak mendapatkan peringkat lagi seperti SD. Saya lebih tertarik dengan pengetahuan tentang teknologi internet dibandingkan dengan pelajaran sekolah. Walaupun membaca adalah hobi saya, tapi tidak membaca semua hal, hanya membaca hal yang saya sukai saja. Saya suka dengan internet. Jadi bisa dibilang, pengetahuan saya tentang internet lebih banyak dibandingkan dengan teman-teman saya ketika SMP. <br><br>
    Walaupun prestasi akademik ketika saya SMP kurang, tapi itu tertutupi dengan prestasi non-akademik saya. Kegiatan lomba PMR, murottal qur'an, saya selalu menjuarainya. Ya walaupun PMR hanya sebatas tingkat JABODETABEK saja dan murottal qur'an yang juara di sekolah saya, tapi itu sudah cukup untuk menutupi kekurangan prestasi akademik saya di SMP. <br><br>
    Sekarang saya baru memasuki SMK dengan jurusan multimedia di SMKN 45 Jakarta. Saya mengambil jurusan ini dikarenakan sifat penasaran saya yang sangat tertarik untuk mengetahui dunia internet. Dengan mengikuti seluruh pelajaran multimedia, saya berharap bisa menguasai apa yang saya dapat di jurusan ini. <br><br>
    Selain membaca, hobi saya yang lainnya yaitu mengimplementasikan imajinasi saya ke media. Entah itu mendesain website, menggambar, mengedit, dan sebagainya. Jadi, menurut saya jurusan multimedia cocok untuk saya.
    Yap itulah biografi singkat saya, terima kasih. <br><br>
  </p>
</div>
</section>
    

  <!-- footer -->
          <footer class="page-footer indigo">
          <div class="container">
<!-- conten footer -->
          </div>
          <div class="footer-copyright blue-grey darken-4 center">
            <div class="container">
            Copyright © 2019 · <a href="#">aneFauzan Website<br></a>Made with Love by Neoxy Reii
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        const slider = document.querySelectorAll ('.slider');
        M.Slider.init(slider, {
        indicators: false  ,
        height: 300,
        interval: 4000
        });
        const paralLax = document.querySelectorAll ('.parallax');
        M.Parallax.init(paralLax)

        const materialBox = document.querySelectorAll ('.materialboxed');
        M.Materialbox.init(materialBox)
      </script>
    </body>
  </html>