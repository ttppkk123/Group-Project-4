

  <div class="hero_area">
    
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

