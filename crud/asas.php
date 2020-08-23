<?php 
//variable 
$name = 'rence';
$age = '23';
$gender = 'male';

//echo or print print=print array
//double quote if string 
echo "Name: $name<br/>";
//single quote if int
echo 'Age '.$age.'<br/>';
//concat
echo "Gender: $gender</br>";

//data types 
//var_dump(false);

//constant
define('MESSAGE', 'ASAAS');
echo MESSAGE;
echo '<br>';

//operators
echo 1 + 1;
echo '<br>';
//function
function showMessage($message){
    return "YourMessage: $message";
}
    echo showMessage('asasassas');
    echo '<br>';
//array
$array1 = ['a' =>'apple', 'banana', 'mangga'];
echo $array1['a'];
echo '<br>';
print_r($array1);
echo '<br>';

//condition
 $rence = 1;
// if ($rence === '1'){
// echo 'correct';
// } else {
// echo 'wrong';
// }

switch()
?>