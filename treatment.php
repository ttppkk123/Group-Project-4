<?php include 'header.php'; ?>

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

<?php include 'footer.php'; ?>
