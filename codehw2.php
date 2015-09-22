<!DOCTYPE html>
<html>
<body>
<h2>ISBN Challenge</h2>
<?php 
$isbn="0123456789"; //ISBN number
$isbnSum= (substr($isbn, 0, 1)*10)+ (substr($isbn, 1,1)*9) + (substr ($isbn, 2,1)*8)+
			(substr($isbn, 3,1)*7)+ (substr($isbn, 4,1)*6)+(substr($isbn,5,1)*5)+
			(substr($isbn, 6,1)*4)+ (substr($isbn,7,1)*3)+(substr($isbn,8,1)*2)+
			(substr($isbn,9,1)*1); //function to isolate each digit in the ISBN string
if ($isbnSum%11==0){
 echo "Testing ".$isbn." which is Valid"."</br>";
 }
 else{
 echo "Testing ".$isbn." which is Not Valid"."</br>";}

?>
</body></br></br>
<body>
<h2>Coin Toss</h2>
<?php #assign numbers to heads and tails

$coin=1;
$head=0; $tails=1;
echo "Flipping a coin once"."</br>";
while ($coin<2) {
$toss=(mt_rand($head,$tails)); #function to generate random tosses
$coin++;
if ($toss){
echo '<img src="http://teenskepchick.org/files/2011/05/penny.png" height="40" width="40">';}
else {$toss =0;
echo'<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/250px-2005_Penny_Rev_Unc_D.png" height="40" width="40">';}
}
echo "</br>";

$coin=1;
$head=0; $tails=1;
echo "Flipping a coin three times"."</br>";
while ($coin<4) {
$toss=(mt_rand($head,$tails)); #function to generate random tosses
$coin++;
if ($toss){
echo '<img src="http://teenskepchick.org/files/2011/05/penny.png" height="40" width="40">';}
else {$toss =0;
echo'<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/250px-2005_Penny_Rev_Unc_D.png" height="40" width="40">';}
}
echo "</br>";

$coin=1;
$head=0; $tails=1;
echo "Flipping a coin 5 times"."</br>";
while ($coin<6) {
$toss=(mt_rand($head,$tails)); #function to generate random tosses
$coin++;
if ($toss){
echo '<img src="http://teenskepchick.org/files/2011/05/penny.png" height="40" width="40">';}
else {$toss =0;
echo'<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/250px-2005_Penny_Rev_Unc_D.png" height="40" width="40">';}
}
echo "</br>";

$coin=1;
$head=0; $tails=1;
echo "Flipping a coin seven times"."</br>";
while ($coin<8) {
$toss=(mt_rand($head,$tails)); #function to generate random tosses
$coin++;
if ($toss){
echo '<img src="http://teenskepchick.org/files/2011/05/penny.png" height="40" width="40">';}
else {$toss =0;
echo'<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/250px-2005_Penny_Rev_Unc_D.png" height="40" width="40">';}
}
echo "</br>";

$coin=1;
$head=0; $tails=1;
echo "Flipping a coin nine times"."</br>";
while ($coin<10) {
$toss=(mt_rand($head,$tails)); #function to generate random tosses
$coin++;
if ($toss){
echo '<img src="http://teenskepchick.org/files/2011/05/penny.png" height="40" width="40">';}
else {$toss =0;
echo'<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/250px-2005_Penny_Rev_Unc_D.png" height="40" width="40">';}
}
echo "</br>";






echo "</br>"."</br>";



echo "<h2>Coin Toss: Pt. 2</h2>";
echo "Begin flipping coin"."<br>";
$heads = 0;
$flips = 0;
while ($heads < 2) {
    $penny = mt_rand(0,1);
    $flips ++;
    if ($penny){
        $heads ++;
       echo'<img src="http://teenskepchick.org/files/2011/05/penny.png" height="40" width="40">';
    }
    else {
                    $heads = 0;
    echo'<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/250px-2005_Penny_Rev_Unc_D.png" height="40" width="40">';
    }
}
echo "<br>Flipped two heads in {$flips} flips!";
?>
</body>

</html>