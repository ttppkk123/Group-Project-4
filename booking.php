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
                <label for="inputClientName">თქვენი სახელი და გვარი </label>
                <input type="text" class="form-control" id="inputClientName" placeholder="" name="client_name"> 
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSpecialistName">აირჩიეთ სპეციალისტი</label>
                <select name="specialist_name" class="form-control wide" id="inputSpecialistName">

                  <!-- added -->
                  <?php foreach ($specialists as $spec): ?> 
                    <option value="<?php echo $spec['name']; ?>">
                      <?php echo $spec['name']; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">მიმართულება</label>
                <select name="department_name" class="form-control wide" id="inputDepartmentName"> 

                   <!-- added -->
                   <?php foreach ($services as $service): ?>
                    <option value="<?php echo $service['title']; ?>">
                      <?php echo $service['title']; ?>
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