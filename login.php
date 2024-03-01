<html>
<head>
<h1 align="center">User Login</h1>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
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
    <form action="login.php" method="post">
        USERNAME:<input type="text" name="username" required><br><br>
        PASSWORD:<input type="password" name="password" required><br><br>
        <input type="submit" name="login">
    </form>
</head>
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
$username=$_POST["username"];
$password=$_POST["password"];
$sql="select * from review where Username='$username' and Password='$password'";
$result=mysqli_query($conn,$sql);
$check=mysqli_fetch_array($result);
if(isset($check)){
echo "<script>window.location.href='button.php';</script>";
}
else{
echo "<script>alert('login failed');window.location.href='login.php';</script>";
}

}
?>
