<div class="container">
    <div class="row">
        <div class="col m12 center align light">
            <h3>Daftar AddOns BVE</h3>
        </div>
        <div class="col m12 center-align">
        <table class="highlight">
            <tr>
                <th>No</th>
                <th>Jenis kereta</th>
                <th>Gambar</th>
                <th>Detail</th>
            </tr>
            <?php $i = 1; ?>    
            <?php foreach( $bve as $B ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $B['jenis'] ?></td>
                <td><img src="<?= base_url(); ?>/img/gambar/<?= $B['gambar'] ?>" width="70px"></td>
                <td><a class="btn teal darken-3" href="<?= base_url(); ?>Bve/detail/<?= $B['id'] ?>">Detail</a></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
        </div>
        <div class="col m12">
            <p>Note : Jika ingin mendownload addons BVE silahkan Login terlebih dahulu. dan saat ini hanya tersedia addons openBVE</p>
        </div>
    </div>
</div>