<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=coba.xls");
?>
    <center>
        <table border="1" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Jenis kereta</th>
                <th>deskripsi</th>
                <th>tahun pembuatan</th>
                <th>mulai dinas</th>
            </tr>
            <?php $i = 1; ?>    
            <?php foreach( $bve as $B ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $B['jenis'] ?></td>
                <td><?= $B['deskripsi'] ?></td>
                <td><?= $B['tahunpembuatan'] ?></td>
                <td><?= $B['mulaidinas'] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
    </center>
        