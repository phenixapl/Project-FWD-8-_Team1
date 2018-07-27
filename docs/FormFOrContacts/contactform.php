<?php 

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "denis200358@gmail.com";
    $headers = "From: Vilson Client ".$mailFrom;
    $txt = "You have received an e-mail from ".$name, $surname.".\n\n".$message.".\n\n".$phone;
    mail($mailTo, $subject, $txt ,$headers);
    header("Location: index.php?sended");
}

$name1 = filter_input(INPUT_POST, 'name');
$surname1 = filter_input(INPUT_POST, 'surname');
$subject1 = filter_input(INPUT_POST, 'subject');
$mail1 = filter_input(INPUT_POST, 'mail');
$phone1 = filter_input(INPUT_POST, 'phone');
$message1 = filter_input(INPUT_POST, 'message');

if (!empty($name1)) {
  if (!empty($surname1)) {
    if (!empty($mail1)) {
      if (!empty($phone1)) {
        if (!empty($subject1)) {
          if (!empty($message1)) {
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "contactform";


          // Create connection 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_error() .')' 
    . mysqli_connect_error());
}
else {
    $sql = "INSERT INTO contactformdata (name, surname, e-mail, phone, subject, message) 
    values ('$name1','$surname1','$mail1','$phone1','$subject1',$message1)";
    if ($conn->query($sql)) {
        echo "Інформація успішно відправлена";
    }
    else {
        echo "Error: ". $sql . "<br>". $conn->error;
    }
    $conn->close();
}
}    
          else {
            echo "Введіть що вас цікавить";
            die();
          }
        }
      }  
     else {
        echo "Вам потрібно вказати номер телефону";
        die(); 
     } 
    }  
  }  
}
else {
    echo "Поле з іменем має бути заповненим";
    die();
}

