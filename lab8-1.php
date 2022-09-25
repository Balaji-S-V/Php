<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>20BCE1176</title>
</head>
<body>
<?php
$a = 27;
$b = 10;
$name = "Balaji SV";
$temp = $a;
while($temp%3==0){
$temp /= 3;
} if($temp==1){
echo "$a"," is a power of 3\n";
}else{
echo "$a"," is not a power of 3\n";
}
echo "<br>";
if($b > $a)
{
echo "$b"," is greater than ","$a\n";
}else
{
echo "$b"," is not greater than ","$a\n";
}
echo "<br>";
$third = strrev($name);
echo "Reverse of $name is $third";
?>
</body>
</html>