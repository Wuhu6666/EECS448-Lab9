<html>
<body  style= "background-color:rgb(255, 236, 219)">
<?php
echo "<h1 align='center' color:rgb(139, 83, 34);>Multiplication Table</h1><hr>";
echo "<table width='1000' border='2'>";
echo "<tr style='font-weight: bold; color:rgb(139, 83, 34);' align='center'>";
echo "<td > </td> \n";
for ($i = 1; $i <= 100; $i++) {
    echo "<td>$i</td> \n";
}
echo "</tr>";

for ($j = 1; $j <=100; $j++) {
    echo "<tr align='center'>\n";
    echo "<td style='font-weight: bold; color:rgb(139, 83, 34);'  align='center'>$j</td>";
    for ($i = 1; $i <= 100; $i++) {
        echo "<td align='center'>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>