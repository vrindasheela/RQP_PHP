<!Doctype html>
<head>
<style>
body{
    background: url(login.jpg);
    background-size: 1500px 1500px;
    background-repeat: no-repeat;
}
</style>
<title>Question Paper Generator</title>
</head>
<body><h1><center>Question Paper Generator</center></h1>
<br><br><br><br>
<center><h3>Please Fill Form To Enter</h3></center>
<form method="post" name="form" >
<center>Enter Username:<select>

<option value="2">Administrator</option>

</select>
</center>
<br><br><center>Enter Password:<input type="password" name="password"/></center>
<br><br><center><input type="submit" value="submit" name="submit"/></center>
</form>
<br><br><center><img src="qn.jpg"></img></center>
<?php
if(isset($_POST['submit']))
{
$password=$_POST['password'];
if($password=="admin")
{
header('location:qnpapergen.php');
} 
else
{
echo "<script type='text/javascript'>alert('Your username or password is incorrect');</script>";
}
}
?>
</body>
</html>