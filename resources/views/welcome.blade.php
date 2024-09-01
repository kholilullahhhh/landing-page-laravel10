<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patrix, Bootstrap 5 Landing Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-4">
          <span class="display-2--intro">Jalan Lurus Jadi</span>
          <span class="display-1--intro">Fullstack Web Developer</span>
          <span class="display-2--description lh-base">
         Kelas online belajar Fullstack web developer from A to Z. Cocok buat yang pengen punya karir bagus, skill dibutuhin industri, gaji tinggi dan bisa bikin web atau aplikasi buat ngembangin bisnis online sendiri.
         Aman buat pemula walaupun belum ngerti coding dan nggak punya background IT. Diajarin dari 0 banget!
          </span>
        </h1>
        <button type="button" class="rounded-pill btn-rounded" onclick="window.location.href='https://www.dcc-dp.com/private-class';">
          Gabung Program
          <span><i class="fas fa-arrow-right"></i></span>
        </button>
        
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros text-end">
        <div class="video-box">
          <img src="images/arts/intro-section-illustration.png" alt="video illutration" class="img-fluid">
            <span>
              <i class="fas fa-play-circle"></i>
            </span>
            <span class="border-animation border-animation--border-1"></span>
            <span class="border-animation border-animation--border-2"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->



<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                        START SECTION 4 - THE SERVICES  
///////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="services" class="services">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">Private Class</h1>
      <div class="heading-line mb-1"></div>
    </div>
  <!-- START THE DESCRIPTION CONTENT  -->
    <div class="row pt-2 pb-2 mt-0 mb-3">
      <div class="col-md-6 border-right">
        <div class="bg-white p-3">
          <h2 class="fw-bold text-capitalize text-center">
          Jangan Bingung Lagi, Mulai Perjalanan Programming-mu Disini!
          </h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 text-start">
          <p class="fw-light">
          Bingung mulai belajar coding? Terlalu banyak bahasa pemrograman dan video tutorial tidak membantu saat error? Saatnya belajar programming dari nol secara step-by-step, dengan bimbingan praktisi ahli! Kelas ini dilengkapi materi AI Assisted Programming agar relevan dengan tren IT terkini.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE SERVICES  -->
  <div class="container">
    <!-- START THE MARKETING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-paper-plane"></div>
          <h3 class="display-3--title mt-1">Start</h3>
          <p class="lh-lg">
          Alur belajar terarah disusun secara komprehensif oleh para expert.Nggak usah pusing-pusing lagi mikirin roadmap belajar, tinggal ikutin aja materinya satu persatu sampai selesai.100% teruji ampuh!
          Pemula, belum pernah belajar coding dan nggak punya background IT juga bisa gabung. Diajarin dari 0 banget!
          </p>
          <!-- <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/service-1.png" alt="marketing illustration" class="img-fluid">
        </div>
      </div>
    </div>
    <!-- START THE WEB DEVELOPMENT CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="images/services/service-2.png" alt="web development illustration" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code"></div>
          <h3 class="display-3--title mt-1">Code</h3>
          <p class="lh-lg">
          Error, stuck atau punya kendala saat belajar ngikutin materi? Langsung tanyain aja di Forum Tanya Jawab!
          Pertanyaan-pertanyaanmu akan dijawab secara sigap oleh para mentor.
          Forum Tanya Jawab aktif pada jam kerja.
          </p>
          <!-- <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
        </div>
      </div>
    </div>
    <!-- START THE CLOUD HOSTING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-cloud-upload-alt"></div>
          <h3 class="display-3--title mt-1">Ngoding</h3>
          <p class="lh-lg">
          Konsultasi online via Zoom seminggu sekali.
          Nanya, curhat, konsultasi atau ngobrol langsung dengan mentor. Kamu bukan cuma nonton video doang, tapi belajar dan dibimbing langsung oleh manusia.
          </p>
          <!-- <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/service-3.png" alt="cloud hosting illustration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>





