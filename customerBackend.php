<?php
echo "<style type=\"text/css\">";
include 'style.css';
echo "</style>";

function shipping($ship) {
  if ($ship == 0) return "7 day Shipping";
  if ($ship == 5) return "3 day Shipping";
  if ($ship == 50)return "Overnight Shipping";
}

function multiply($quantity, $price) {
  $total = $quantity * $price;
  return $total;
}

$total1 = multiply($_POST["auras"], 500);
$total2 = multiply($_POST["book"], 700);
$total3 = multiply($_POST["circle"], 10000);
$total4 =$total1+$total2+$total3+$_POST["shipping"];

echo "<body class = 'bg'>";
echo "<div class = 'intro'>";
echo "<h1 style='background-color:rgb(204, 167, 142);'>Welcome, " . $_POST["email"]. "</h1>";
echo "<h4>Your password: ". $_POST["password"]. "</h4>"; 
echo "<h1>Receipt</h1><hr>";
echo "<table width='600' border='5'>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Detect Magic Auras</th><td>".$_POST["auras"]."</td><td>$500.00</td><td>".$total1."</td></tr>";
echo "<tr><th>Wizard Spellbook</th><td>".$_POST["book"]."</td><td>$700.00</td><td>".$total2."</td></tr>";
echo "<tr><th>Teleportation Circle</th><td>".$_POST["circle"]."</td><td>$10,000.00</td><td>".$total3."</td></tr>";
echo "<tr><th>Shipping</th><td colspan='2'>".shipping($_POST["shipping"])."</td><td>".$_POST["shipping"]."</td></tr>";
echo "<tr><th colspan='3'>Total Cost<th>$".$total4."<br></th></tr>";
echo "</div>";
echo "</body>";
?>