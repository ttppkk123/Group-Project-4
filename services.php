<?php include 'header.php'; ?>

  <!-- services section -->

  <section class="services_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          ჩვენი <span>სერვისები</span>
        </h2>
      </div>
      <div class="row">
        <?php foreach ($services as $service): ?>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="<?php echo $service['img']; ?>" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  <?php echo $service['title']; ?>
                </h4>
                <p>
                  <?php echo $service['desc']; ?>
                </p>
                <a href="services.php?id=<?php echo $service['id']; ?>">
                  ვრცლად
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- end services section -->

<?php include 'footer.php'; ?>
