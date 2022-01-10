<?php

echo "<link rel='stylesheet' type='text/css' href='css.css'/>";
include "databasefuncties.php";
global $db;
$alleklanten = SQLMetResult($db, "SELECT * FROM klant");

function colomnprint($row, $fieldname)
{
    echo "<td>" . $row[$fieldname] . "</td>";
}

echo "<table>";
foreach ($alleklanten as $klant) {
    echo "<tr>";
    colomnprint($klant, "id");
    colomnprint($klant, "naam");
    colomnprint($klant, "adres");
    colomnprint($klant, "postcode");
    colomnprint($klant, "woonplaats");
    echo "</tr>";

}
echo "</table>";