<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 7 - THE PORTFOLIO  
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container">
        <h1 class="text-center display-7 fw-bold text-uppercase ">Mengapa Private Class?</h1>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="fas fa-users icon"></i>
                        </div><br>
                        <h5 class="card-title">Live Interaction Class</h5>
                        <p class="card-text">Kelas bersifat live interaction kamu akan belajar bareng mentor praktisi yang akan bimbing kamu secara langsung.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="fas fa-globe icon"></i>
                        </div><br>
                        <h5 class="card-title">Kurikulum Internasional</h5>
                        <p class="card-text">Kurikulum didesain sesuai standar internasional dan akan up to date mengikuti perkembangan zaman.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="fas fa-bolt icon"></i>
                        </div><br>
                        <h5 class="card-title">Praktik dan Studi Kasus</h5>
                        <p class="card-text">Belajar tidak hanya dari teori saja, namun juga melalui projek dan studi kasus di dunia kerja.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="fas fa-question-circle icon"></i>
                        </div><br>
                        <h5 class="card-title">Bebas Konsultasi & Tanya-tanya</h5>
                        <p class="card-text">Kamu bebas untuk konsultasi dan tanya-tanya ke mentor jika masih ada yang kurang paham. </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="fas fa-user-tie icon"></i>
                        </div><br>
                        <h5 class="card-title">Pengajar Praktisi</h5>
                        <p class="card-text">Maestro (Pengajar) yang melatih Kamu adalah seorang Yang profesional di bidangnya .</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="fas fa-globe icon"></i>
                        </div><br>
                        <h5 class="card-title">Bisa Offline/Online</h5>
                        <p class="card-text">Kamu bisa belajar secara offline di Learning Center (@Makassar) ataupun Online (jika kamu diluar Makassar) sesuai kebutuhan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>



<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                       START SECTION 6 - THE MATERI
//////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="materi" class="materi">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-7 fw-bold text-uppercase">Materi Belajar</h1>
      <div class="heading-line"></div>
      <p class="lead">Intip rangkaian materi belajar yang akan kamu pelajari di program ini:</p>
    </div>
    <!-- ACCORDION CONTENT  -->
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <!-- ACCORDION ITEM 1 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1. Pengenalan Pemrograman
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Meliputi pengenalan tentang pemrograman komputer,</strong>  jalur-jalur karir dalam programming, apa saja yang harus dipersiapkan untuk memulai karir sebagai programer serta pengetahuan dasar dan yang perlu kamu ketahui untuk memulai belajar pemrograman.
                        Kamu juga akan belajar tentang algoritma, dasar-dasar pemrograman, pengenalan tentang teks editor dan Git.low.
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 2 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2. Front End Dasar
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Kamu akan belajar tentang HTML, CSS dan JavaScript.</strong>  Kamu akan mulai berlatih membuat halaman website sederhana dengan teknologi Front End tingkat dasar. Sampai sini, kamu pasti sudah akan merasakan progress hasil belajarmu. Selanjutnya kamu juga akan belajar tentang library JQuery.
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 3 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3. Back End Dasar
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Kalau pada pembahasan tentang Front End kamu lebih banyak belajar tentang tampilan depan website yang hasilnya kelihatan secara langsung.</strong> Pada tahap ini kamu akan mulai lebih banyak belajar tentang logika dan proses kerja sebuah aplikasi di balik layar.
                Kamu akan belajar pemrograman PHP, dasar-dasar database, penggunaan MySQL serta konsep dasar Pemrograman Berorientasi Object (OOP).
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 4 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4. Studi Kasus Fulltacks
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Setelah semua keahlian yang dibutuhkan terpenuhi, waktunya mengkombinasikannya dan mengintegrasikannya dalam sebuah project studi kasus.</strong>
                Kamu akan belajar langsung dari beragam studi kasus yang telah disediakan. Pada akhirnya sehebat apapun pemahaman codingmu, kalau tidak bisa mempraktekannya dalam sebuah project nyata, maka itu akan sia-sia.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container mt-5">
        <h1 class="text-center display-7 fw-bold text-uppercase">Tentang Kami</h1><br>
        <p class="text-center"><B>Dipanegara Computer Club </B>dengan bangga mempersembahkan kelas pemrograman ngoding yang dirancang khusus untuk memberikan pengalaman belajar privat dan intensif. Kami berkomitmen untuk membantu peserta menguasai keterampilan coding dari dasar hingga mahir, dengan tujuan akhir membuat mereka mampu bersaing di era digital yang semakin berkembang.</p>
        <p class="text-center">Sejak didirikan, kelas pemrograman kami telah membantu banyak individu untuk mengembangkan keterampilan teknologi mereka, membuka peluang baru, dan mencapai prestasi yang membanggakan di bidang IT. Dengan didukung oleh para profesional berpengalaman, kami memastikan bahwa setiap materi yang disampaikan sesuai dengan kebutuhan peserta, mulai dari pemula hingga mereka yang sudah memiliki pengalaman di dunia pemrograman.</p>
        <p class="text-center">Bergabunglah dengan kami, dan mulai perjalanan Anda untuk menjadi seorang programmer handal bersama Dipanegara Computer Club.</p>
    </div><br><br>



    <section id="faq" class="get-started">
    <div class="container">
        <h1 class="text-center display-7 fw-bold text-uppercase">FAQ</h1><br>
        </div>

