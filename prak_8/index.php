<?php
include 'peserta.php';

$sql = "SELECT id_peserta, nama, jenis_kelamin,jurusan, no_hp, alamat FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Praktikum Web 8</h2>

<table>
    <tr>
        <th>ID_Peserta</th>
        <th>Name</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>No HP</th>
        <th>Alamat</th>
        
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id_peserta"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["jenis_kelamin"] . "</td><td>". $row["jurusan"] . "</td><td>".
            $row["no_hp"] . "</td><td>". $row["alamat"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No users found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>