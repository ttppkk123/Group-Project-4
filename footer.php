<?php include 'data.php'; ?>
<!DOCTYPE html>
<html> 
    
<body>
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
