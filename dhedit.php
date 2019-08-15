<?php session_start();

$x = $_POST['id'];
//echo $x;
//echo "<br>";
$d = file_get_contents('data.json');
$d = json_decode($d, true);


//print_r( $d[$x] );

$d[$x]['name'] = $_POST['name'];
$d[$x]['email'] = $_POST['email'];
$d[$x]['pos'] = $_POST['pos'];
$d[$x]['tel'] = $_POST['tel'];
$d[$x]['dept'] = $_POST['dept'];


//echo '<br>';
//print_r( $d[$x] );

$t = $_FILES['ph']['tmp_name'];
$i = 'users/'.$x.'.jpg';
$d[$x]['ph'] = $i;

move_uploaded_file($t, $i);

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location:directory.php');
?>