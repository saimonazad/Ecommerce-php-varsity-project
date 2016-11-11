<!--Login code for php-->

<?php
   include("config.php");
   session_start();


//=======THIS IS THE FUNCTION FROM THE PHP MANUAL
function quote_smart($value, $handle)
{
   // Stripslashes
   if (get_magic_quotes_gpc()) {
       $value = stripslashes($value);
   }
   // Quote if not integer
   if (!is_numeric($value)) {
       $value = "'" . mysql_real_escape_string($value, $handle) . "'";
   }
   return $value;
}
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = htmlspecialchars($_POST['username']);
      $mypassword = htmlspecialchars($_POST['password']); 

      
   
      
      $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysql_query($sql);
      $row = mysql_fetch_assoc($result);
      $active = $row['active'];
      

      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == true) {
         session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location:index.php");


      }else {
         $error = "Your Login Name or Password is invalid";

      }
   }
?>