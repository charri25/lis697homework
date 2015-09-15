<!DOCTYPE html>
<html>
<body>

<?php //correct change
$count=159;
$dollar= (int)($count/100);
$quarter=(int)(($count-100)/25);
$dime= (int)(($count-150)/10);
$nickel=(int)(($count-150)/5);
$penny=(int)(($count-155)/1);
if ($count>=100){

echo "Your change is ". $dollar. " dollars and ". $quarter. " quarters and ". $dime. 
" dimes and ". $nickel. " nickels and ". $penny. " pennies.";
} 
echo "</br>"."</br>";
//bottles of beer
$count=4;
while ($count >= 1)
{
	echo $count." bottles of beer on the wall! ". $count." bottles of beer!"."</br>".
	"Take one down and pass it around ";{
	echo $count - 1 . " bottles of beer on the wall" . "</br>";
	--$count;
	}
	}		
?>
</body>
</html>