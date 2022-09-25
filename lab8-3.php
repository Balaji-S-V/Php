<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>20BCE1176</title>
</head>
<body>
Order Details :
<br>
<?php
$firstName = $_GET["firstName"];
$lastName = $_GET["lastName"];
$phone = $_GET["phoneNumber"];
$mail = $_GET["email"];
$totalbill = 0;
echo "<p>Customer Name : $firstName $lastName</p>";
echo "<p>Phone number : $phone </p>";
echo "<p>Email : $mail</p>";
if(isset($_GET["apple"])){
$appleqty = $_GET["apple-qty"];
$applebill = 10 * $appleqty;
$totalbill += $applebill;
echo "<p> Apple ordered : $appleqty Kgs Price : $applebill</p>";
} if(isset($_GET["banana"])){
$bananaqty = $_GET["banana-qty"];
$bananabill = 5 * $bananaqty;
$totalbill += $bananabill;
echo "<p> Banana ordered : $bananaqty Kgs Price : $bananabill</p>";
} if(isset($_GET["avocado"])){
$avocadoqty = $_GET["avocado-qty"];
$avocadobill = 7 * $avocadoqty;
$totalbill += $avocadobill;
echo "<p> Avocado ordered : $avocadoqty Kgs Price : $avocadobill</p>";
}
echo "<p>Total Bill : $totalbill";
?>
</body>
</html>