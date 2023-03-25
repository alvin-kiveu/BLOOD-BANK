<?php include 'header.php'; ?>
<form style="padding:5%;" action="include/auth.php" method="post">
  <!-- ERROR -->
  <?php

  if (isset($_GET['error'])) {
    echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
  }

  if (isset($_GET['success'])) {
    echo '<div class="alert alert-success" role="alert">' . $_GET['success'] . '</div>';
  }

  ?>
  <fieldset>
    <div class="row">
      <div class="col-6 mb-3">
        <label for="exampleInputEmail1">Full Names</label>
        <input type="text" name="fullnames" class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Names" required>
      </div>

      <div class="col-6 mb-3">
        <label for="exampleInputEmail1">Phone Number</label>
        <input type="number" name='phonenumber' class="form-control w-35" id="exampleInputEmail1" placeholder="Enter Phone Number" required>
      </div>

      <div class="col-6 mb-3">
        <label for="exampleInputEmail1">Location</label>
        <input type="text" name='location' class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Location" required>
      </div>



      <div class="col-6 mb-3">
        <label for="exampleInputEmail1">Blood Type</label>
        <input type="text" name='bloodtype' class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="eg: A+,A-,B+,B-,O+,O-,AB+,AB-" required>
      </div>


      <div class="col-12 mb-3">
        <label for="exampleInputEmail1">Addtional Information</label>
        <textarea name="info" class="form-control w-35" placeholder="Type here......" name='addinfo'></textarea>
      </div>

      <input type="hidden" name="userid" value="<?php if(isset($_GET['usr'])){ echo $_GET['usr']; } ?>" />

      <div class="col-6 form-group">
              <button type="submit" name='makerequest' class="btn btn-outline-primary  form-control font-weight-bold">SUMIT REQUEST</button>
      </div>
    </div>
  </fieldset>

</form>
<?php include "footer.php"; ?>