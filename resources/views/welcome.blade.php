<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pengajuan Cuti</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Mukta:wght@200;300;400;500;600;700;800&family=Abel:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Visible
  * Template URL: https://bootstrapmade.com/visible-bootstrap-agency-template/
  * Updated: May 22 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Welcome</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
           <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li>
            <a href="{{ url('/admin/login') }}">Login</a>
</li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 hero-content" data-aos="fade-up" data-aos-delay="100">
            <div class="subtitle">
              <span>DESIGN STUDIO</span>
            </div>

            <h1 class="title">
              Aplikasi <span class="highlight">Pengajuan</span> Jatah Cuti
            </h1>

            <div class="description">
              <p>Inilah aplikasi pengajuan cuti karyawan yang fleksibel dan dapat disesuaikan dengan kebutuhan dan struktur pelaporan bisnis F&B Anda. Karyawan yang mengajukan cuti via aplikasi cuti online kami akan langsung terlihat dalam penjadwalan real-time Anda, sehingga Anda dapat dengan mudah melihat siapa yang tersedia untuk bekerja di jadwal tersebut.</p>
            </div>

            <div class="hero-buttons">
              <a href="#services" class="primary-btn">
                Our Services
                <i class="bi bi-chevron-right"></i>
              </a>
              <a href="#portfolio" class="secondary-btn">
                View Portfolio
              </a>
            </div>
          </div>

          <div class="col-lg-6 hero-visual" data-aos="fade-up" data-aos-delay="200">
            <div class="image-wrapper">
              <img src="assets/img/kerja.avif" alt="Creative Design" class="main-image">

              <div class="floating-element top-left">
                <i class="bi bi-star-fill"></i>
              </div>

              <div class="floating-element bottom-right">
                <i class="bi bi-circle-fill"></i>
              </div>

             <!-- <div class="experience-badge">
                <span class="years">10+</span>
                <span class="text">Years of Experience</span>
              </div>
            </div>

            <div class="client-counter">
              <div class="counter-number">
                <span>750+</span>
              </div>  -->
              <div class="counter-text">
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Tentang Kami</span>
        <h2>Tentang Kami</h2>
        <p>Kami adalah tim yang peduli pada keseimbangan antara produktivitas dan kesejahteraan karyawan. Melalui proyek ini, kami berkomitmen menciptakan solusi digital yang membantu perusahaan dan pegawai dalam mengelola hak cuti secara adil, transparan, dan efisien.

Dalam dunia kerja yang dinamis, kami percaya bahwa manajemen cuti yang baik bukan hanya tentang administrasi — tapi juga tentang menjaga kesehatan mental, menciptakan lingkungan kerja yang sehat, dan meningkatkan loyalitas karyawan.

</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="about-image-wrapper position-relative">
              <img src="assets/img/about/kerja.avif" alt="About Us" class="img-fluid rounded-4">
              <div class="mission-card">
                <div class="mission-icon">
                  <i class="bi bi-lightbulb"></i>
                </div>
                <div class="mission-content">
                  <h4>Our Purpose</h4>
                  <p>Menyediakan sistem cuti yang praktis dan terpercaya agar perusahaan dapat fokus pada hal besar lainnya, sementara karyawan merasa dihargai dan didengar.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-lg-4">
             <!-- <div class="tag-badge" data-aos="fade-up" data-aos-delay="100">COMPANY OVERVIEW</div>
              <h2 class="mb-4" data-aos="fade-up" data-aos-delay="200">Discover our journey and future aspirations towards innovation and success</h2>  -->

              <div class="about-info" data-aos="fade-up" data-aos-delay="300">
                <p>Temukan bagaimana aplikasi ini dibangun untuk menjawab tantangan pengelolaan cuti secara modern. Kami mengembangkan sistem yang tidak hanya mempermudah proses pengajuan dan persetujuan cuti, tetapi juga mendorong budaya kerja yang lebih sehat, transparan, dan profesional.

Dengan terus mengikuti perkembangan teknologi dan kebutuhan organisasi, kami berkomitmen memberikan solusi yang relevan dan berdampak — membantu admin, HR, maupun karyawan untuk berkolaborasi dengan lebih efisien.

