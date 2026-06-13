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