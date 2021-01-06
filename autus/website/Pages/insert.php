<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$course = $_POST['course'];
$phonecode = $_POST['phonecode'];
$phone = $_POST['phone'];

if (!empty($username) || !empty($password) || !empty($gender) !empty($email) !empty($course) !empty($phonecode) !empty($phone))
  {
     $host = "localhost";
     $dbUsername = "root";
     $dbPassword = "";
     $dbname = "autus";
     
     //create connection
     $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
     if (mysqli_connect_error()) {
         die ('Connect Error('. mysqli_connect-errno().')' . mysqli_connect());
     }
     else{
         $SELECT = "SELECT email From register where email= ? Limit 1";
         $INSERT = "INSERT Into register (username, password, gender, email, course, phonecode, phone)
         values(?,?,?,?,?,?,?) ";

         //Prepare statment
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $stmt->bind_result($small);
         $stmt->store_result();
         $rnum = $stmt->num_rows;

         if($rnum==0) {
             $stmt->close();

             $stmt->bind_param("1", $username, $password, $gender, $email, $course, $phonecode, $phone);
             $stmt->execute();
             echo "New Record Inserted Successfully...";
            }
          else{
              echo "Someone Already Registered Using This Email...Try Again";
          }
          $stmt->close();
          $conn->close();
     }
 




  }
else{
    echo "All Field Are Required";
    die();
}
?>