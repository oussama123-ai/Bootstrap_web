<?php
  error_reporting(0);
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=oussamakraiem','root','');
  }
  catch (Exception $e){
    die('Erreur:'.$e->getMessage());
  }
if (isset($_POST['submit']))
{
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $ordre = $bdd->query("INSERT INTO contact (lname,fname,email,message) VALUES ('$lname','$fname','$email','$message')");
  if($ordre){
    header("location:http://localhost/Mini_Projet/index.html?success=1#contact");
  }else{
    header("location:http://localhost/Mini_Projet/index.htm?success=-1#contact");
  }
}
 ?>