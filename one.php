
<html>
<head>
    
    <h1 align="center">COLLEGE FEST MANAGEMENT SYSTEM</h1>
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }
   

        h2 {
            color: #333;
        }
        form {
            background-color: pink;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2 align="center">USER REGISTRATION</h2>
    <form action="one.php" method="post">
	NAME:<input type="text" name="name" required><br><br>
        EMAIL:<input type="email" name="email" required><br><br>
        USERNAME:<input type="text" name="username" required><br><br>
        PASSWORD:<input type="password" name="password" required><br><br>
        <input type="submit" name="Register">
    </form>
</body>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="first";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_error($conn))
{
    die("Connection failed".mysqli_error($conn));
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["name"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$sql="INSERT INTO review(Name,Email,Username,Password)VALUES('$name','$email','$username','$password')";

if(mysqli_query($conn,$sql)==True)
{
    echo "<script> alert('Registration successful!'); window.location.href='login.php';</script>";
    exit;
}
else
{
    echo "<script>alert('Registration unsuccessful!'); window.location.href='login.php';</script>";
    exit;
}
}
?>
