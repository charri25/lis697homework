<!DOCTYPE html>
<html>
<body>
<?php //test1.php
$first_name="Caitlin";
$middle_name="Ann";
$surname="Harrington";
$age=27; 
echo "$surname, $first_name $middle_name ($age)";
print "<ul>
<li>Harrington, Caitlin Ann (27)</li>
</ul>";
$full_name= array ('Harrington','Caitlin','Ann');
$name= $surname .' '. $first_name .' ' .$middle_name . ' ('.$age.')';
echo "<br>".$name."</br>";
$old= $age + 5;
echo "<br>".$old."</br>";

$months= $age * 12;
echo "<br>".$months."</br>";

$very_old= 2034-2015;
echo "<br>".$age+$very_old.</br>";

echo "<br>".++$age."</br>";
?>
</body>
</html>