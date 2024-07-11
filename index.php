<br>
Task 1 :
<br>
<?php
$colors=array('red','green','white');
$paragraph = <<<EOD
The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon
EOD;
echo $paragraph;

?>

<br>
<br>
Task 2 : 
<br>
<?php 
$array = array("green" , "white" , "red");
for($i=0;$i<count($array);$i++){
    echo "<ul>
 <li>$array[$i]</li>   
    </ul>";
}
?>
<br>
<br>
Task 3 :
<br>
<?php 
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );
asort($cities);
foreach($cities as $country => $capital){
    echo "the capital of $country is $capital <br>";
}

?>
<br>
Task 4 : 
<br>

<?php 
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo $color[4];
reset($color);
// other way 
$first_element = current($color);
echo $first_element;
?>
<br> 
Task 5 : 
<br> 
<?php 
$nums=array('1','2','3','4','5');
$newArray=[];
$loction='4';
$newItem='$';
for($i=0 ;$i<count($nums);$i++){
    if($nums[$i]==$loction){
        $newArray[]=$newItem ;
        $newArray[]=$nums[$i];
    } else  $newArray[]= $nums[$i];
    
}
echo implode(' ', $newArray);
?>

<br>
Task 6 :
<br>
<?php 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key =>$value){
    echo "$key = $value <br>";
}
?>

<br>
Task 7 :
<br>
<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);
$average = round($average, 1);
sort($temperatures);
$lowest_temps = array_slice($temperatures, 0, 5);
$highest_temps = array_slice($temperatures, -5);
echo "Average Temperature is: $average<br>";
echo "List of five lowest temperatures: " . implode(', ', $lowest_temps) . "<br>";
echo "List of five highest temperatures: " . implode(', ', $highest_temps) . "<br>";
?>
<br>
Task 8:
<br>
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$newArray = array_merge($array1, $array2);
print_r($newArray);
?>

<br>
Task 9:
<br>
<?php
$colors = array("red","blue", "white","yellow");
$newArray=[];
for ($i=0;$i<count($colors);$i++){
$newArray[]=strtoupper($colors[$i]);
}
echo implode("<br>", $newArray);
?>

<br>
Task 10:
<br>
<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");

$newArray=[];
for ($i=0;$i<count($colors);$i++){
$newArray[]=strtolower($colors[$i]);
}
echo implode("<br>", $newArray);
?>

<br>
Task 11:
<br>
<?php
for ($i=200 ;$i<250 ;$i+=4){
    echo "$i " ;
}
?>
<br>
Task 12:
<br>
<?php
$words = array("abcd","abc","de","hjjj","g","wer");
$shortestLength = strlen($words[0]);
$longestLength = strlen($words[0]);
for ($i=0 ;$i<count($words) ;$i++){
    if (strlen($words[$i]) < $shortestLength) {
        $shortestLength=strlen($words[$i]);
    
    }
    if (strlen($words[$i])  > $longestLength) {
        $longestLength = $length;
    }
}
echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";

?>
<br>
Task 13:
<br>
<?php
function generateUniqueRandomNumbers($min, $max, $count) {
    $numbers = array();
    while (count($numbers) < $count) {
        $randNum = rand($min, $max);
        if (!in_array($randNum, $numbers)) {
            $numbers[] = $randNum; 
        }
    }
  
    return implode(' ', $numbers);
}

$min = 11;
$max = 20;
$count = 10;

echo generateUniqueRandomNumbers($min, $max, $count);
?>
<br>
Task 14:
<br>
<?php 
 $array1 = array( 2, 0, 10, 12, 6);
 $min=$array1[0];
 for ($i=0; $i <count($array1) ; $i++) { 
    if($array1[$i]<0){
 if($array[$i]<$min ){
    $min=$array[$i];
 }}
 }
 echo $min;
?>
<br>
Task 15:
<br>
<?php
function bubbleSortDescending(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                // Swap the elements
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

// Input array
$inputArray = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

// Sort the array
bubbleSortDescending($inputArray);

// Output the result
echo "Sorted Array in Descending Order: ";
print_r($inputArray);
?>
<br>
Task 16:
<br>
<?php
function floorWithPrecision($number, $precision, $separator) {
    $multiplier = pow(10, $precision);
    $flooredNumber = floor($number * $multiplier) / $multiplier;
    return number_format($flooredNumber, $precision, $separator, '');
}
echo floorWithPrecision(1.155, 2, ".") . "<br>";      
echo floorWithPrecision(100.25781, 4, ".") . "<br>";  
echo floorWithPrecision(-2.9636, 3, ".") . "<br>";    
?>
<br>
Task 17:
<br>
<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$array1 = explode(", ", $list1);
$array2 = explode(", ", $list2);
$newArray = array_merge($array1, $array2);
$uniqelists = [];

for ($o = 0; $o < count($newArray); $o++) {
    $isUnique = true; 
    for ($i = 0; $i < count($uniqelists); $i++) {
        if ($newArray[$o] == $uniqelists[$i]) {
            $isUnique = false;  
            break;  
        }
    }
    if ($isUnique) {
        $uniqelists[] = $newArray[$o];  
    }
}

echo implode(", ", $uniqelists);
?>

<br>
Task 19:
<br>
<?php 
$array1 = array('a','1','2','3','4');
$array2 = array('a','3');
$array3 = [];

foreach ($array2 as $element2) {
    $found = false;
    foreach ($array1 as $element1) {
        if ($element2 === $element1) {
            $found = true;
            break;
        }
    }
    $array3[] = $found;
}

if (in_array(false, $array3)) {
    echo "array2 is not a subset array from array1";
} else {
    echo "array2 is a subset array from array1";
}
?>
<br>
<br>
<?php 
$array1 = array('a','1','2','3','4');
$array2 = array('a','3','7');
$array3 = [];

foreach ($array2 as $element2) {
    $found = false;
    foreach ($array1 as $element1) {
        if ($element2 === $element1) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "array2 is not a subset array from array1";
        exit;
    }
}

echo "array2 is a subset array from array1";
?>



