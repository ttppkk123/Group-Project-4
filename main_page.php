<?php include 'data.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>მენტალური ჯანმრთელობის ცენტრი</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                ტელეფონი : <?php echo $site['phone']; ?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                ელ-ფოსტა : <?php echo $site['email']; ?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="<?php echo $site['logo']; ?>" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <?php foreach ($nav as $item): ?>
                    <li class="nav-item <?php echo !empty($item['active']) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo $item['url']; ?>">
                      <?php echo $item['title']; ?>
              
                      <?php if (!empty($item['active'])): ?>
                        <span class="sr-only">(მიმდინარე)</span>
                      <?php endif; ?>
      
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    შესვლა
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    რეგისტრაცია
                  </span>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    
    <!-- slider section -->

    <section class="slider_section ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ($slider as $index => $slide): ?>
          <div class="carousel-item <?php if ($index === 0) echo 'active'; ?>">
            <div class="container ">
              <div class="row">
                
                <!-- TEXT -->
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      <?php echo $slide['title']; ?> <br>
                      <span>
                        <?php echo $slide['highlight']; ?>
                      </span>
                    </h1>
                    <p>
                      <?php echo $slide['text']; ?>
                    </p>
                    <a href="<?php echo $slide['link']; ?>">
                      <?php echo $slide['button']; ?>
                    </a>
                  </div>
                </div>

                <!-- IMAGE -->
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo $slide['img']; ?>" alt="">
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">წინა</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">შემდეგი</span>
          </a>
        </div>
      </div>

    </section>

    <!-- end slider section -->

  </div>


  <!-- book section -->

  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="submit.php" method="POST"> 
            <h4>
              ჩაეწერეთ <span>კონსულტაციაზე</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">თქვენი სახელი და გვარი </label>
                <input type="text" class="form-control" id="inputPatientName" placeholder="" name="patient_name"> 
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">აირჩიეთ სპეციალისტი</label>
                <select name="doctor_name" class="form-control wide" id="inputDoctorName">

                  <!-- added -->
                  <?php foreach ($doctors as $doc): ?> 
                    <option value="<?php echo $doc['name']; ?>">
                      <?php echo $doc['name']; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">მიმართულება</label>
                <select name="department_name" class="form-control wide" id="inputDepartmentName"> 

                   <!-- added -->
                   <?php foreach ($treatments as $treat): ?>
                    <option value="<?php echo $treat['title']; ?>">
                      <?php echo $treat['title']; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>              
            </div>
            
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">ტელეფონის ნომერი</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX" name="phone">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">ჩივილები (მოკლე აღწერა)</label>
                <input type="text" class="form-control" id="inputSymptoms" placeholder="" name="symptoms">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">აირჩიეთ თარიღი </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" name="appointment_date" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">ჯავშნის გაგზავნა</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end book section -->


  <!-- about section -->

  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                ცენტრის <span>შესახებ</span>
              </h2>
            </div>
            <p>
               ჩვენი მენტალური ჯანმრთელობის ცენტრი ორიენტირებულია თითოეული ადამიანის კეთილდღეობაზე. ჩვენ გთავაზობთ უსაფრთხო, კონფიდენციალურ და პროფესიონალურ გარემოს, სადაც კვალიფიციური სპეციალისტები დაგეხმარებიან ემოციური ბალანსის აღდგენასა და პიროვნულ ზრდაში.
            <a href="">
              ვრცლად
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- treatment section -->

  <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          ჩვენი <span>სერვისები</span>
        </h2>
      </div>
      <div class="row">
        <?php foreach ($treatments as $treat): ?>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="<?php echo $treat['img']; ?>" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  <?php echo $treat['title']; ?>
                </h4>
                <p>
                  <?php echo $treat['desc']; ?>
                </p>
                <a href="treatment.php?id=<?php echo $treat['id']; ?>">
                  ვრცლად
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- end treatment section -->

  
  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          ჩვენი <span>სპეციალისტები</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <?php foreach ($doctors as $index => $doc): ?>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="<?php echo $doc['img']; ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $doc['name']; ?>
                  </h5>
                  <h6>
                    <?php echo $doc['spec']; ?>
                  </h6>
                  <div class="social_box">
                    <a href="<?php echo $doc['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $doc['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $doc['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                    <a href="<?php echo $doc['instagram']; ?>"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->


  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>პაციენტების შეფასებები</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ($testimonials as $index => $t): ?>
            <div class="carousel-item <?php if ($index === 0) echo 'active'; ?>">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      <?php echo $t['name']; ?>
                    </h5>
                    <h6>
                      <?php echo $t['subtitle']; ?>
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  <?php echo $t['text']; ?>
                </p>
              </div>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">წინა</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">შემდეგი</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          მოგვწერეთ
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
           <form action="contact_success.php" method="POST">
              <input type="text" name="name" placeholder="სახელი" required>
              <input type="email" name="email" placeholder="ელ-ფოსტა" required>
              <input type="text" name="phone" placeholder="ტელეფონი">
              <textarea name="message" placeholder="შეტყობინება"></textarea>
              <button type="submit">გაგზავნა</button>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="<?php echo $site['logo']; ?>" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="თქვენი ელ-ფოსტა">
            <button>
              გამოწერა
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              მისამართი
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span><?php echo $site['address']; ?></span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span><?php echo $site['phone']; ?></span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span><?php echo $site['email']; ?></span>
              </a>
            </div>
            
            <!-- SOCIAL BOX -->
            <div class="სოციალური ქსელები">
              <a href="<?php echo $site['social']['facebook']; ?>">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $site['social']['twitter']; ?>">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $site['social']['linkedin']; ?>">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $site['social']['instagram']; ?>">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <!-- USEFUL LINKS -->
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                სასარგებლო ლინკები
              </h5>
              <div class="info_links_menu">
                <?php foreach ($links as $link): ?>
                  <a href="<?php echo $link['url']; ?>">
                    <?php echo $link['title']; ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- LATEST POSTS -->
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                უახლესი პოსტები
              </h5>
              <?php foreach ($latest_posts as $post): ?>
                <div class="post_box">
                  <div class="img-box">
                    <img src="<?php echo $post['img']; ?>" alt="">
                  </div>
                  <p><?php echo $post['text']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- NEWS -->
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                სიახლეები
              </h5>
              <?php foreach ($news as $post): ?>
                <div class="post_box">
                  <div class="img-box">
                    <img src="<?php echo $post['img']; ?>"" alt="">
                  </div>
                  <p><?php echo $post['text']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> ყველა უფლება დაცულია
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>
