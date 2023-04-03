<?php
include 'header.php';
?>
<div class="content">
  <div class="container">
    <h4 class="page-title">Dashboard</h4>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-stats card-warning">
          <div class="card-body ">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="col-7 d-flex align-items-center">
                <div class="numbers">
                  <p class="card-category">Registered Users</p>
                  <h4 class="card-title">
                    <?php
                    //COUNT ALL MEMMBERS IN THE DATABASE
                    $result = mysqli_query($db, "SELECT * FROM members");
                    $count = mysqli_num_rows($result);
                    echo $count;
                    ?>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-stats card-success">
          <div class="card-body ">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="col-7 d-flex align-items-center">
                <div class="numbers">
                  <p class="card-category">Admin Users</p>
                  <h4 class="card-title">
                    <?php
                    //COUNT ALL MEMMBERS IN THE DATABASE
                    $result = mysqli_query($db, "SELECT * FROM users");
                    $count = mysqli_num_rows($result);
                    echo $count;
                    ?>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-stats card-danger">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i style=" font-size: 40px;" class="fa-thin fa-code-pull-request"></i>
                </div>
              </div>
              <div class="col-7 d-flex align-items-center">
                <div class="numbers">
                  <p class="card-category">Number Of Requests</p>
                  <h4 class="card-title">
                    <?php
                    //COUNT ALL MEMMBERS IN THE DATABASE
                    $result = mysqli_query($db, "SELECT * FROM requests");
                    $count = mysqli_num_rows($result);
                    echo $count;
                    ?>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row" style="margin-top:5%;">

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Gender Statistics</h4>
          </div>
          <div class="card-body">
            <canvas id="genderpie"></canvas>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Blood Type Statistics</h4>
          </div>
          <div class="card-body">
            <canvas style="height:500px !important;" id="bloodtype"></canvas>
          </div>
        </div>
      </div>


    </div>
    <!-- GET ALL USERS -->

    <div class="row" style="margin-top:5%;">
      <div class="card-sub p-100">
        <h4 class="page-title">RESENT REGISTERED DONAR</h4>
      </div>
      <table class="table table-striped table-striped-bg-default mt-3">
        <thead>
          <tr class="bg-primary text-light">
            <th scope="col">#</th>
            <th scope="col">Fullnames</th>
            <th scope="col">Usermane</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Genders</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Location</th>
            <th scope="col">Blood group</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $result = mysqli_query($db, "SELECT * FROM members");
          $count = 0;
          while ($row = mysqli_fetch_array($result)) {
            $count++;
            echo "<tr>";
            echo "<th scope='row'>" . $count . "</th>";
            echo "<td>" . $row['fullnames'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['bloodgroup'] . "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>


  </div>
</div>
<?php
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='A+'");
$countAplus = mysqli_num_rows($result);
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='A-'");
$countAminus = mysqli_num_rows($result);
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='B+'");
$countBplus = mysqli_num_rows($result);
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='B-'");
$countBminus = mysqli_num_rows($result);
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='AB+'");
$countABplus = mysqli_num_rows($result);
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='AB-'");
$countABminus = mysqli_num_rows($result);
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='O+'");
$countOplus = mysqli_num_rows($result);
$result = mysqli_query($db, "SELECT * FROM members WHERE bloodgroup='O-'");
$countOminus = mysqli_num_rows($result);


?>
<script>
const ctxbloodtype = document.getElementById('bloodtype');

const chartbloodtype = new Chart(ctxbloodtype, {
  type: 'doughnut',
  data: {
    labels: ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'],
    datasets: [{
      label: 'Number of donors',
      data: [<?php echo $countAplus; ?>, <?php echo $countAminus; ?>, <?php echo $countBplus; ?>, <?php echo $countBminus; ?>, <?php echo $countABplus; ?>, <?php echo $countABminus; ?>, <?php echo $countOplus; ?>, <?php echo $countOminus; ?>],
      backgroundColor: [
        '#FF6384',
        '#36A2EB',
        '#FFCE56',
        '#4BC0C0',
        '#9966FF',
        '#F7464A',
        '#46BFBD',
        '#FDB45C'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      position: 'bottom'
    }
  }
});

</script>
<script>
  // const ctx = document.getElementById('bloodtypedata');

  // const chart = new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
  //     datasets: [{
  //       label: '# of Votes',
  //       data: [12, 19, 3, 5, 2, 3],
  //       backgroundColor: '#800211',
  //       borderColor: 'white',
  //       borderWidth: 1
  //     }],
  //     options: {
  //       scales: {
  //         y: {
  //           beginAtZero: true
  //         }
  //       }
  //     }
  //   }
  // });
</script>
<?php
//COUNT MALE IN MEMBERS
$result = mysqli_query($db, "SELECT * FROM members WHERE gender='Male'");
$countmale = mysqli_num_rows($result);
//COUNT ALL FEMALES IN MEMBERS
$result = mysqli_query($db, "SELECT * FROM members WHERE gender='Female'");
$countfemale = mysqli_num_rows($result);
?>
<script>
  const ctxgenderpie = document.getElementById('genderpie');

  new Chart(ctxgenderpie, {
    type: 'pie',
    data: {
      labels: ['Male', 'Female'],
      datasets: [{
        label: 'Gender',
        data: [<?php echo $countmale; ?>, <?php echo $countfemale; ?>], // Change these values to reflect your data
        backgroundColor: [
          'Blue', // Blue color for male
          'Pink' // Red color for female
        ],
        borderColor: [
          'Pink',
          'Blue'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  });
</script>

<?php
include 'footer.php';
?>