<html>
<body>
<?php


function add($x,$y)    
{  
$sum=$x+$y;  
echo "Sum = $sum <br><br>";  
}  



//sub() function with two parameter  
function sub($x,$y)    
{  
$sub=$x-$y;  
echo "Diff = $sub <br><br>";  
}

  
function mul($x,$y)    
{  
$mul=$x*$y;  
echo "mul = $mul <br><br>";  
} 
function div($x,$y)    
{  
if($x>$y)
{
$div=$x/$y;  
}
else
{
$div=$y/$x;
}
echo "div = $div <br><br>";  
} 
if(isset($_POST['add']))
{
add($_POST['value1'],$_POST['value2']);
}

if(isset($_POST['sub']))
{
sub($_POST['value1'],$_POST['value2']);
}
if(isset($_POST['mul']))
{
mul($_POST['value1'],$_POST['value2']);
}
if(isset($_POST['div']))
{
div($_POST['value1'],$_POST['value2']);
}



?>
<form method="post"> 
Enter first number: <input type="number" name="value1"/><br><br>  
Enter second number: <input type="number" name="value2"/><br><br>  
<input type="submit" name="add" value="ADDITION"/> 
<input type="submit" name="sub" value="SUBTRACTION"/>   
<input type="submit" name="mul" value="MULTIPLICATION"/>  
<input type="submit" name="div" value="DIVISION"/>  
 
</form> 
</body>
</html>