<!doctype html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
  <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  </meta>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
  <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  </meta>
  <link rel="shortcut icon" href="img/mainlogo.png" />
  <meta property="og:image" content="img/mainlogo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BLOAD BANK</title>
  <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="scss/main.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

<body>
  <style>
    html,
    body {
      height: 100%
    }
  </style>
  <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
    <div class="row shadow-lg  w-50  mb-5 bg-white align-items-center justify-content-center   rounded">
      <form style="padding:5%;">
        <div class="card-header  align-items-center" style="text-align: center;">
          <img src="img/mainlogo.png" alt="logo" class="img" width="100px">
        </div>
        <fieldset>
          <div class="row">
            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">Full Names</label>
              <input type="text" class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Names">
            </div>

            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
            </div>

            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">Phone Number</label>
              <input type="number" class="form-control w-35" id="exampleInputEmail1"  placeholder="Enter Phone Number">
            </div>

            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">Gender</label>
              <select id="exampleInputGender" class="form-control w-35" name="exampleInputGender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>

            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">Location</label>
              <input type="text" class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Location">
            </div>

            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">D.O.B</label>
              <input type="date" class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Age">
            </div>


            <div class="col-6 mb-3">
              <label for="exampleInputEmail1">Blood Type</label>
              <input type="text" class="form-control w-35" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="eg: A+,A-,B+,B-,O+,O-,AB+,AB-">
            </div>



            <div class="col-6 mb-3">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control w-35" id="exampleInputPassword1" placeholder="Password">
            </div>


            <div class="col-6 mb-3">
              <label for="exampleInputPassword1">Cornfirm Password</label>
              <input type="password" class="form-control w-35" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="col-12 form-group">
              <button type="submit" class="btn btn-outline-primary  form-control font-weight-bold">REGISTER</button>
            </div>


            <div class="form-group mt-4">
              <a href="login.php" class="font-weight-bold text-decoration-none">I have a extting account</a>
            </div>
          </div>
        </fieldset>

      </form>
    </div>
  </div>


  <?php include "footer.php"; ?>