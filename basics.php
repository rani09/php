<?php
echo "thr"."ee <br>";           //prints the string "three"
echo "twe" . "lve <br>";        //prints the string "twelve"
echo 1 . 2, "<br>";                //prints the string "12"
echo 1.2, "<br>";                  //prints the number 1.2
echo 1+2, "<br>";


$a = 1.234; 
$b = 1.2e3; 
$c = 7E-10;

echo $a+$b, "<br>";
echo $a.$b, "<br>";
echo $a/$b, "<br>";
echo $c+$b, "<br>";

echo '1.1' + 1 - '-1';
echo "<br>";
// echo '1,1' + 0.2 - '0.6' * 14;
echo "<br>";

    /* First method to create array. */
    $numbers = array( 1, 2, 3, 4, 5);
         
    foreach( $numbers as $value ) {
       echo "Value is $value <br />";
    }
    
    /* Second method to create array. */
    $numbers[0] = "one";
    $numbers[1] = "two";
    $numbers[2] = "three";
    $numbers[3] = "four";
    $numbers[4] = "five";
    
    foreach( $numbers as $value ) {
       echo "Value is $value <br />";
    }  
// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
foreach (range(0, 12) as $number) {
    echo $number;
}


$numbers = array();
for ($i = 50; $i < 105; $i++)
    $numbers[$i] = $i + 1;

echo('<table border="1"><tr>');
foreach($numbers as $number)
    echo('<td>' . htmlspecialchars($number) . '</td>');
echo('</tr></table>');






$cars = array("Volvo", "BMW", "Toyota", "Nissan", "Ford", "Jeep Gladiator", "Lamborghini");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}



echo "<br><br>";










echo "<br><br>";
?>









<html>  
<body>  


<form method="post">  
Enter First Number:  
<input type="number" name="number1" require /><br><br>  
Enter Second Number:  
<input type="number" name="number2" require/><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
</body></html>
<?php
if(isset($_POST['submit']))  
{  
    $number1 = $_POST['number1'];  
    $number2 = $_POST['number2'];  
    $sum =  $number1+$number2;     
echo "The sum of $number1 and $number2 is: ".$sum;   
} 