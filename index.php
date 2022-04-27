<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">
    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome To Banking Website</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   /* width: 100%;
   height:90px; */
   height:8rem;
    width:100vw ;
   
   background-color: blue;
   color: #f4f4f4;
   text-align: center;
   padding: 0.5rem;
}
/* .footer{
    text-align: center;
    background-color: #c5570d;
    color: #f4f4f4;
    height:10rem;
    width:100vw ;
    padding: 0.5rem;
    position: relative;

} */
</style>
</head>
<body>
<!-- <div id="lock"><img src="statics/logo.jpg" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
</div> -->
<div id="container">
    <?php include 'spin.php'; ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav " >
                    <li class="nav-item nav-links " >
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php" style="color:#f4f4f4;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="send_money.php" style="color:#f4f4f4;">Send Money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="all_cust.php" style="color:#f4f4f4;">View All Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="transactions.php" style="color:#f4f4f4;">See Transactions History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="contact_us.php" style="color:#f4f4f4;">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="Vision.php" style="color:#f4f4f4;">Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="Mission.php" style="color:#f4f4f4;">Mission</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
                </ul>
            </b>
        </div>
    </nav>  

   

    <div class="container-large"
        style="height:500px; width:100%; padding:8% 2% 2% 2%; background-image: url(statics/bg1.jpg);">
        
            <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
            <img src="statics/logo.jpg"  alt="" style="width:100%;height:300px;">
            </div>
        </div>
    </div>
    <img src="statics/bg.jpg" alt="" style="width:100%; position:absolute; z-index:-1">

    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Facilities Provided</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-users fa-7x"></i><br><br>
                            <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div id="styl">
                            <i class="fas fa-coins fa-7x"></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
<footer class="footer">
    <div class="social-media-links">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook fa-3x"></i></a>
        <a href=" https://www.instagram.com/ " target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
        <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>      
    </div>
    <p>Social Media-Links &copy; 2021 , All Rights Reserve
    </p>
</footer>
    
</body>
</html>