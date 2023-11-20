<?php

  $connection = mysqli_connect('localhost','root','','book_db');

  if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phon = $_POST['phon'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    


    $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES('$name','$email','$phoe','$address','$location','$guests','$arrivals','$leaving')";
         
        
        mysqli_query($connection, $request);

        header('location:book.php');

     }else{
        echo 'something went wrong try again';
  
  
  }

//$servername = "localhost";
//$username = "root";
//$password = "";
//$db = "book_db";

 //Create connection
//$conn = new mysqli($servername, $username, $password, $db);

 //Check connection
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";

//if(isset($_post['send'])){
  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $phon = $_POST['phon'];
  // $address = $_POST['address'];
  // $location = $_POST['location'];
  // $guests = $_POST['guests'];
  // $arrivals = $_POST['arrivals'];
  // $leaving = $_POST['leaving'];

//$sql = "INSERT INTO book_form (name, email, phon, address, location, guests, arrivals, leaving)
//VALUES ('$name','$email','$phon','$address','$location','$guests','$arrivals','$leaving')";

//if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
//} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
//}
//}

//$conn->close();
?>

     <!-- if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phon = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];


        $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES('$name','$email','$phoe','$address','$location','$guests','$arrivals','$leaving')";
         
        
        mysqli_query($connection, $request);

        header('location:book.php');

     }else{
        echo 'something went wrong try again';
     }


?> -->