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
    <title>Transaction</title>
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

<body style="background-color:rgb(128,128,128);">
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

    <style>
        th,
        td {
            text-align: center;
        }
    </style>

    <center>

        <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
            <div
                style="width:80%; background-color:rgba(0,255,0,.5); padding:5px 5px 5px 5px; border-radius:15px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">All Customers</h1>
            </div>
            <?php

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `transactions`";
        $result = mysqli_query($conn, $sql);
?>
           <div class="table-responsive">
            <table class="table table-light  table-bordered table-striped " style="margin-top: 30px;">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Sender</th>
                        <th scope="col">Reciever</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <style>
                    .mybtn {

                        box-shadow: 2px 2px 10px black;
                        border-radius: 30px;
                        font-weight: bold;
                        background-color: lightgreen;
                        color: green;
                    }

                    .mybtn:active {
                        background-color: green;
                        color: lightgreen;
                    }
                </style>
                <?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount'])))
            {echo    '
            <tr>
              <td>'.$row['sender'].'</td>
              <td>'.$row['receiver'].'</td>
              <td>'.$row['amount'].'</td>
              <td>'; ?> <?php if($row['status'] == "succeed"){echo '<b><p style="color:green;">Succeed</p></b>';}else{echo '<b><p style="color:red;">Failed</p></b>';} ?>
              <?php echo '</td>
              </tr>';}
    }
    
    }
    echo "</tbody>";
?>
</table></div>
        </div>
    </center>

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
