<?php
$brush_price = 5;

echo "<h3 align=\"center\">Jenis Loop: For Loop</h3>";
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th><th>Price</th></tr>";

for ($counter = 10; $counter <= 100; $counter += 5) {
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
}

echo "</table>";
?>

<?php
$brush_price = 5;
$counter = 10;

echo "<h3 align=\"center\">Jenis Loop: While Loop</h3>";
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th><th>Price</th></tr>";

while ($counter <= 100) {
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
    $counter += 5;
}

echo "</table>";
?>

<?php
$brush_price = 5;
$counter = 10;

echo "<h3 align=\"center\">Jenis Loop: Do-While Loop</h3>";
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th><th>Price</th></tr>";

do {
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
    $counter += 5;
} while ($counter <= 100);

echo "</table>";
?>

