<?php

$a =1000;
$b =1200;
$c =1400;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #A, td{
            border:2px black solid
        }
    </style>
</head>
<body>
<table  id="A">
    <tr> 
        <td>
        <?php

echo "Salary of MR. A is"
?>
        </td>
        <td>
        <?php

echo $a;
?> 
        </td>
    </tr>
    <tr> 
        <td>
        <?php

echo "Salary of MR. B is"
?> 

        </td>
        <td>
        <?php

echo $b;
?> 
        </td>
    </tr>
    <tr> 
        <td>
        <?php

echo "Salary of MR. C is"
?> 
        </td>
        <td>
        <?php

echo $c;
?> 
        </td>
    </tr>
</table>
</body>
</html>

<?php

echo "Last modified : ".date("F d Y H:i:s", filemtime("index.php"));
echo '<br>'
?>
 
 
  <?php
    $filePath = "index.php";
    $lines = count(file($filePath));
    echo $lines;
    echo '<br>'
?>

<?php
// start a session
session_start();
  
// initialize session variables
$_SESSION['logged_in_user_id'] = '1';
$_SESSION['logged_in_user_name'] = 'Tutsplus';
  
// access session variables
echo $_SESSION['logged_in_user_id'];
echo $_SESSION['logged_in_user_name'];
?>