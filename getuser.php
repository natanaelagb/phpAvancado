<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>

    <?php
    $id = intval($_GET['q']);

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=w3schools", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $err) {
        echo $err;
    }

    $data = $pdo->query("SELECT * FROM people WHERE id = $id");

    echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

    foreach ($data as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value['FirstName'] . "</td>";
        echo "<td>" . $value['LastName'] . "</td>";
        echo "<td>" . $value['Age'] . "</td>";
        echo "<td>" . $value['Hometown'] . "</td>";
        echo "<td>" . $value['Job'] . "</td>";     
        echo "</tr>";
    }

    echo "</table>";
    $pdo = null;
    ?>
</body>

</html>