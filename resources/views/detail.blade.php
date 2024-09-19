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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .course-banner {
            background: linear-gradient(45deg, #ffebcc, #ffc107);
            padding: 50px;
            border-radius: 10px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .img-fluid {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .course-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .price-discounted {
            text-decoration: line-through;
            color: #6c757d;
        }

        .price-current {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
        }

        .course-price {
            background: #efefef;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-9">
                <!-- Left Section -->
                <div class="course-banner d-flex align-items-center">
                    <div class="col-md-6">
                        <h1 class="text-dark fw-bold">Machine Learning<br><span class="text-warning">Batch II</span>
                        </h1>
                        <p>Price Start <strong class="text-warning">1,5 Juta / 2 Bulan</strong></p>
                        <button class="btn btn-warning btn-lg">Enroll Now</button>
                        <ul class="list-inline mt-3">
                            <li class="list-inline-item"><i class="bi bi-building"></i> Offline Class</li>
                            <li class="list-inline-item">5-10 Orang</li>
                            <li class="list-inline-item">Fleksibel</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="images/testimonials/pmflt.jpg" alt="Course Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <!-- Right Section -->
                <div class="course-price">
                    <h4>Machine Learning Batch 2</h4>
                    <p><i class="bi bi-calendar3"></i> 01-08-2024 | 13:00</p>
                        <p class="price-discounted">Rp. 1.800.000</p>
                        <p class="price-current">Rp. 1.500.000</p>
                        <p>Course includes:</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-bar-chart"></i> Level: Medium</li>
                            <li><i class="bi bi-clock"></i> Duration: 3 Hours / Day</li>
                            <li><i class="bi bi-clipboard"></i> Lessons: 16 Meet</li>
                            <li><i class="bi bi-patch-check"></i> Certifications: Yes</li>
                        </ul>
                        <button class="btn btn-warning">Register Now</button>
                    </div>
                    <button class="btn btn-primary mt-3">Overview</button>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- CONTENT FOR THE MOBILE NUMBER  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            <path d="M15 7a2 2 0 0 1 2 2" />
                            <path d="M15 3a6 6 0 0 1 6 6" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="#" class="contact-box__info--title">+1 728365413</a>
                        <p class="contact-box__info--subtitle"> Mon-Fri 9am-6pm</p>
                    </div>
                </div>
                <!-- CONTENT FOR EMAIL  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="3 9 12 15 21 9 12 3 3 9" />
                            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <line x1="3" y1="19" x2="9" y2="13" />
                            <line x1="15" y1="13" x2="21" y2="19" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="#" class="contact-box__info--title">info@company.com</a>
                        <p class="contact-box__info--subtitle">Online support</p>
                    </div>
                </div>
                <!-- CONTENT FOR LOCATION  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="18" y1="6" x2="18" y2="6.01" />
                            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                            <line x1="9" y1="4" x2="9" y2="17" />
                            <line x1="15" y1="15" x2="15" y2="20" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="#" class="contact-box__info--title">New York, USA</a>
                        <p class="contact-box__info--subtitle">NY 10012, US</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- START THE SOCIAL MEDIA CONTENT  -->
        <div class="footer-sm" style="background-color: #212121;">
            <div class="container">
                <div class="row py-4 text-center text-white">
                    <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                        connect with us on social media
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- START THE CONTENT FOR THE CAMPANY INFO -->
        <div class="container mt-5">
            <div class="row text-white justify-content-center mt-3 pb-3">
                <div class="col-12 col-sm-6 col-lg-6 mx-auto">
                    <h5 class="text-capitalize fw-bold">Campany name</h5>
                    <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                    <p class="lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ex obcaecati blanditiis
                        reprehenderit ab mollitia voluptatem consectetur?
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                    <h5 class="text-capitalize fw-bold">Products</h5>
                    <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                    <ul class="list-inline campany-list">
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                    <h5 class="text-capitalize fw-bold">useful links</h5>
                    <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                    <ul class="list-inline campany-list">
                        <li><a href="#"> Your Account</a></li>
                        <li><a href="#">Become an Affiliate</a></li>
                        <li><a href="#">create an account</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                    <h5 class="text-capitalize fw-bold">contact</h5>
                    <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                    <ul class="list-inline campany-list">
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- START THE COPYRIGHT INFO  -->
        <div class="footer-bottom pt-5 pb-5">
            <div class="container">
                <div class="row text-center text-white">
                    <div class="col-12">
                        <div class="footer-bottom__copyright">
                            &COPY; Copyright 2021 <a href="#">Company</a> | Created by <a
                                href="http://codewithpatrick.com" target="_blank">Muriungi</a><br><br>

                            Distributed by <a href="http://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>