<?php include 'header.php'; ?>

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

<?php include 'footer.php'; ?>
