<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(6);
if ($a==0){
echo 'This is not a Prime Number.....'."\n";}
else{
echo 'This is a Prime Number..'."\n";
}
echo '<br>'
?>
<?php
// task2

$a="remove";
echo strrev($a);
echo '<br>'

?>
<!-- taske3 -->
<?php
$a="remove";
if (ctype_lower($a)){
    echo "Your String is Ok ";
}
else{
    echo "Your String is not Ok ";
}
?>
<!-- task4 -->
<?php
echo '<br>'

