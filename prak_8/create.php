<?php
include 'peserta.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO users (name, jenis_kelamin, jurusan, no_hp, alamat) VALUES ('$name', '$jenis_kelamin', ' $jurusan', ' $no_hp', ' $alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
</head>
<body>

<form action="create.php" method="post">
    <label for="name">Name :</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="jenis_kelamin">Jenis Kelamin :</label><br>
    <input type="text" id="jenis_kelamin" name="jenis_kelamin"><br><br>
    <label for="jurusan">Jurusan :</label><br>
    <input type="text" id="jurusan" name="jurusan"><br>
    <label for="no_hp">No HP :</label><br>
    <input type="text" id="no_hp" name="no_hp"><br>
    <label for="alamat">Alamat :</label><br>
    <input type="text" id="alamat" name="alamat"><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>