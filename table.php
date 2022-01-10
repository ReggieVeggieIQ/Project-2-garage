<?php
echo "<link rel='stylesheet' type='text/css' href='css.css'/>";
$db = new PDO("mysql:host=localhost;dbname=garage_ertan", "root", "root");


$query = $db->prepare("SELECT * FROM klant");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
foreach ($result as $item){
    echo "<tr>";
    echo "<td>" . $item["id"] . "<br>" . "</td>";
    echo "<td>" . $item["naam"] . "<br>" . "</td";
    echo "<td>" . $item["adres"] . "<br>" . "</td";
    echo "<td>". $item["postcode"] ."<br>" .  "</td";
    echo "<td>" . $item["woonplaats"] . "<br>" . "</td";
    echo "</tr>";

}
echo "</table>";