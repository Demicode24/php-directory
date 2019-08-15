<?php


$d = file_get_contents('data.json');
$d = json_decode($d, true);


$x = count($d);
++$x;
//echo $x;

$t = $_FILES['ph']['tmp_name'];
$i = 'users/'.$x.'.jpg';

//echo '<br>';
//echo $i;

move_uploaded_file( $t, $i );

//array_unshift($d, $_POST);
$d[$x] = $_POST;
$d[$x]['ph'] = $i;

$d = json_encode($d);
file_put_contents('data.json', $d);

//$_SESSION['id'] = $x;
//$_SESSION['name'] = $_POST['name'];
//echo $_SESSION['name'];

header('location:directory.php');

?>