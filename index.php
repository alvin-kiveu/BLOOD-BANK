<?php include 'header.php'; ?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">SEARCH FOR A DONOR</h1>
            <p class="lead text-muted">Search for a donor by entering your location and blood group.</p>
            <!-- CREATE A SEARCH FORM -->
            <form action="index.php" method="post">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-control" name="data" type="text" placeholder="Enter Location Or Blood Type" aria-label="Username" aria-describedby="addon-wrapping" required />
                    <button class="btn btn-primary" name="search" type="submit" name="search">Search</button>
                </div>
            </form>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                <?php
                if (isset($_POST['search'])) {
                    $data = $_POST['data'];
                    $search = mysqli_query($db, "SELECT * FROM members WHERE location LIKE '%$data%' OR bloodgroup LIKE '%$data%'");
                    if (mysqli_num_rows($search) > 0) {
                        while ($row = mysqli_fetch_assoc($search)) {
                ?>

                            <div class="col-md-6">
                                <div class="card mb-6 box-shadow">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php
                                                if ($row['gender'] == 'Male') {
                                                ?>
                                                    <img src="img/male.png" class="img-fluid" alt="Responsive image">
                                                <?php
                                                } else {
                                                ?>
                                                    <img src="img/female.png" class="img-fluid" alt="Responsive image">
                                                <?php } ?>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text">
                                                    Name : <span class="text-primary"><?php echo $row['fullnames']; ?></span><br>
                                                    Username : <span class="text-primary"><?php echo $row['username']; ?></span><br>
                                                    Location : <span class="text-primary"><?php echo $row['location']; ?></span><br>
                                                    Blood Type : <span class="text-primary"><?php echo $row['bloodgroup']; ?></span><br>
                                                    Phone : <span class="text-primary"><?php echo $row['phone']; ?></span><br>
                                                    Email : <span class="text-primary"><?php echo $row['email']; ?></span><br>
                                                    Gender : <span class="text-primary"><?php echo $row['gender']; ?></span><br>
                                                    Age : <span class="text-primary"><?php
                                                                                        $dateofbirth = $row['dob'];
                                                                                        //CONVERT THE dateofbirth TO YEAR
                                                                                        $yearofbirth = date('Y', strtotime($dateofbirth));
                                                                                        $currentyear = date('Y');
                                                                                        echo $age = $currentyear - $yearofbirth;
                                                                                        ?></span><br>
                                                </p>
                                                <!-- <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-primary">MAKE REQUEST</button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <?php
                        }
                    } else {
                        echo '<div class="alert alert-danger" role="alert">No results found</div>';
                    }
                }
                ?>




                <?php
                $getmembers = mysqli_query($db, "SELECT * FROM members");
                if (mysqli_num_rows($getmembers) > 0) {
                    while ($row = mysqli_fetch_assoc($getmembers)) {
                ?>

                        <div class="col-md-6">
                            <div class="card mb-6 box-shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <?php
                                            if ($row['gender'] == 'Male') {
                                            ?>
                                                <img src="img/male.png" class="img-fluid" alt="Responsive image">
                                            <?php
                                            } else {
                                            ?>
                                                <img src="img/female.png" class="img-fluid" alt="Responsive image">
                                            <?php } ?>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">
                                                Name : <span class="text-primary"><?php echo $row['fullnames']; ?></span><br>
                                                Username : <span class="text-primary"><?php echo $row['username']; ?></span><br>
                                                Location : <span class="text-primary"><?php echo $row['location']; ?></span><br>
                                                Blood Type : <span class="text-primary"><?php echo $row['bloodgroup']; ?></span><br>
                                                Phone : <span class="text-primary"><?php echo $row['phone']; ?></span><br>
                                                Email : <span class="text-primary"><?php echo $row['email']; ?></span><br>
                                                Gender : <span class="text-primary"><?php echo $row['gender']; ?></span><br>
                                                Age : <span class="text-primary"><?php
                                                                                    $dateofbirth = $row['dob'];
                                                                                    //CONVERT THE dateofbirth TO YEAR
                                                                                    $yearofbirth = date('Y', strtotime($dateofbirth));
                                                                                    $currentyear = date('Y');
                                                                                    echo $age = $currentyear - $yearofbirth;
                                                                                    ?></span><br>
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href='request.php?usr=<?php echo $row['username']; ?>'  class="btn btn-sm btn-outline-primary">MAKE REQUEST</a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </div>

</main>
<?php include "footer.php"; ?>