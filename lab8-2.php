<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>20BCE1176</title>
</head>
<body>
DESCENDING ORDER ( BY AGE )
<br>
PID AGE
<br>
<?php
$patients = array("1"=>"39", "2"=>"47","3"=>"21","4"=>"54","5"=>"23","6"=>"61","7"=>"69","8"=>"49");
arsort($patients);
foreach($patients as $pid => $age) {
echo "$pid - $age<br>";
} if(array_key_exists("1",$patients)){
echo "PID 1 exists!<br>";
}else{
echo "PID 1 does not exist!<br>";
} if(array_key_exists("10",$patients)){
echo "PID 10 exists!<br>";
}else{
echo "PID 10 does not exist!<br>";
}
?>
</body>
</html>