<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>


    <div class="spinner" style="display:none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 15;
    background: rgba(0,0,0,0.8) center no-repeat;
    text-align:center;
    "><h1 style="color:white; margin-top:25%;"><i class="fa fa-refresh fa-circle-notch fa-spin" aria-hidden="true"></i>
</h1>
</div>

<?php 

$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "tinkudb";

//  // Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }
// // $sql=  " CREATE TABLE `contactus` (
// //     `sr` int(11) NOT NULL,
// //     `name` varchar(50) NOT NULL,
// //     `phone` int(11) NOT NULL,
// //     `email` varchar(30) NOT NULL,
// //     `message` mediumtext NOT NULL
// //   )";
  
// //   $result = mysqli_query($conn, $sql);

// // // Check for the table creation success
// // if($result){
// //     echo "The table was created successfully!<br>";
// // }
// // else{
// //     echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
// // }
  
// //   $sql= "INSERT INTO `contactus` (`sr`, `name`,`phone`, `email`, `message`) VALUES
// //   (1, 'Tinku', '9988776655', 'tk123@gmail.com','bank service is good'),
// //   (2, 'Pawan kumar', '9768564976', 'pk76648@gmail.com','High quality Bank')";
  
// //   mysqli_query($conn, $sql);
  
// //   $sql=" CREATE TABLE `transactions` (
// //     `sr` int(11) NOT NULL,
// //     `sender` varchar(10) NOT NULL,
// //     `receiver` varchar(10) NOT NULL,
// //     `amount` bigint(20) NOT NULL,
// //     `status` varchar(10) NOT NULL
// //   )" ;
// //  $result = mysqli_query($conn, $sql);

// //  // Check for the table creation success
// //  if($result){
// //      echo "The table was created successfully!<br>";
// //  }
// //  else{
// //      echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
// //  }
  
// //   $sql="INSERT INTO `transactions` (`sr`, `sender`, `receiver`, `amount`, `status`) VALUES
// //   (1, '7788776687', '7784576655', 200, 'succeed'),
// //   (2, '7784576655', '7788783655', 4000, 'succeed')";
// //   mysqli_query($conn, $sql);
  
// //   $sql="CREATE TABLE `users` (
// //     `sr` int(11) NOT NULL,
// //     `name` varchar(20) NOT NULL,
// //     `phone` bigint(11) NOT NULL,
// //     `email` varchar(30) NOT NULL,
// //     `accno` varchar(10) NOT NULL,
// //     `blc` bigint(20) NOT NULL
// //   )" ;
// //   $result = mysqli_query($conn, $sql);

// //   // Check for the table creation success
// //   if($result){
// //       echo "The table was created successfully!<br>";
// //   }
// //   else{
// //       echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
// //   }
  
  
//   $sql= "INSERT INTO `users` (`sr`, `name`,`phone`, `email`, `accno`, `blc`) VALUES
//   (1, 'Pawan kumar','9768564976', 'pk76648@gmail.com', '7788776655', 50000),
//   (2, 'Ramesh ram','7898564976', 'rm7664788@gmail.com', '7788776345', 55000),
//   (3, 'nihal raza','9768934976', 'nr6648@gmail.com', '7780776655', 24000),
//   (4, 'mohan k','9768567856', 'mk76648@gmail.com', '7788776687', 90400),
//   (5, 'madhan R','7868569823', 'madh76648@gmail.com', '7788783655', 107000),
//   (6, 'Bala subramaniam','9238564989', 'ballu648@gmail.com', '7784576655', 23800),
//   (7, 'priyansh garg','8868564998', 'ask6648@gmail.com', '7787665879', 5000),
//   (8, 'ashok gahlot','7668564976' ,'ashokgh495@gmail.com', '7788776348', 67300),
//   (9, 'rishikesh ravi','9787566497' ,'rishir405@gmail.com', '7789654655', 8360),
//   (10, 'Lalu Yadav','9865564784', 'laluae90@gmail.com', '7788776985', 98471),
//   (11, 'Pankaj Patel','8768564906' ,'panky908@gmail.com', '7788276778', 64975)";
//   mysqli_query($conn, $sql);
  
//   $sql="ALTER TABLE `contactus`
//     ADD PRIMARY KEY (`sr`)";
//     mysqli_query($conn, $sql);
  
//     $sql="ALTER TABLE `transactions`
//     ADD PRIMARY KEY (`sr`)";
//     mysqli_query($conn, $sql);
  
//     $sql=" ALTER TABLE `users`
//     ADD PRIMARY KEY (`sr`)";
//     mysqli_query($conn, $sql);
  
//     $sql= "ALTER TABLE `contactus`
//     MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20";
//     mysqli_query($conn, $sql);
  
//     $sql="ALTER TABLE `transactions`
//     MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15";
//     mysqli_query($conn, $sql);
  
//     $sql=" ALTER TABLE `users`
//     MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13";
// //   COMMIT;
// mysqli_query($conn, $sql);

?>


<script>
    
    $(document).ready(function () {
        $("a, :submit").click(function(){
            $(".spinner").css("display","block");
            setTimeout(function() {   //calls click event after a certain time
                $(".spinner").css("display","none");
        }, 5000);
        });
    });
</script>


    </body>
</html>
