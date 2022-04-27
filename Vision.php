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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Contact Us</title>
    <style>
.footer {
   position: sticky;
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

<body style="background-image:url('statics/5570834-min.jpg'); padding-top:8%;">
    <?php include 'spin.php'; ?>

    <style>
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
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

    <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`name`, `phone`,`email`, `message`) VALUES ('$name','$phone', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for contacting us!
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops '.$name.'! Something went wrong!
        </div>
      </div>';
    }
}
}

?>
<div class="container">
  <h1>Our Vision</h1>
    
  <p class="text-capitalize">To be the most preferred bank in the areas of customer service, stakeholder value and corporate governance.We aspire to become the locally owned, independent community bank of choice for small and medium-sized businesses, professionals, and individuals in central Pennsylvania. We will combine steady growth, consistent earnings, and firm control of risk factors to provide safety for our depositors. Our people will be the difference in establishing consistency in earnings and enhanced shareholder value.</p>

  <h2>Core Values of the bank:</h2>
  <p class="text-capitalize">We trust our principles are clear to every customer from the moment you enter our facilities or speak to a Centric Bank representative:</p>
  <ul class="list-group">
  <li class="list-group-item ">We value an uncompromising dedication to understanding and meeting our clients' financial needs.</li>
  <li class="list-group-item">We recognize and reward the contributions of our team members and believe that qualified, loyal, and committed professionals are our most valuable asset.</li>
  <li class="list-group-item">We practice prudent business planning and cost management strategies to ensure financial viability and responsible growth.</li>
  <li class="list-group-item">We embrace change and continually seek ways to provide quality, cost-effective services that meet or exceed our clients' expectations.</li>
  <li class="list-group-item">We seek to establish a relationship of trust and respect with our clients and value integrity as an organization and as individuals.</li>
</ul>
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
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>