<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM Game ORDER BY ID DESC");
?>

<html>
<head>
    <tittle> Homepage </tittle>
</head>

<body>

<a href="add.php"> Tambah Baru </a><br></br>

    <table width='80%' border=2>

        <tr>
            <th>Nama</th> <th>Tahun Release</th> <th>Email</th> <th>Update</th>
        </tr> 
        <?php
        while($game_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$game_data['Nama']."</td>";
            echo "<td>".$game_data['Tahun release']."</td>";
            echo "<td>".$game_data['Konsol']."</td>";
            echo "<td><a href='edit.php?id=$game_data[id]'>Edit</a> | <a href='delete.php?id=$game_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>
</html>