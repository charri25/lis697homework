<!DOCTYPE html>
<html>
<body>
<?php //books
$books = array( #create multidimensional array with book info 
		array("PHP and MySQL Web Development", "Luke Welling", 144, "Paperback", 31.63),
		array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett",
			135, "Paperback", 41.23),
		array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar",
			14, "Paperback", 40.88),
		array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett",
			251, "Paperback", 22.09),
		array("Modern PHP: New Features and Good Practices", "Josh Lockhart", 7,
			"Paperback", 28.49),
		array("Programming PHP", "Kevin Tatroe", 26, "Paperback", 28.96)
		);

#create table
echo"<table border='1'>";
	Echo"<tr>";
		echo"<th>Title</th>";
		echo"<th>Author</th>";
		echo"<th>Pages</th>";
		echo"<th>Type</th>";
		echo"<th>Price</th>";
	echo"</tr>";
	echo"<tr bgcolor='gray'>";
		echo"<td>".$books[0][0]."</td>";
		echo"<td>".$books[0][1]."</td>";
		echo"<td>".$books[0][2]."</td>";
		echo"<td>".$books[0][3]."</td>";
		echo"<td>".$books[0][4]."</td>";
	echo"</tr>";
	echo"<tr>";
		echo"<td>".$books[1][0]."</td>";
		echo"<td>".$books[1][1]."</td>";
		echo"<td>".$books[1][2]."</td>";
		echo"<td>".$books[1][3]."</td>";
		echo"<td>".$books[1][4]."</td>";
	echo"</tr>";
	echo"<tr bgcolor='gray'>";
		echo"<td>".$books[2][0]."</td>";
		echo"<td>".$books[2][1]."</td>";
		echo"<td>".$books[2][2]."</td>";
		echo"<td>".$books[2][3]."</td>";
		echo"<td>".$books[2][4]."</td>";
	echo"</tr>";
	echo"<tr>";
		echo"<td>".$books[3][0]."</td>";
		echo"<td>".$books[3][1]."</td>";
		echo"<td>".$books[3][2]."</td>";
		echo"<td>".$books[3][3]."</td>";
		echo"<td>".$books[3][4]."</td>";
	echo"</tr>";
	echo"<tr bgcolor='gray'>";
		echo"<td>".$books[4][0]."</td>";
		echo"<td>".$books[4][1]."</td>";
		echo"<td>".$books[4][2]."</td>";
		echo"<td>".$books[4][3]."</td>";
		echo"<td>".$books[4][4]."</td>";
	echo"</tr>";
echo"</table>";
echo"<table>";
	echo"<tr>";
		echo "Total Price:".(($books[0][4])+($books[1][4])+($books[2][4])+($books[3][4])+($books[4][4])+($books[5][4]));
 	echo"</tr>";
 echo"</table>";

?>
<?php

echo "Begin the coin flipping<br>";
$countHeadsInARow=9;
flipCoin($countHeadsInARow);
function flipCoin($countHeadsInARow) {
 
$heads = 0;
$flips = 0;
while ($heads < $countHeadsInARow) {
    $penny = mt_rand(0,1);
    
    $flips ++;
    if ($penny){
        $heads ++;
       echo'<img src="http://teenskepchick.org/files/2011/05/penny.png" height="40" width="40">';
    }
    else {
                    $heads = 0;
        echo '<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/250px-2005_Penny_Rev_Unc_D.png" height="40" width="40">';
    }
}
echo "<br>Flipped $countHeadsInARow heads in ".$flips." flips";
}
?>
</body>
<html>