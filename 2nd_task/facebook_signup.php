<?php
//this code it to sore the signup data in users data base
//this line is for estbalish data base connection and it store in connection variable 
$connection = mysqli_connect("localhost","root","","facebook");

//Varibale decalration which reads data from html page 
$firstname     = $_POST["first_name"];
$surname       = $_POST["sur_name"];
$birth_day     = $_POST["birth_day"];
$birth_month   = $_POST["birth_month"];
$birth_year    = $_POST["birth_year"];
$mobile_email  = $_POST["mobile_email"];
$password      = $_POST["password"];
$gender        = $_POST["gender"];


//if conncetion sucessful insert quiery execute 
if($connection) {
    
   $query = "INSERT INTO `users` (`firstname`,`surname`,`mobile_email`,`password_hash`,`birth_day`,`birth_month`,`birth_year`,`gender`)
    VALUES ('$firstname','$surname','$mobile_email','$password','$birth_day','$birth_month','$birth_year','$gender')";

    $result = mysqli_query($connection,$query);

    if($result){
        //dsp sucess msg
        echo "Data saved clikc on login";
    }
    else{
        //dsp unable to save msg 
        echo "Data is not saved try again";
    }

}
else{
    //if connectino fail it will dsp error 
    echo "servers is down try again";
}
    
?>
