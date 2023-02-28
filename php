<!DOCTYE HTML>
<html>
    <head>
        <title>Form Validation</title>
</head>
<h1> Form Validation</h1>
<div class="container">
<form action="" method="post">
    <p>Name:</p>
    <input type="text" placeholder="Your name" name="name"required>
    <p>Email:</p>
    <input type="text"   placeholder="Your email" name="email"required>
    <p>Phone number:</p>
    <input type="tel"   placeholder="Your number" name="number"required>
    <p>Gender:</p>
    <input type="radio" id="gender" value="male" name="gender"required>
    <label for="male">Male</label><br>
    <input type="radio" id="gender" value="female" name="gender">
    <label for="female">Female</label><br>
    <input type="radio" id="gender" value="others" name="gender">
    <label for="others">Others</label><br>
    <p>Hobbies:</p>
    <input type="checkbox" name="hobbies" value="travelling" id="hobbies"required>
    <label for="travelling">Travelling</label><br>
    <input type="checkbox" name="hobbies" value="reading" id="hobbies">
    <label for="reading">Reading</label><br>
    <input type="checkbox" name="hobbies" value="listeningtomusic" id="hobbies">
    <label for="listeningtomusic">Listeing to music</label><br>    
    <button name="submit">Submit</button><br>
</form>
</html>

<?php
if(isset($_POST["submit"])){
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$gender=$_POST["gender"];
$hobbies=$_POST["hobbies"];
if(strlen($name)<5){
    echo "<span style='color:red';>Name should be atleast 5 characters</span><br>";
}
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span style='color:red';>Invalid email format</span><br>";
        if(!is_numeric($number)){
            echo "<span style='color:red';>Number should be in numeric format</span><br>";
        }
      }
else{
    echo "<h3>Input data are:</h3>";
    echo "Name is:$name";
    echo"<br>";
    echo "Email is:$email";
    echo"<br>";
    echo "Phone number is:$number";
    echo"<br>";
    echo "Gender is:$gender";
    echo"<br>";
    echo "Hobby is:$hobbies";

}
}
?>
