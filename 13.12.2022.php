<?php
$colors = array('white', 'green', 'red');

echo nl2br("The memory of that scene for me is like a frame of film forever frozen at that moment: 
the  $colors[2] carpet, the $colors[1]  lawn, the $colors[0] house, the leaden sky. 
The new president and his first lady. - Richard M. Nixon The words <br> " ) ;

?>

<?php 
$colors = array('white', 'green', 'red');
echo "<ul>
  <li>
$colors[1]
  </li>
  <li>$colors[0]</li>
  <li>$colors[2]</li>
</ul>
<br>" 

?>

<?php
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

foreach($cities as $x => $val) {
    echo "The capital of $x is  $val <br>";
  }
  ?>
  =================================
  <?php
  echo "<br>";
  $color = array (4 => 'white', 6 => 'green', 11=> 'red');

  echo current($color);

  ?>
  =================================
  <?php
   echo "<br>";
 $original = array( '1','2','3','4','5' );
 echo 'Original array : '."\n";
 foreach ($original as $x) 
 {echo "$x ";}
 $inserted = '$';
 array_splice( $original, 3, 0, $inserted ); 
 echo " \n After inserting '$' the array is : "."\n";
 foreach ($original as $x) 
 {echo "$x ";}
 echo "\n"
 ?>
 =================================
 <?php
   echo "<br>";
   $fruits = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");;
asort($fruits);
foreach ($fruits as $key => $val) {
    echo '<pre>';
    echo
    $key ."=". $val ;
    echo '</pre>';
}

echo "<br>";
?>

<?php
echo "<br>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
echo "<br>";
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    
echo $temp_array[$i].", ";
}
?>
====================


 



