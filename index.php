<?php include 'header.php'; ?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">SEARCH FOR A DONOR</h1>
            <p class="lead text-muted">Search for a donor by entering your location and blood group.</p>
            <!-- CREATE A SEARCH FORM -->
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input class="form-control" type="text" placeholder="Enter Location Or Blood Type" aria-label="Username" aria-describedby="addon-wrapping" />
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">


                <div class="col-md-4">
                    <div class="card mb-6 box-shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="img/male.png" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-6">
                                <p class="card-text">
                                    Name : <span class="text-primary">John Doe</span><br>
                                    Location : <span class="text-primary">Nairobi</span><br>
                                    Blood Type : <span class="text-primary">A+</span><br>
                                    Phone : <span class="text-primary">0712345678</span><br>

                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary">MAKE REQUEST</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-6 box-shadow ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="img/female.png" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-6">
                                <p class="card-text">
                                    Name : <span class="text-primary">Jane Doe</span><br>
                                    Location : <span class="text-primary">Nairobi</span><br>
                                    Blood Type : <span class="text-primary">A+</span><br>
                                    Phone : <span class="text-primary">0712345678</span><br>

                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary">MAKE REQUEST</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>
<?php include "footer.php"; ?>