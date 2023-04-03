<?php
include 'header.php';
?>
<div class="content">
  <div class="container">
    <h4 class="page-title">All Donnar</h4>
    

    <!-- GET ALL USERS -->

    <div class="row" style="margin-top:5%;">
      <div class="card-sub p-100">
        <h4 class="page-title">RESENT  DONARS</h4>
      </div>
      <table class="table table-striped table-striped-bg-default mt-3">
        <thead>
          <tr class="bg-primary text-light">
            <th scope="col">#</th>
            <th scope="col">Fullnames</th>
            <th scope="col">Usermane</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Location</th>
            <th scope="col">Blood group</th>
            <th scope="col">Infomation</th>
          </tr>
        </thead>
        <tbody>
       <?php
        $result = mysqli_query($db, "SELECT * FROM  requests");
        $count = 0;
        while ($row = mysqli_fetch_array($result)) {
          $count++;
          echo "<tr>";
          echo "<th scope='row'>" . $count . "</th>";
          echo "<td>" . $row['fullnames'] . "</td>";
          echo "<td>" . $row['username'] . "</td>";
          echo "<td>" . $row['phonenumber'] . "</td>";
          echo "<td>" . $row['location'] . "</td>";
          echo "<td>" . $row['bloodtype'] . "</td>";
          echo "<td>" . $row['info'] . "</td>";
          echo "</tr>";
        }
        ?>
        </tbody>
      </table>
    </div>


  </div>
</div>

<?php
include 'footer.php';
?>