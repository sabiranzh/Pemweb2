<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT*FROM periksax";
$perikas = $dbh->query($query);
?>
<main>
    <div class="container-fluid px-4">
       <div class="d-flex mt-4">
        <h3>Daftar Pasien</h3>
        <a href="#" class="btn btn-primary ms-auto">+ Pasien</a>
       </div>

        <table class="table mt-4">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Tensi</th>
                <th>Opsi</th>
            </tr>

            <?php
            $no = 0;
            foreach($perikas as $periksa):
            ?>
                <tr>
                    <td><?= $no += 1?></td>
                    <td><?= $periksa ['nama']?></td>
                    <td><?= $periksa ['tanggal']?></td>
                    <td><?= $periksa ['berat']?></td>
                    <td><?= $periksa ['tinggi']?></td>
                    <td><?= $periksa ['tensi']?></td>
                    <td>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php
            endforeach;?>
        </table>
    </div>
</main>

<?php
include_once('bottom.php')
?>