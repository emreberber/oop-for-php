<?php include 'class.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oop-for-php</title>
</head>
<body>

<?php 

$obj_person = new Person("Yakup");
// $obj_person->SetName("Emre");

echo $obj_person -> GetName();
echo "<br>";
echo $obj_person -> name;
// echo $obj_person->phone;     ERROR:phone is private

echo "<br>";
$obj_student = new Student("Hasancan");
echo $obj_student -> GetName();  // hasancan




?>
    
</body>
</html>