</p>
              </div>

              <h4 class="values-title mt-4 mb-3" data-aos="fade-up" data-aos-delay="400">Fundamental Principles</h4>

              <div class="values-list" data-aos="fade-up" data-aos-delay="500">
                <div class="value-item">
                  <div class="value-icon"><i class="bi bi-check2"></i></div>
                  <span class="value-text">Trustworthiness</span>
                </div>
                <div class="value-item">
                  <div class="value-icon"><i class="bi bi-check2"></i></div>
                  <span class="value-text">Quality</span>
                </div>
                <div class="value-item">
                  <div class="value-icon"><i class="bi bi-check2"></i></div>
                  <span class="value-text">Creativity</span>
                </div>
                <div class="value-item">
                  <div class="value-icon"><i class="bi bi-check2"></i></div>
                  <span class="value-text">Response</span>
                </div>
                <div class="value-item">
                  <div class="value-icon"><i class="bi bi-check2"></i></div>
                  <span class="value-text">Collaboration</span>
                </div>
                <div class="value-item">
                  <div class="value-icon"><i class="bi bi-check2"></i></div>
                  <span class="value-text">Growth Mindset</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->




    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Ruangan yang tersedia</span>
        <h2>Ruangan yang tersedia</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row">
            <div class="col-lg-3 filter-sidebar">
              <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
                <ul class="portfolio-filters isotope-filters">
                  <li data-filter="*" class="filter-active">Ruangan yang tersedia</li>
                  <li data-filter=".filter-photography">Ruang Rapat</li>
                  <li data-filter=".filter-design">Kantin</li>
                  <li data-filter=".filter-automotive">Ruang Kerja</li>
                  <li data-filter=".filter-nature">Lobby</li>
                </ul>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/ruangrapat.jpeg" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Ruang Rapat</span>
                        <h4>Strategic Space</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/ruangrapat.jpeg" class="glightbox" title="Capturing Moments"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/kantin2.jpeg" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Kantin</span>
                        <h4>Lunch Break</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/kantin2.jpeg" class="glightbox" title="Woodcraft Design"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-automotive">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/work.jpeg" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Ruang Kerja</span>
                        <h4>Work Zone</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/work.jpeg" class="glightbox" title="Work Zone"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-nature">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/lobby.jpeg" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Lobby</span>
                        <h4>Reception Spot</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/lobby.jpeg" class="glightbox" title="Reception Spot"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/ruangrapat2.jpeg" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Ruang Rapat</span>
                        <h4>Executive Room</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/ruangrapat2.jpeg" class="glightbox" title="Urban Stories"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/KANTIN.jpeg" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Kantin</span>
                        <h4>Refresh Zone</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/KANTIN.jpeg" class="glightbox" title="Digital Experience"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

              </div><!-- End Portfolio Container -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Section -->



    <!-- Team Section -->
    <section id="team" class="team section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="team-header" data-aos="fade-up" data-aos-delay="200">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h2>Our Professional Team</h2>
              <p>Tim Kami
