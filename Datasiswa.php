<html>
    <head>
        <title>Data Siswa</title>
    </head>

    <body>
        <b>FORM</b>
        <form action="" method="POST" name="form1">
            <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type ="text" name = "nama" size ="25"></td>
            </tr>

            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type ="text" name = "nis" size ="25"></td>
            </tr>

            <tr>
                <td>Rayon</td>
                <td>:</td>
                <td><input type ="text" name = "rayon" size ="25"></td>
            </tr>

            <tr>
                <td>Jenis Kelamnin</td>
                <td>:</td>
                <td>
                    <input type ="radio" name = "jenis_kelamin"
                    value="Pria" checked="">Pria
                    <input type ="radio" name = "jenis_kelamin"
                    value="Wanita" checked="">Wanita
                </td>
            </tr>

            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="Jurusan" id="">
                        <option value="PPLG">PPLG</option>
                        <option value="TJKT">TJKT</option>
                        <option value="DKV">DKV</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Tata Boga">Tata Boga</option>
                        <option value="MPLB">MPLB</option>
                        <option value="Pemasaran">Pemasaran</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="spn" value="simpan">
                </td>
            </tr>
            </table>
        </form>
    </body>


<?php

if(isset($_POST['spn'])) {
    $nama=$_POST['nama'];
    $NIS=$_POST['nis'];
    $Rayon=$_POST['rayon'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $jurusan=$_POST['Jurusan'];
}
?>

<b>HASIL</b>
<table border="1">
    <tr>
        <td>NO</td>
        <td>Nama</td>
        <td>NIS</td>
        <td>Rayon</td>
        <td>Jenis Kelamin</td>
        <td>Jurusan</td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $NIS; ?></td>
        <td><?php echo $Rayon; ?></td>
        <td><?php echo $jenis_kelamin; ?></td>
        <td><?php echo $jurusan; ?></td>
    </tr>
</table>
</html>