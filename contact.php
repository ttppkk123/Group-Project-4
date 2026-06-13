<?php include 'header.php'; ?>

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

<?php include 'footer.php'; ?>