<main class="container py-2">
    <!-- Pertanyaan 1 -->
    <div class="row mb-2">
        <div class="col-md-12">
            <h4 class="mb-3">Apakah saya harus punya latar belakang IT?</h4>
            <p>Tidak. Semua kelas kami dimulai dari dasar, jadi tidak perlu memiliki latar belakang IT sama sekali untuk ikut dalam kelas kami.</p>
        </div>
    </div>

    <!-- Pertanyaan 2 -->
    <div class="row mb-2">
        <div class="col-md-12">
            <h4 class="mb-3">Berapa lama pembelajaran berlangsung?</h4>
            <p>Kelas ini berlangsung selama 1 (satu) bulan, 4 kali pertemuan 6 jam untuk kelas weekend dan 8 kali pertemuan 3 jam untuk kelas weekdays. Jadwal kelas sesuai dengan keterangan di atas.</p>
        </div>
    </div>

    <!-- Pertanyaan 3 -->
    <div class="row mb-2">
        <div class="col-md-12">
            <h4 class="mb-3">Berapakah kuota murid per kelasnya?</h4>
            <p>Kelas kami bersifat semi-privat, maksimal hanya 6 orang per kelasnya. Dengan sistem belajar praktik langsung mengerjakan project bersama-sama dengan coach, kamu juga bisa melakukan diskusi dan studi kasus bersama dengan coach.</p>
        </div>
    </div>

    <!-- Pertanyaan 4 -->
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-3">Apakah kelas akan ada setiap bulannya?</h4>
            <p>Belum tentu, karena tenaga pengajar kami merupakan developer aktif, maka ada kemungkinan pengajar berhalangan karena pekerjaan. Oleh karena itu disarankan untuk segera mengambil seat kelas yang dibuka.</p>
        </div>
    </div>
</main>
</section>



<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="testimonials" class="testimonials">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="container">
    <div class="row text-center text-white">
      <h1 class="display-3 fw-bold">Testimonials</h1>
      <hr style="width: 100px; height: 3px; " class="mx-auto">
      <p class="lead pt-1">what our clients are saying</p>
    </div>

    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row align-items-center">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- CAROUSEL ITEM 1 -->
          <div class="carousel-item active">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-1.jpg" alt="client-1 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Patrick Muriungi</h3>
              <p class="fw-light">CEO & founder</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 2 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-2.jpg" alt="client-2 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Joy Marete</h3>
              <p class="fw-light">Finance Manager</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 3 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-3.jpg" alt="client-3 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>ClaireBelle Zawadi</h3>
              <p class="fw-light">Global brand manager</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 4 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-4.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Uhuru Kenyatta</h3>
              <p class="fw-light">C.E.O & Founder</p>
            </div>
          </div>     
        </div>
        <div class="text-center">
          <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        </button>
        <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        </button>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>






<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
              START SECTION 8 - GET STARTED  
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="contact" class="get-started">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
      <div class="heading-line"></div>
      <p class="lh-lg">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero illum architecto modi.
      </p>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class="row text-white">
      <div class="col-12 col-lg-6 gradient shadow p-3">
        <div class="cta-info w-100">
          <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam alias optio minima, tempore architecto sint ipsam dolore tempora facere laboriosam corrupti!
          </p>
          <h3 class="display-3--brief">What will be the next step?</h3>
          <ul class="cta-info__list">
            <li>We'll prepare the proposal.</li>
            <li>we'll discuss it together.</li>
            <li>let's start the discussion.</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
        <div class="form w-100 pb-2">
          <h4 class="display-3--title mb-5">start your project</h4>
          <form action="#" class="row">
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="First Name" id="inputFirstName" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="Last Name" id="inputLastName" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="email" placeholder="email address" id="inputEmail" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">
              <textarea name="message" placeholder="message" id="message" rows="8" class="shadow form-control form-control-lg"></textarea>
            </div>
            <div class="text-center d-grid mt-1">
              <button type="button" class="btn btn-primary rounded-pill pt-3 pb-3">
                submit
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER  
///////////////////////////////////////////////////////////////////////////////////////////////-->


<!-- BACK TO TOP BUTTON  -->
<a href="#" class="shadow btn-primary rounded-circle back-to-top">
  <i class="fas fa-chevron-up"></i>
</a>



   
    <script src="assets/vendors/js/glightbox.min.js"></script>

    <!-- <script type="text/javascript">
      const lightbox = GLightbox({
        'touchNavigation': true,
        'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
});
    
    </script> -->
     <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>