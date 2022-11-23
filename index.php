<?php
include_once "connection.php";

$result = mysqli_query($mysqli, "SELECT * FROM info_pekerja ORDER BY id DESC");
 
if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $no_hp = $_POST['no_hp'];
    $jantina = $_POST['jantina'];

    $add = mysqli_query($mysqli, "INSERT INTO info_pekerja(id,nama_pekerja,no_kp,no_hp,jantina) 
    VALUES('$id','$nama_pekerja','$no_kp','$no_hp','$jantina' NOW())");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Holdings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>DATA PEKERJA MEGAHOLDINGS</h1>
        <div class="container">
            <table>
                <tr class="table-dark">
                    <th>id</th>
                    <th>Nama Pekerja</th>
                    <th>No.KP</th>
                    <th>No.HP</th>
                    <th>Jantina</th>
                    <th></th>
                </tr>
                <?php
                while ($r = mysqli_fetch_array($result)) {
                ?>
                    <tr class="table-primary">
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['nama_pekerja']; ?></td>
                        <td><?php echo $r['no_kp']; ?></td>
                        <td><?php echo $r['no_hp']; ?></td>
                        <td><?php echo $r['jantina']; ?></td>
                        <td>
                        <button class="update"><a href="kemaskinipekerja.php?kemaskini_id=<?php echo $r['id'] ?>">Update</a></button>
                        <button class="add"><a href="tambahpekerja.php?tambah_id=<?php echo $r['id'] ?>">Add</a></button>
                        <button class="delete"><a href="padampekerja.php?padam_id=<?php echo $r['id'] ?>">Delete</a></button>
                        </td>    
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
    
