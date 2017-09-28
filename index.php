<html>
<head>
<title>Resume</title>
</head>
<body>

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

<table border="2" align="center">

<tr>
    <th>Qualification</th>
    <th>Board</th> 
    <th>Percentage</th>
    <th>year</th>
</tr>

<tr>
    <td><?php echo $r[0][0];?></td>
    <td><?php echo $r[0][1];?></td> 
    <td><?php echo $r[0][2];?></td>
    <td><?php echo $r[0][3];?></td>
</tr>
<tr>
    <td><?php echo $r[1][0];?></td>
    <td><?php echo $r[1][1];?></td> 
    <td><?php echo $r[1][2];?></td>
    <td><?php echo $r[1][3];?></td>
</tr>
<tr>
    <td><?php echo $r[2][0];?></td>
    <td><?php echo $r[2][1];?></td> 
    <td><?php echo $r[2][2];?></td>
    <td><?php echo $r[2][3];?></td>
</tr>






</table>

  
 




</body>
</html>