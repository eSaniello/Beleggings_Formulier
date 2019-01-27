<?php

//database connectie
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "beleggings_aanvraag";

$connection = new mysqli($serverName, $username, $password, $dbName);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
else{
    if(isset($_POST['aanvragen'])){
        $naam = mysqli_real_escape_string($connection, $_POST["naam"]);
        $achternaam = mysqli_real_escape_string($connection, $_POST["achternaam"]);
        $legitimatie_bewijs = mysqli_real_escape_string($connection, $_POST["legitimatie_bewijs"]);
        $geboortedatum = mysqli_real_escape_string($connection, $_POST["geboortedatum"]);
        $adres = mysqli_real_escape_string($connection, $_POST["adres"]);
        $mobiel = (int)mysqli_real_escape_string($connection, $_POST["mobiel"]);
        $beleggingsvorm = mysqli_real_escape_string($connection, $_POST["beleggingsvorm"]);
        $land = mysqli_real_escape_string($connection, $_POST["land"]);
        $munt_eenheid = mysqli_real_escape_string($connection, $_POST["munt_eenheid"]);
        $bedrag = mysqli_real_escape_string($connection, $_POST["bedrag"]);
        $ten_name_van = mysqli_real_escape_string($connection, $_POST["ten_name_van"]);
        $looptijd = mysqli_real_escape_string($connection, $_POST["looptijd"]);
        $rente_percentage = mysqli_real_escape_string($connection, $_POST["rente_percentage"]);
        $rente_cred_rekening_nr = mysqli_real_escape_string($connection, $_POST["rente_cred_rekening_nr"]);
        $bank = mysqli_real_escape_string($connection, $_POST["bank"]);
        $opmerking = mysqli_real_escape_string($connection, $_POST["opmerking"]);
    
        $sql = "INSERT INTO aanvragen (
            naam,
            achternaam,
            legitimatie_bewijs,
            geboortedatum,
            adres,
            mobiel,
            beleggingsvorm,
            land,
            munt_eenheid,
            bedrag,
            ten_name_van,
            looptijd,
            rente_percentage,
            rente_cred_rekening_nr,
            bank,
            opmerking
        ) VALUES (
            '$naam',
            '$achternaam',
            '$legitimatie_bewijs',
            '$geboortedatum',
            '$adres',
            '$mobiel',
            '$beleggingsvorm',
            '$land',
            '$munt_eenheid',
            '$bedrag',
            '$ten_name_van',
            '$looptijd',
            '$rente_percentage',
            '$rente_cred_rekening_nr',
            '$bank',
            '$opmerking'
        )";
    
        $query = mysqli_query($connection, $sql);
    
        header("Location: index.html?success");
    }
    elseif(isset($_POST['alle_aanvragen'])){
        echo "
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='utf-8' />
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <title>Alle Aanvragen</title>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' href='style.css'>
            </head>
            <body class='db_table_body'>
        ";
    
        $queryAll = mysqli_query($connection,"SELECT * FROM aanvragen ORDER BY naam ASC");
    
        echo "<table border='1' class ='db_table'>
        <tr>
        <th>Naam</th>
        <th>Achternaam</th>
        <th>legitimatie Bewijs</th>
        <th>Geboorte datum</th>
        <th>Adres</th>
        <th>Mobiel</th>
        <th>Beleggingsvorm</th>
        <th>Land</th>
        <th>Munt Eenheid</th>
        <th>Bedrag</th>
        <th>Ten Name Van</th>
        <th>Looptijd</th>
        <th>Rente Percentage</th>
        <th>Rente te Crediteren Rekening nr.</th>
        <th>Bank</th>
        <th>Opmerking</th>
        </tr>";
    
        while($row = mysqli_fetch_array($queryAll))
        {
        echo "<tr>";
        echo "<td class='db_td'>" . $row['naam'] . "</td>";
        echo "<td class='db_td'>" . $row['achternaam'] . "</td>";
        echo "<td class='db_td'>" . $row['legitimatie_bewijs'] . "</td>";
        echo "<td class='db_td'>" . $row['geboortedatum'] . "</td>";
        echo "<td class='db_td'>" . $row['adres'] . "</td>";
        echo "<td class='db_td'>" . $row['mobiel'] . "</td>";
        echo "<td class='db_td'>" . $row['beleggingsvorm'] . "</td>";
        echo "<td class='db_td'>" . $row['land'] . "</td>";
        echo "<td class='db_td'>" . $row['munt_eenheid'] . "</td>";
        echo "<td class='db_td'>" . $row['bedrag'] . "</td>";
        echo "<td class='db_td'>" . $row['ten_name_van'] . "</td>";
        echo "<td class='db_td'>" . $row['looptijd'] . "</td>";
        echo "<td class='db_td'>" . $row['rente_percentage'] . "</td>";
        echo "<td class='db_td'>" . $row['rente_cred_rekening_nr'] . "</td>";
        echo "<td class='db_td'>" . $row['bank'] . "</td>";
        echo "<td class='db_td'>" . $row['opmerking'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    
        echo "
        </body>
        </html>
        ";
    }    
}

?>