<!DOCTYPE html>
<html>
<body>

<?php //correct change
$count="change";
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

echo "<h2>Challenge: Correct Change</h2>";
$change = 596;
echo "You are due $change cents back in change total.<br>";
$dollars = ($change%100);
$quarters = ($dollars%25);
$dimes = ($quarters%10);
$nickels = ($dimes%5);
$dollar = (int) ($change/100);
$quarter = (int) ($dollars/25);
$dime = (int) ($quarters/10);
$nickel = (int) ($dimes/5);
$remainder = (int) ($nickels);
  
  echo "You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $
  nickel nickel(s), and $remainder cent(s)"."</br>";

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