<!Doctype html>
<head>
	<title></title>
</head>
<body>
<?php error_reporting(0);?>
<?php
	@mysql_connect("localhost","root","") or die("Demo is not available, please try again later");
	@mysql_select_db("project") or die("Demo is not available, please try again later");
?>
<?php
//header("Content-type: application/vnd.html");
//header("Content-Disposition: attachment;Filename=qn.html");
echo "<html>";
echo "<body bgcolor='FFFFFF'>";
$br_code=$_POST['br_code'];
$name=$_POST['varname'];
$name1=$_POST['varname1'];
$name2=$_POST['varname2'];
$name3=$_POST['varname3'];
$name4=$_POST['varname4'];
$name5=$_POST['varname5'];

$sql7="select * from twomarks ";
$sql_row=mysql_query($sql7);
$j=0;
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$count[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$text5=$count[0];
$text6=$count[1];
$text7=$count[2];
$text8=$count[3];
$text9=$count[4];
$text10=$count[5];
$text11=$count[6];
$text12=$count[7];
$text13=$count[8];
$text14=$count[9];
$j=0;
/*$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='$name4'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$text15=$c[0];
$j=0;$k=0;
if('1'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='1'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1
;}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('2'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='2'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('3'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='3'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('4'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='4'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$j=0;
if('5'!=$name4)
{
$sql8="select * from sixteenmarks where sem_id='$br_code' and subject_name='$name3' and s_no='$name5' and l_no='5'";
$sql_row=mysql_query($sql8);
while($sql_res4=mysql_fetch_assoc($sql_row))
{
	$c[$j]=$sql_res4["questions"];
	$j=$j+1;
}
$t[$k]=$c[0];
$k=$k+1;
$t[$k]=$c[1];
$k=$k+1;
}
$text16=$t[0];
$text17=$t[1];
$text18=$t[2];
$text19=$t[3];
$text20=$t[4];
$text21=$t[5];
$text22=$t[6];
$text23=$t[7];*/
echo "<b><center><font size='4'>Question Paper</font></center></b>";
echo "<br>";
echo "<b><font size='3'>Campus:</font></b>";
echo $name;
echo "<br><br>";
echo "<b><font size='3'>Branch:</font></b>";
echo $name1;
echo "<br><br>";
echo "<b><font size='3'>Sem:</font></b>";
echo $name2;
echo "<br><br>";
echo "<b><font size='6'><center>".$name3."</center></font></b><br><br>";
echo "<b><font size='4'><center>Part-A (10X2=20)</center></font></b>";
echo "<br><br>";?>
<form method="post" name="form1" action="success.php" >
	<?php
echo "<font size='3'><b>1.".$text5."</b></font><br><br>";
?>

<input type="radio"name="op1" required>a) int __a3;<br>
<input type="radio"name="op1">b) int __3a;<br>
<input type="radio"name="op1">c) int __A3;<br>
<input type="radio"name="op1">d) None of the mentioned<br><br>
<?php
echo "<font size='3'><b>2.".$text6."</b></font><br><br>";
?>
<input type="radio" name="op2" required>a) LowerCase letters<br>
<input type="radio" name="op2">b) UpperCase letters<br>
<input type="radio" name="op2">c) CamelCase letters<br>
<input type="radio" name="op2">d) None of the mentioned<br><br>
<?php
echo "<font size='3'><b>3.".$text7."</b></font><br><br>";
?>
<input type="radio" name="op3" required>a) It is not standardized<br>
<input type="radio" name="op3">b) To avoid conflicts since assemblers and loaders use such names<br>
<input type="radio" name="op3">c) To avoid conflicts since library routines use such names<br>
<input type="radio" name="op3">d) To avoid conflicts with environment variables of an operating system<br><br>
<?php
echo "<font size='3'><b>4.".$text8."</b></font><br><br>";
?>
<textarea rows="4" cols="50" required>     </textarea><br>
<br>
<input type="submit" name="submit" value="submit" />
</form>
<?php
if(isset($_POST['submit']))
{
	header('location:success.php');

}
?>
</body>
</html>