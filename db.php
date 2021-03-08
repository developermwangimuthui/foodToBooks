<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "userregistration";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
















// if(isset($_POST['review'])){
//     $fname = $_POST['name'];
//     $phone = $_POST['phone'];
//     $review = $_POST['message'];
//     $rating = $_POST['rating'];

//     $query = "INSERT INTO reviews (full_name, phone_number, reviews, rating) VALUES ('$fname', '$phone', '$review', '$rating')";
//     if(mysqli_query($conn,$query)){
//         echo "<script>alert('Review Added Successfully'); window.location.href ='index.php';</script>";
        
//         exit;
//     }else{
//         echo "Error: ".$query.":- ".mysqli_error($conn);
//     } 
    
//     mysqli_close($conn);

// }

if(isset($_POST['sellBookSave'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $department=$_POST['department'];
    $isbnnumber=$_POST['isbnnumber'];
    $drexelemail=$_POST['drexelemail'];
    $subject=$_POST['subject'];
   
     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
     if($check !== false) {
       echo "File is an image - " . $check["mime"] . ".";
       $uploadOk = 1;
     } else {
       echo "File is not an image.";
       $uploadOk = 0;
     }


     if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $filename =  htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    
    $sql = "INSERT INTO sellbook (firstname,lastname,department,isbnnumber,drexelemail,details,file_path) VALUES ('$firstname','$lastname','$department','$isbnnumber','$drexelemail','$subject','$filename')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Record Added Successfully'); window.location.href ='sellbook.html';</script>";
        
        exit;
    }else{
        echo "Error: ".$sql.":- ".mysqli_error($conn);
    } 
    
    mysqli_close($conn);

    
}

// if(isset($_POST['register'])){
//     $name = $_POST['name'];
//     $username = $_POST['username'];
//     $cpassword = $_POST['confirmpassword'];
//     $password = $_POST['password'];
//     $email = $_POST['email'];
    
//     //escape slashes
//      $name = stripslashes($name);
//     $username =stripslashes($username);
//     $cpassword =stripslashes($cpassword);
//     $password = stripslashes($password);
//     $email = stripslashes($email);
    
//     if($password != $cpassword){
//            echo "<script>alert('Password do  not match.'); window.location.href ='DevamLogin.php';</script>";
//     }else{
        
//          $sql = "INSERT INTO usertable(username,password,name,email) VALUES ('$username','$password','$name','$email')";
    
//          if(mysqli_query($conn,$sql)){
//             echo "<script>alert('Record Added Successfully'); window.location.href ='DevamLogin.php';</script>";

//             exit;
//         }else{
//             echo "Error: ".$sql.":- ".mysqli_error($conn);
//         } 

//         mysqli_close($conn);
//     }
    

// }


// if(isset($_POST['login'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
    
//     //escape slashes
//     $username =stripslashes($username);
//     $password = stripslashes($password);
    
//     $sql = "SELECT username, password FROM  usertable WHERE username = '$username'  AND password = '$password'";
    
    
//      if(mysqli_query($conn,$sql)){
//        $results  = mysqli_query($conn,$sql);
//         $row = mysqli_fetch_array($results,MYSQLI_ASSOC);
//         $count = mysqli_num_rows($results);
//             if($count > 0){
//                 $_SESSION['loged_user'] = $username;
//                  echo "<script>alert('Login successful.'); window.location.href ='DevamLogin.php';</script>";
        
//             }else{
//                 echo "<script>alert('Wrong email or password.'); window.location.href ='DevamLogin.php';</script>";
// ;
//             }

//         exit;
//     }else{
//         echo "Error: ".$sql.":- ".mysqli_error($conn);
//     } 

//     mysqli_close($conn);
    

// }

?>