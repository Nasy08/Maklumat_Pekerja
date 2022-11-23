<?php
include_once "connection.php";

$id = $GET["kemaskini_id"];
if(isset($_POST['kemaskini_id'])){
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $no_hp = $_POST['no_hp'];
    $jantina = $_POST['jantina'];
$result = mysqli_query(
    $mysqli,"UPDATE info_pekerja 
             SET nama_pekerja='$nama_pekerja',no_kp='$no_kp',no_hp='$no_hp',jantina='$jantina' 
             WHERE id = '$id'"
             );
}
?>
<?php
while($result = mysqli_fetch_array($result))
{
    $id = $result['id'];
    $nama_pekerja = $result['nama_pekerja'];
    $no_kp = $result['no_kp'];
    $no_hp = $result['no_hp'];
    $jantina = $result['jantina'];
}
?>
<div>
    <div>
        <h3>KEMASKINI MAKLUMAT</h3>
        <form method="post" enctype='multipart/form-data'>
            <div>
            <div>
                <label>Id</label>
                <input name="id" type="text" required  maxlength="5" value="<?php echo $id;?>">  
                </div>
                <div>
                <label>Nama Pekerja</label>
                <input name="nama_pekerja" type="text" required  value="<?php echo $nama_pekerja;?>">  
                </div>
                <div>
                <label>No.KP</label>
                <input name="no_kp" type="text" required value="<?php echo $no_kp;?>">  
                </div>
                <div>
                <label>No.HP</label>
                <input name="no_hp" type="text" required value="<?php echo $no_hp;?>">  
                </div>
                <div>
                <option disabled selected value>--Select an option</option>
                <option value="Lelaki">Lelaki</option>
                <option value="Perempuan">Perempuan</option>


