<?php
echo "hello world" . "<br>";
$cat = "mufasa";
$n = 22;
$n=$n*2;
$n = $n/2;
echo $cat . "<br>";
echo "My age is $n" . "<br>";
//concatenation
echo 'My age is ' . $n . "<br>";
$a = "n";
//variable variable
echo 'Number is ' . $$a . "<br>";

//Arrays
$array = array('name','email','password');

//can't use echo on arrays, use print_r() which means print reccussive
print_r($array) . "<br>";
//for one item in the array
echo $array[0] . "<br>";

//2nd way to make arrays
$array2 = "some";
$array2 = "thing";

print_r($array2);

$array3 = array(
    'name' => 'grace',
    'age' => 'no need to know',
    'email' => 'me@me.gmail.com',
);

print_r($array3);
echo $array3['name'] . "<br>";

//if statement
$number = 1;
if($number == 2){
    echo "true";
}else{
    echo "false";
};
$num2 = '1';
//switch statement
switch($number){
    case 1: 
        echo "True";
        break;
    case 2: 
        echo "False";
    default:
         echo "no idea";    
};
echo "<br>"
?>