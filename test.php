<?php
class Myclass {
    function __construct(){
     echo 'MyClass class has initialized!';

    }
}

$class= new Myclass;
?>

<!-- ////////////////////////////////////////// -->
<!-- task2 -->
<?php
echo '<br>';

 class message {
    public $name ;
    function introductor($name){
       return $this->name=$name ;
    }
 }

 $introductorymessage = New message();
 echo "Hello All, I am" .$introductorymessage->introductor('Scott');
 ?>

<?php 
require_once('conction.php');
$query='SELECT * FROM employees';
$stmt=$conn->prepar($query) ;
$stmt->excute();
$employees=$stmt->fetchAll(PDO::FETCH_ASSOC());
print_r($employees);
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<a href="#"  type="button" class="btn btn-outline-warning">+ Add New Employee</a>
<table class="table">
    
  <thead> 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
        <?php
        
        while($row=$employee->fetch_assoc()){
        
        ?>
          <tr>
        
        <th scope="row"><?PHP $row['id']?></th>
        <td><?PHP $row['Name'] ?></td>
        <td><?PHP $row['Address']?></td>
        <td><?PHP $row['salary'] ?></td>
        <td>
                  <a href="update.php?id=<?php echo $employee['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                  <form method="post" action="delete.php" style="display: inline-block">
                      <input  type="hidden" name="id" value="<?php echo $employee['id'] ?>"/>
                      <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                  </form>
              </td>
  
      </tr>";<?php }?>
      
     
    
  </tbody>
</table>
</body>
</html>