<?php

include_once ("db_connection.php");


//check something shit

$email = $_POST ['email'];
$password = $_POST ['password'];

//something sql shit happen here

if(isset($_POST['user']))

{
  $sql = "SELECT * FROM user WHERE email='$email' and password='".($password)."'";
  $result = mysqli_query($conn, $sql);
}


// if login success

if (mysqli_num_rows($result) )

  {
    session_start();
    $row - mysqli_fetch_assoc($result);

    if(isset($_POST['email']))

{

      $_SESSION ['id'] = $row ['id'];

      header ('Location: ha.php?page=home');
}
}

?>
