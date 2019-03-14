<!Doctype html>
<head>
  <title></title>
</head>
<body>
<style>
body{
background: BlanchedAlmond;
}
div {
    background-color: lightgrey;
    width: 300px;
    padding: 25px;
    margin: 50px;
}
</style>
<?php error_reporting(0);?>
<?php
	@mysql_connect("localhost","root","") or die("Demo is not available, please try again later");
	@mysql_select_db("project") or die("Demo is not available, please try again later");
?>
<html>
<head>
<title>Question Paper Generator</title>
<script language="javascript" type="text/javascript">
    function showBranch(catid) {
        document.frm.submit();
    }
	function showSem(catid) {
        document.frm.submit();
    }
	function showSubject(catid) {
        document.frm.submit();
    }
function showLesson(catid) {
        document.frm.submit();
    }
function showCompul(catid) {
        document.frm.submit();
    }
function showCode(catid) {
        document.frm.submit();
    }
</script>
</head>
<body>
<h1><center>Question Paper Generator</center></h1>
<form action="" method="post" name="frm" id="frm">
Select College:
       <select name="cat_id" id="cat_id" onChange="showBranch(this.value);">
       <option value="">--Select--</option>
       <?php
        $sql1="select * from category";
       $sql_row1=mysql_query($sql1);
       while($sql_res1=mysql_fetch_assoc($sql_row1))
       {
       ?>
       <option value="<?php echo $sql_res1["id"]; ?>" <?php if($sql_res1["id"]==$_REQUEST["cat_id"]) { echo "Selected"; } ?>><?php echo $sql_res1["category_name"]; ?></option>
        <?php
        }
        ?>
       </select>
<br><br>
Select Branch:       
       <select name="company_id" id="company_id" onChange="showSem(this.value);">
       <option value="">--Select--</option>
       <?php
       $sql="select * from branch where cat_id='$_REQUEST[cat_id]'";
       $sql_row=mysql_query($sql);
       while($sql_res=mysql_fetch_assoc($sql_row))
       {
       ?>
       <option value="<?php echo $sql_res["id"]; ?>"<?php if($sql_res["id"]==$_REQUEST["company_id"]) { echo "Selected"; } ?>><?php echo $sql_res["branch_name"]; ?></option>
       <?php
       }
       ?>
    </select>
<br><br>
Select Sem:      
<select name="sem_sel" id="sem_sel"  onChange="showSubject(this.value);">
<option value="">--Select</option>

<?php
$sql2="select * from sem where sem_id='$_REQUEST[company_id]'";
       $sql_row=mysql_query($sql2);
      while($sql_res2=mysql_fetch_assoc($sql_row))
       {
	$count=$sql_res2["sem_value"];
       }       
	$i=1;
	for($i=1;$i<=$count;$i++)
	{
	?>
	<option value="<?php echo $i; ?>" <?php if($i==$_REQUEST["sem_sel"]) { echo "Selected"; } ?>><?php echo $i; ?></option>
<?php
	}
?>
</select>
<br><br>
Select Subject:
<select name="lesson_sel" id="lesson_sel" onChange="showLesson(this.value);">
<option value="">--Select--</option>
<option>C Language</option>
<option>Physics</option>
<option>Data Structure</option>
<?php
$sql6="select * from subject where sem_id='$_REQUEST[company_id]' and sem_value='$_REQUEST[sem_sel]'";
       $sql_row=mysql_query($sql6);
 while($sql_res3=mysql_fetch_assoc($sql_row))
       {
       ?>
       <option value="<?php echo $sql_res3["subject_name"]; ?>"<?php if($sql_res3["subject_name"]==$_REQUEST["lesson_sel"]) { echo "Selected"; } ?>><?php echo $sql_res3["subject_name"]; ?></option>
       <?php
       }
       ?>
    </select>
<br><br>
Select Compulsory Qn Ln:
<select name="compul_sel" id="compul_sel" onChange="showCompul(this.value);">
<option value="">--Select--</option>
<?php
$i=1;
for($i=1;$i<=5;$i++)
{
?>
<option value="<?php echo $i; ?>" <?php if($i==$_REQUEST["compul_sel"]) { echo "Selected"; } ?>><?php echo $i; ?></option>
<?php
}
?>
    </select>
<br><br>
Select Code:
<select name="code_sel" id="code_sel" onChange="showCode(this.value);">
<option value="">--Select--</option>
<?php
$i=1;
for($i=1;$i<=5;$i++)
{
?>
<option value="<?php echo $i; ?>" <?php if($i==$_REQUEST["code_sel"]) { echo "Selected"; } ?>><?php echo $i; ?></option>
<?php
}
?>
    </select>
</form>
</body>
</html>
<?php
if($_REQUEST['cat_id']=='1')
{
$text="CEG Campus";
}
if($_REQUEST['cat_id']=='2')
{
$text="ACTECH Campus";
}
if($_REQUEST['cat_id']=='3')
{
$text="SAP Campus";
}
$br_code=$_REQUEST['company_id'];
switch($_REQUEST['company_id'])
{
case '1':
$text1="Computer Science and Engineering";
break; 
case '15':
$text1="Architecture";break; 
case '2':
$text1="Information Technology"; break;
case '3':
$text1="Civil Engineering";break; 
case '4':
$text1="Mechanical Engineering";break; 
case '5':
$text1="ECE";break; 
case '6':
$text1="EEE"; break;
case '7':
$text1="Chemical"; break;
case '10':
$text1="Food Tech"; break;
case '11':
$text1="Leather Tech"; break;
case '12':
$text1="Ceramic Tech"; break;
case '13':
$text1="Bio-Tech"; break;
case '14':
$text1="Apparel Tech"; break;
}
$text2=$_REQUEST['sem_sel'];
$text3=$_REQUEST['lesson_sel'];
$text4=$_REQUEST["compul_sel"];
$text5=$_REQUEST['code_sel'];
if($text5==2)
{
  header('location:page3.php');
}
?>
<b><center>Selected Details:</center></b>
<center><div>
<form method="post" action="page2.php">
Selected College is:<input type='text' name='varname' size='35' value='<?= $text ?>'/>
<br><br>
Selected Branch is:<input type='text' name='varname1' size='35' value='<?= $text1 ?>'/>
<br><br>
Selected Branch Code is:<input type='text' name='br_code' size='35' value='<?= $br_code ?>'/>
<br><br>
Selected Sem is:<input type='text' name='varname2' size='35' value='<?= $text2 ?>'/>
<br><br>
Selected Subject is:<input type='text' name='varname3' size='35' value='<?= $text3 ?>'/>
<br><br>
Selected Compul.Ln is:<input type='text' name='varname4' size='35' value='<?= $text4 ?>'/>
<br><br>
Selected Code is:<input type='text' name='varname5' size='35' value='<?= $text5 ?>'/>
<br><br>
<input type="submit" value="Get Question Paper"/>
</form>
</div></center>
</body>
</html>