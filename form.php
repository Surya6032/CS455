<!DOCTYPE HTML>  
<html>
<head>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #666666;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.error {
    color: #FF0000;
}
body{
	font-family: montserrat, arial, verdana;
	background:#f2f2f2
}

textarea {
  width: 50%;
  height: 100px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
input[type=text] {
  width: 30 %;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  background-color: #f8f8f8;
  outline: none;
  border-radius: 4px;
}
input[type=tel] {
  width: 30 %;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  background-color: #f8f8f8;
  outline: none;
  border-radius: 4px;
}

input[type=text]:focus {
  border: 3px solid #555;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $message = $Band =$Number="";
$nameErr = $emailErr = $messageErr = $BandErr =$NumErr= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }            
            if (empty($_POST["message"])) {
               $message = "";
            }else {
               $message = test_input($_POST["message"]);
            }
            $Band=test_input($_POST["Band"]);
			if (empty($_POST["Number"])){
			$NumErr= "Phone Number is required";}
			else{
				$Number = test_input($_POST["Number"]);
			}
  
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Contact Us</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <br><input type="text" name="name" placeholder="NAME">
  <td><span class = "error">* <?php echo $nameErr;?></span></td>
  <br><br>
  E-mail: <br><input type="text" name="email" placeholder="EMAIL">
   <td><span class = "error">* <?php echo $emailErr;?></span></td>
  <br><br>
  Phone Number: <br><input type="tel" name="Number" placeholder="Phone Number">
   <td><span class = "error">* <?php echo $NumErr;?></span></td><br>
  Band you are Intrested in:<br><input type="text" name="Band" placeholder="BAND"><br><br>
  Message: <br> <textarea name="message" rows="5" cols="40" placeholder="MESSAGE"></textarea>
  <td><span class = "error">* <?php echo $messageErr;?></span></td>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
?>
Name:
<?php
 echo $name;?><br><br>
Email:
<?php
echo  $email;
?><br><br>
Phone Number:
<?php
 echo $Number;?><br><br>
Band Intrested in:
<?php
 echo $Band;?><br><br>
Message:
<?php echo $message;
?><br>


</body>
</html>
