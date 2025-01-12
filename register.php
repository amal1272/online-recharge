<?php
require_once("connect.php");
?>
<?php
if (isset($_POST["sub33"])) {
     $mob_no = $_POST['tel'];
     $sim = $_POST['sim'];
     $state = $_POST['state'];
     $amount = $_POST['amount'];

     // SQL query to insert data into database

     $sql = "INSERT INTO `mobile` (`mob_no`, `state`, `sim`, `amount`) VALUES ('$mob_no', '$sim', '$state', '$amount')";
     // Execute the query
     
     if($rs = mysqli_query($con, $sql)){
  
          header("Location: pay.php?mob_no=$mob_no&amount=$amount");

}
    }else if (isset($_POST["pay"])) {
     $rec_no =$_POST['rec_no'];
     $gpay = $_POST['gpay'];
     $amount = $_POST['amount'];
     $type=$_POST['type'];
    
     // SQL query to insert data into database

     $sql = "INSERT INTO `pay_mob` (`gpay`, `amount`, `recno`, `type`) VALUES ('$gpay', '$amount', '$rec_no', '$type')";
     // Execute the query
    if($rs = mysqli_query($con, $sql)){

     header("Location: index.php");
    }
     
    }if (isset($_POST["dth"])) {
     $type = $_POST['type'];
     $cid = $_POST['cid'];
     $amount = $_POST['amount'];

     // SQL query to insert data into database

     $sql = "INSERT INTO `dth` (`type`, `cid`, `amount`) VALUES ('$type', '$cid', '$amount')";
     // Execute the query
     
     if($rs = mysqli_query($con, $sql)){
  
          header("Location: pay.php?cid=$cid&amount=$amount");
}
    }if (isset($_POST["data_card"])) {
     $opr = $_POST['opr'];
     $tel = $_POST['tel'];
     $amount = $_POST['amount'];

     // SQL query to insert data into database

     $sql = "INSERT INTO `data_card` (`opr`, `d_num`, `amount`) VALUES ('$opr', '$tel', '$amount')";
     // Execute the query
     
     if($rs = mysqli_query($con, $sql)){
  
          header("Location: pay.php?d_num=$tel&amount=$amount");;
}
    }if (isset($_POST["ele"])) {
     // Include your database connection file
    // Ensure you have a connection file
 
     // Get the POST data
     $cost_nam = $_POST['cost_id'];
     $con_num = $_POST['con_num'];
     $amount = $_POST['amount'];
 
     // Prepare the SQL statement to prevent SQL injection
     $stmt = $con->prepare("INSERT INTO `electricty` (`cost_name`, `con_num`, `amount`) VALUES (?, ?, ?)");
     
     // Check if the statement was prepared successfully
     if ($stmt) {
         // Bind the parameters
         $stmt->bind_param("ssi", $cost_nam, $con_num, $amount); // ssi means string, string, integer
 
         // Execute the statement
         if ($stmt->execute()) {
             // Redirect to pay.php with the parameters
             header("Location: pay.php?con_num=$con_num&amount=$amount");
             exit(); // Stop further execution
         } else {
             // Handle the error if execution fails
             echo "Error executing query: " . $stmt->error;
         }
 
         // Close the statement
         $stmt->close();
     } else {
         // Handle the error if statement preparation fails
         echo "Error preparing statement: " . $con->error;
     }
 
     // Close the database connection
     $con->close();
 }
    if (isset($_POST["reg"])) {
     $name = $_POST['name'];
     $phno = $_POST['mobile'];
     $email = $_POST['email'];
     $pass = $_POST['pass'];

     // SQL query to insert data into database

     $sql="INSERT INTO `reg`(`name`, `pass`, `email`, `phno`) VALUES ('$name','$pass','$email','$phno')";
     // Execute the query
     
     if($rs = mysqli_query($con, $sql)){
  
     header("location:index.php");
}
    }
    elseif (isset($_POST["login"])) {
     $umail = $_POST['email'];
     $password = $_POST['pass'];
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {



          $sql = "SELECT * FROM reg WHERE email = '$umail' AND pass = '$password' ";
          $sql2 = "SELECT * FROM `admin` WHERE user_id = '$umail' AND pass = '$password'";
          if($result = mysqli_query($con, $sql)){
          $check = mysqli_fetch_array($result);
          if (isset($check)) {
               header("Location:index.php", true, 301);
          } elseif($result2 = mysqli_query($con, $sql2)) {
              
               $check2 = mysqli_fetch_array($result2);
               if (isset($check2)) {
                    header("Location:admin/index.php", true, 301);
          }else
          {
               header("Location:reg.php", true, 301);
          }
     }}
     }}
elseif (isset($_POST['su3'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['pass'];
     $phno=$_POST['phno'];
     $query = "UPDATE `reg` SET `name`='$name', `pass`='$password', `email`='$email' WHERE `phno`='$phno'";
     $query_run = mysqli_query($con, $query);
     if ($query_run) {
          $_SESSION['message'] = "user/admin updated sessufully";
          header('location:admin\index.php');
          exit(0);
     } else {
          $_SESSION["message"] = "something wrong";
          header('location:../admin/index.php');
     }}elseif (isset($_POST['sub34'])) {

          $ph = $_POST['sub34'];
          $query="DELETE  FROM reg WHERE phno='$ph'";
          $query_run=mysqli_query($con,$query);
            if($query_run){
                $_SESSION['message']="user/admin Delted sessufully";
                header('location:admin\index.php');
               }
            else
     
     
               {
                $_SESSION["message"]= "something wrong";
                header('location:../admin/index.php');
               }
     }elseif (isset($_POST['su5'])) {
          $offer = $_POST['offer'];
          $val = $_POST['val'];
          $rs = $_POST['rs'];
     
          $query = "UPDATE `plans` SET `offer`='$offer', `validity`='$val' WHERE `rs`='$rs'";
          $query_run = mysqli_query($con, $query);
          if ($query_run) {
               $_SESSION['message'] = "user/admin updated sessufully";
               header('location:admin\index.php');
               exit(0);
          } else {
               $_SESSION["message"] = "something wrong";
               header('location:../admin/index.php');
          }}elseif (isset($_POST['sub34'])) {
     
               $ph = $_POST['sub34'];
               $query="DELETE  FROM reg WHERE phno='$ph'";
               $query_run=mysqli_query($con,$query);
                 if($query_run){
                     $_SESSION['message']="user/admin Delted sessufully";
                     header('location:admin\index.php');
                    }
                 else
          
          
                    {
                     $_SESSION["message"]= "something wrong";
                     header('location:../admin/index.php');
                    }
          }if (isset($_POST["su6"])) {
               $rs = $_POST['rs'];
               $val = $_POST['val'];
               $offer = $_POST['offer'];
          
               // SQL query to insert data into database
          
               $sql = "INSERT INTO `plans`(`rs`, `validity`, `offer`) VALUES ('$rs','$val','$offer')";
               // Execute the query
               
               if($rs = mysqli_query($con, $sql)){
            
               header("location:admin\index.php");
          }
     }elseif (isset($_POST['su89'])) {

          $rs = $_POST['su89'];
          $query="DELETE  FROM plans WHERE rs='$rs'";
          $query_run=mysqli_query($con,$query);
            if($query_run){
                $_SESSION['message']="user/admin Delted sessufully";
                header('location:admin\index.php');
               }
            else
     
     
               {
                $_SESSION["message"]= "something wrong";
                header('location:../admin/index.php');
               }
     }


     ?>