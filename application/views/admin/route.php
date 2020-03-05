<div class="container">
    <div class="row">
        <div class="col m12 center align light">
            <h3>Daftar route BVE</h3>
        </div>
        <div class="col m12 s12 center-align">
        <table>
            <tr>
                <th>No</th>
                <th>route</th>
                <th>Gambar</th>
                <th>aksi</th>
                <th>deskripsi</th>
            </tr>
            <?php $i = 1; ?>    
            <?php foreach( $route as $rute ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $rute['jurusan'] ?></td>
                <td><img src="<?= base_url(); ?>/img/<?= $rute['gambar'] ?>" width="90px"></td>
                <td><a href="<?= base_url(); ?>admin/delete/<?= $rute['id'] ?>"><input type="button" value="delete" class="btn-small red" name="btn"><input type="button" value="ubah" class="btn-small yellow" name="btn"></a></td>
                <td><?= $rute['deskripsi'] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
        </div>
    </div>

    <div class="row">
        <div class="col m12 center-align">
            <a class="waves-effect waves-light btn" href="<?= base_url(); ?>admin/tambah-data">Tambah Data openBVE</a>
        </div>

        <div class="col m12">
            <p>Note : Jika ingin mendownload addons BVE silahkan pantek terlebih dahulu</p>
        </div>
    </div>
</div>