Kami adalah tim yang terdiri dari individu-individu profesional dengan latar belakang dan keahlian yang beragam. Dengan semangat kolaborasi, kami berkomitmen untuk menyelesaikan setiap proyek secara tepat waktu, berkualitas, dan sesuai tujuan.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-lg-end">
              <div class="team-controls">
                <button class="team-control-btn team-prev"><i class="bi bi-chevron-left"></i></button>
                <button class="team-control-btn team-next"><i class="bi bi-chevron-right"></i></button>
              </div>
            </div>
          </div>
        </div>

        <div class="team-slider swiper init-swiper" data-aos="fade-up" data-aos-delay="300">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 700,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".team-next",
                "prevEl": ".team-prev"
              },
              "breakpoints": {
                "576": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "992": {
                  "slidesPerView": 3,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 4,
                  "spaceBetween": 30
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="team-member">
                <div class="member-image">
                  <img src="assets/img/person/er.jpg" class="img-fluid" alt="" loading="lazy">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/a.erlangg44?igsh=MXMxbDVhM2M3Y3puZQ=="><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/erlangga-abidin-588a88330?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-content">
                  <h3>Erlangga Abidin</h3>
                  <span>Chief Technology Officer</span>
                  <p>Merancang visi dan strategi teknologi jangka panjang yang selaras dengan tujuan bisnis perusahaan.</p>
                </div>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="team-member">
                <div class="member-image">
                  <img src="assets/img/person/bella.jpg" class="img-fluid" alt="" loading="lazy">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/leefjleven?igsh=MXMxbDVhM2M3Y3puZQ=="><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/alifya-bella-aa2053252?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-content">
                  <h3>Alifya Bella Ma'rufah</h3>
                  <span>Product Designer</span>
                  <p>Mendesain tampilan visual aplikasi/website yang menarik dan mudah digunakan.</p>
                </div>
              </div>
            </div><!-- End slide item -->

             <!-- <div class="swiper-slide">
              <div class="team-member">
                <div class="member-image">
                  <img src="assets/img/person/person-m-8.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div> -->
                <!-- <div class="member-content">
                  <h3>Daniel Chen</h3>
                  <span>Marketing Specialist</span>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                </div>
              </div>
            </div>End slide item  -->

            <div class="swiper-slide">
              <div class="team-member">
                <div class="member-image">
                  <img src="assets/img/person/ivi.jpg" class="img-fluid" alt="" loading="lazy">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                     <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/sillv_zahrohh?igsh=MXMxbDVhM2M3Y3puZQ=="><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/silvia-zahrodiniah-76835b331?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-content">
                  <h3>Silvia Zahrodiniah</h3>
                  <span>Project Manager</span>
                  <p> Menyusun rencana kerja (timeline, milestone, dan deadline).</p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="team-member">
                <div class="member-image">
                  <img src="assets/img/person/rifqie.jpg" class="img-fluid" alt="" loading="lazy">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-content">
                  <h3>Rifqi Abiyu Fahlevi</h3>
                  <span>Data & Reporting Engineer</span>
                  <p>Mengelola data pengajuan cuti serta membuat laporan rekap cuti secara otomatis berdasarkan data karyawan.</p>
                </div>
              </div>
            </div><!-- End slide item -->

<!--
            <div class="swiper-slide">
              <div class="team-member">
                <div class="member-image">
                  <img src="assets/img/person/person-m-12.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-content">
                  <h3>Jason Parker</h3>
                  <span>UI/UX Designer</span>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                </div>
              </div>
            </div> -->

          <!-- <div class="swiper-slide">
              <div class="team-member">
                <div class="member-image">
                  <img src="assets/img/person/person-f-7.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>                 <div class="member-content">
                  <h3>Silvia Zahrodiniah</h3>
                  <span>Project Manager</span>
                  <p>
                    Menyusun rencana kerja (timeline, milestone, dan deadline).</ol>
                  </p>
                </div>
              </div>
            </div>End slide item -->

          </div>
        </div>

      </div>
    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Hubungi Kami</span>
        <h2>Hubungi Kami</h2>
        <p>Untuk pertanyaan lebih lanjut, silakan hubungi tim kami melalui alamat atau kontak yang tertera berikut ini.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="contact-wrapper">
          <div class="contact-info-panel">
            <div class="contact-info-header">
              <!-- <h3>Contact Information</h3>
               <p>Dignissimos deleniti accusamus rerum voluptate. Dignissimos rerum sit maiores reiciendis voluptate inventore ut.</p> -->
            </div>

            <div class="contact-info-cards">
              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Our Location</h4>
                  <p>Kuningan Tower</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-envelope-open"></i>
                </div>
                <div class="card-content">
                  <h4>Email Us</h4>
                  <p>codewithti1@gmail.com</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Call Us</h4>
                  <p>+6283128325883</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="card-content">
                  <h4>Jam Kerja</h4>
                  <p>07.00 - 16.00</p>
                </div>
              </div>
            </div>

            <div class="social-links-panel">
              <h5>Follow Us</h5>
              <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="contact-form-panel">
  <div class="map-container" style="width: 100%; height: 300px;">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31731.63283363563!2d106.84044717331612!3d-6.225013800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2d148fbe713%3A0x6e667d52ebedf5a9!2sEast%20Jakarta%2C%20East%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1719140131723!5m2!1sen!2sid"
      width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>


            <div class="form-container">
              <h3>Kirim Pesan kepada Kami</h3>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mauris hendrerit faucibus imperdiet nec eget felis.</p> -->

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="nameInput" name="name" placeholder="Nama Lengkap" required="">
                  <label for="nameInput">Nama Lengkap Anda</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email Address" required="">
                  <label for="emailInput">Alamat Email</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="subjectInput" name="subjek" placeholder="Subject" required="">
                  <label for="subjectInput">Subjek</label>
                </div>

                <div class="form-floating mb-3">
                  <textarea class="form-control" id="messageInput" name="message" rows="5" placeholder="Pesan Anda" style="height: 150px" required=""></textarea>
                  <label for="messageInput">Pesan Anda</label>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn-submit">Kirim Pesan <i class="bi bi-send-fill ms-2"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- <span class="sitename">Visible</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>  -->
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <!-- <li><a href="#">Services</a></li> -->
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>Kuningan City,  535022</p>
          <p>Indonesia</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+62 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>codewithti1@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Visible</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Depelov by <a href="https://bootstrapmade.com/">Kelompok 3</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
   <!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1"
     aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Pengguna</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
      </div>

      <div class="modal-body">
        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>{{ $errors->first() }}</strong>
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email"
                   value="{{ old('email') }}" required autofocus
                   class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" required
                   class="form-control">
          </div>
          <button type="submit" class="btn btn-primary w-100">
            Login
          </button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- /Login Modal -->
<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1"
     aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Registrasi Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
      </div>

      <div class="modal-body">
        @if ($errors->has('name') || $errors->has('email') || $errors->has('password'))
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" required class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required class="form-control">
          </div>
          <button type="submit" class="btn btn-success w-100">
            Register
          </button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- /Register Modal -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>
