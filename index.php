<?php include 'header.php'; ?>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">SEARCH FOR A DONOR</h1>
                <p class="lead text-muted">Search for a donor by entering your location and blood group.</p>
                <!-- CREATE A SEARCH FORM -->
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                    <input class="form-control" type="text" placeholder="Enter Location Or Blood Type" aria-label="Username"
                        aria-describedby="addon-wrapping" />
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">


                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
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

    </main>
<?php include "footer.php"; ?>