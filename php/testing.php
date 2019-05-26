<html>
<body>
<?php
$a=10;
$b=decbin($a);
echo $b."<br>";
echo exp($a)."<br>";
echo expm1($a)."<br>";
echo hypot($a-5,($a+2))."<br>";
echo __Line__;
$name=$_GET["name"];
echo "Welcome, $name";  



echo"post<br><br>";
$name=$_POST["name"];//receiving name field value in $name variable  
$password=$_POST["password"];//receiving password field value in $password variable  
  
echo "Welcome: $name, your password is: $password"; 
?>
<form action="testing.php" method="get">  
Name: <input type="text" name="name"/>  
<input type="submit" value="visit"/>

echo "post<br><br>";
<form action="testing.php" method="post">   
<table>   
<tr><td>Name:</td><td> <input type="text" name="name"/></td></tr>  
<tr><td>Password:</td><td> <input type="password" name="password"/></td></tr>   
<tr><td colspan="2"><input type="submit" value="login"/>  </td></tr>  
</table>  
</form>     
</form>
</body>
</html>


 