<div class="container">
    <div class="row">
        <div class="col s12 m12 center align light">
            <h3>Daftar AddOns BVE</h3>
        </div>
        <div class="col m12 s12 center-align">
        <table class="highlight">
            <tr>
                <th>No</th>
                <th>Jenis kereta</th>
                <th>Gambar</th>
                <th>aksi</th>
            </tr>
            <?php $i = 1; ?>    
            <?php foreach( $bve as $B ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $B['jenis'] ?></td>
                <td><img src="<?= base_url(); ?>/img/gambar/<?= $B['gambar']; ?>" width="90px"></td>
                <td><a href="<?= base_url(); ?>admin/hapus/<?= $B['id']; ?>" class="btn-small red">
                    <i class="material-icons">delete</i></a>
                    <a href="<?= base_url(); ?>admin/ubah/<?= $B['id']; ?>" class="btn-small yellow">
                    <i class="material-icons">edit</i></a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12 center-align">
            <a class="waves-effect waves-light btn modal-trigger pbf" href="<?= base_url('admin/tambahdata'); ?>"><i class="material-icons">add</i>Tambah Data openBVE</a>
        </div>
    </div>
</div>