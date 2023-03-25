<?php
$publishkey = 'ISPubKey_live_43725789-f5b8-43c8-9191-0b01475c55b0';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
  <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  </meta>
  <meta name="description" content="UMESKIA SOFTWARES is a Software Development Solutions and Services company.">
  <meta name="keywords" content="UMESKIA, UMESKIA SOFTWARES, UMESIKIA SOFTWARES,UMESKIA,UMESKIA WIFI,UMESIKIA,UMESKIA HOTSPOT,UMESKIA BLOG,UMESKIA PORTAL,UMESKIA SOFTWARES PORTAL,UMESKIA SOFTWARE,UMESIKIA SOFTWARE, Cloud Based ISP Billing & Hotspot Management,ISP, BULKY SMS PROVIDER">
  <meta property="og:image" content="https://intasend-prod-static.s3.amazonaws.com/img/intasend-logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://unpkg.com/intasend-inlinejs-sdk@3.0.4/build/intasend-inline.js"></script>
  <!-- BOOSTRAP CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <title>INTASEND</title>
  <style>
    body {
      background-color: #cfe4f8;

    }

    button {
      width: 100%;
      height: 50px;
      border-radius: 5px;
      border: none;
      background-color: green;
      color: #fff;
      font-weight: bold;
      font-size: 1.2em;
      text-transform: uppercase;
      margin-bottom: 10%;
    }

    button:hover {
      background-color: #fff;
      color: green;
      border: 1px solid green;
    }

    .container {
      margin-top: 2%;
      padding-bottom: 5%;
    }

    img {
      width: 100%;
      height: 200px;
    }
  </style>

</head>

<body>
  <div class='container bg-light pt-100'>
    <h1 class="text-uppercase text-center">Payment Gateway</h1>
    <h6>Umeskia softwares Card / Bitcoin payment</h6>
    <hr />


    <div class='row'>

    <?php 
    if(!isset($_POST['makepayment'])){
    ?>
      <div class="col-12">
        <form action="cardpayment.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="exampleInputPassword1" placeholder="Enter Last Name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" required>
          </div>
          <div class="form-check">
  
          </div>
          <button type="submit" name="makepayment" class="btn btn-success">MAKE PAYMENT</button>
        </form>
      </div>
      <?php
      }
      ?>

      <?php
      if(isset($_POST['makepayment'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
      ?>
      <div class='row'>
        <div class="col-12">
          <h6>Choose Payment Method</h6>
        </div>
        <div class="col-md-6  mt-10">
          <button class="intaSendPayButton" data-method="CARD-PAYMENT" data-amount="1" data-currency="USD" data-email="<?php echo $email; ?>" data-first_name="<?php echo $firstname; ?>" data-last_name="<?php echo $lastname; ?>" data-address="Westlands Nairobi" data-city="Nairobi" data-state="Nairobi" data-zipcode="00100" data-country="KE">Pay with Visa/MasterCard</button>
        </div>
        <div class="col-md-6  mt-10">
          <button class="intaSendPayButton" data-method="BITCOIN" data-amount="1" data-currency="USD" data-email="<?php echo $email; ?>" data-first_name="<?php echo $firstname; ?>" data-last_name="<?php echo $lastname; ?>" data-country="KE">Pay with Bitcoin</button>
        </div>
        <div class="col-12">
          <span style="display:block; text-align: center;"> <a href="https://intasend.com/security" target="_blank"><img src="https://intasend-prod-static.s3.amazonaws.com/img/trust-badges/intasend-trust-badge-with-mpesa-hr-light.png" width="375px" alt="IntaSend Secure Payments (PCI-DSS Compliant)"></a> <strong><a style="display: block; color: #454545; text-decoration: none; font-size: 0.8em; margin-top: 0.6em;" href="https://intasend.com/security" target="_blank">Secured by IntaSend Payments</a></strong> </span>
        </div>
      </div>
      <?php } ?>

    </div>
    <script>
      new window.IntaSend({
          // Replace with your Publishable Key
          publicAPIKey: "<?php echo $publishkey; ?>",
          live: true //set to true when going live
        })
        .on("COMPLETE", (results) => console.log("Do something on success", results))
        .on("FAILED", (results) => console.log("Do something on failure", results))
        .on("IN-PROGRESS", (results) => console.log("Payment in progress status", results))
    </script>
</body>

</html>