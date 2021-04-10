<?php  
// define variables to empty values  
$nameErr = $emailErr =  "";  
$fname = $email = $lname= "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $fname = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
 $lname = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  


<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["subscribe.php"]); ?>" >    
    Name:   
    <input type="text" fname="first name">  
    <span class="error"><?php echo $nameErr; ?> </span>  
    <br><br>  
<input type="text" lname="last name">  
    <span class="error"><?php echo $namelErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    <span class="error"> <?php echo $emailErr; ?> </span>  
    <br><br>  
                               
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>  
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
echo "Name: " .$lname;  
        echo "<br>";
        echo "Email: " .$email;  
        
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
