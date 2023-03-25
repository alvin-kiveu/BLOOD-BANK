<?php include 'header.php'; ?>

<div class="container">
<table class="table" style="margin-top: 40px;">
  <thead class="thead bg-primary text-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Location</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Info</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $username = $_SESSION['username'];
   //GET ALL THE REQUESTS
    $getRequest = mysqli_query($db, "SELECT * FROM requests WHERE username = '$username'");
    if(mysqli_num_rows($getRequest) > 0){
      $no = 0;
      while($row = mysqli_fetch_array($getRequest)){
        $no++;
    ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $row['fullnames']; ?></td>
      <td><?php echo $row['phonenumber']; ?></td>
      <td><?php echo $row['location']; ?></td>
      <td><?php echo $row['bloodtype']; ?></td>
      <td><?php echo $row['info']; ?></td>
    <?php
      }
    }
    ?>
  </tbody>
</table>
</div>


<?php include "footer.php"; ?>