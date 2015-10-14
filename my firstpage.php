<?php
session_start();
$slau="";
if (count($_POST)>0){
$connection = mysql_connect("localhost","root","")or die("server not found".mysql_error ());
$selection = mysql_select_db("mwenge_db")or die("database not found".mysql_error ());
?>

<?php
if (isset($_POST['fname'])){
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$address = $_POST['address'];


		if(! $fname || ! $sname  || !$address ){
$msg = "<font color=red><blink>OOps!!!Dear fill your form perfectly please!</blink></font>"; 
		}
else{
$query = mysql_query("INSERT INTO student VALUES ('','$fname','$sname','$address')");
$msg = "<font color=orange>Dear your data has been sent successfully!</font>";
}

}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-weight: bold;
	font-size: 24px;
}
.style2 {
	color: #0033FF;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>

<body>
<table width="739" height="391" align="center" bgcolor="#99CC99">
<th width="329"> ST.LAWRENCE UNIVERSITY</th>
<tr><td><p><span class="style1"><a href="index.php">my courwork of session and sql injection </a></span></p></td></tr>
   <tr><td> <form id="form1" name="form1" method="post" action="">
      <table width="332" border="0">
        <tr>
          <td width="101">first name </td>
          <td width="221"><label>
            <input type="text" name="fname" />
          </label></td>
        </tr>
        <tr>
          <td>second name </td>
          <td><label>
            <input type="text" name="sname" />
          </label></td>
        </tr>
        <tr>
          <td>address</td>
          <td><label>
            <input type="text" name="address" />
          </label></td>
        </tr>
		 
		 <tr>
          <td>
		  <input type="submit" name="submit" value="login"/></td>
          <td><label>
            <input type="submit" name="reset" />
          </label></td>
        </tr>
      </table>
      </form> 
	   <p>&nbsp;</p></td></tr>
	      <div align="center" class="style2"></div>
	  

</table>
</body>
</html>

