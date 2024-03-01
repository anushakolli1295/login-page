<html>
<body>
<h1 align="center">COLLEGE FEST MANAGEMENT</h1>
<h2 align="center">REGISTRATION!!</h2>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: radium;
      margin: 0;
      padding: 0;
    }
    form {
      width: 300px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"],
    input[type="email"],
    select {
      width: calc(100% - 20px);
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: calc(100% - 20px);
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
<form method="post">
Name:<input type="text" name="name" required><br><br>
Email:<br><input type="mail" name="email" required><br><br>
Event:<select name="event" required>
<option value="Dance">dance</option>
<option value="literary">literary</option>
<option value="sports">sports</option>
<option value="singing">singing</option>
<option value="treasurehunt">treasurehunt</option>
<option value="painting">painting</option>

</select>
<input type="submit" name="Submit">
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
$event=$_POST["event"];
$sql= "insert into register(name,email,event)VALUES('$name','$email','$event')";
if(mysqli_query($conn,$sql)==True)
{
    echo "<script> alert('Registration successful!');</script>";
    exit;
}
else
{
    echo "<script>alert('Registration unsuccessful!');</script>";
    exit;
}
$s1="select * from register where name='$name' mail='$email' event='$event'";
$res=mysqli_query($conn,$s1);
if(mysqli_num_rows($res)>0){
echo "<table border='1'>";
echo "<tr>
<th>Name</th>
<th>Email</th>
<th>Event</th>
</tr>";
while($row=mysqli_fetch_array($res)){
echo "<tr>
<td>" . $row["name"] . "</td>
<td>" . $row["email"] . "</td>
<td>" . $row["event"] . "</td>
</tr>";
}
echo "</table>";
}
else{
echo "No records";
}
}
?>