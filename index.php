<html>
<head>
<title>Resume</title>
<style type="text/css">
div
{
    border-radius: 5px;
    background-color: #ccc;
    }
#header
{
    position: fixed;
    z-index: 1;
    height:40px;
    width: 98%;
    background-color: #668284;
    margin-bottom: 10px
 }
 #headerone
{
    position: fixed;
    z-index: 1;
    border-radius: 500px;
    height:40px;
    width: 98%;
    background-color:#ffffff;
    margin-bottom: 10px
 }
 #name {
    float:left;
	margin-left: 20px;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
}
#email{
    float:right;
    margin-right: 20px;
	padding-bottom: 20px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
}

</style>


</head>
<body  >

 <?php 

 define('DB_HOST', 'localhost');
 define('DB_NAME', 'resume');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con)or die("Failed to connect to MySQL: " . mysql_error());
 $result = mysql_query("SELECT * FROM resume ");
 
while($r[]=mysql_fetch_array($result));

?>
<div id="header">

<h2 align="center" id="name">Rohan Mundhey</h2>
<h4 id="email">mundheyrohan@gmail.com</h4>

</div>

<br><br><br>

<h2><div>Qualification</div></h2><br>

<div id="headerone">

<table border="2" align="left" >

<tr>
    <th>Qualification</th>
    <th>Board</th> 
    <th>Percentage</th>
    <th>year</th>
</tr>

<tr>
    <td><?php echo $r[0][1];?></td>
    <td><?php echo $r[0][2];?></td> 
    <td><?php echo $r[0][3];?></td>
    <td><?php echo $r[0][4];?></td>
</tr>
<tr>
    <td><?php echo $r[1][1];?></td>
    <td><?php echo $r[1][2];?></td> 
    <td><?php echo $r[1][3];?></td>
    <td><?php echo $r[1][4];?></td>
</tr>
<tr>
    <td><?php echo $r[2][1];?></td>
    <td><?php echo $r[2][2];?></td> 
    <td><?php echo $r[2][3];?></td>
    <td><?php echo $r[2][4];?></td>
</tr>



</table>

<?php 

?>
<img src="abc.jpg" width="110" height="110" align="right" padding-bottom="20">
</div>
<br><br><br><br><br>
<h2><div>Key Skills</div></h2>
<h3>Database</h3>
<h3>Algorithms and Datastructures</h3>
<h3>Computer Networks</h3>
<h4>Operating Systems</h4>

</body>
</html>