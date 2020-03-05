<div class="container bve mb">
    <div class="row">
        <div class="col m12 s12 center-align">
            <h1 class="h1admin">Hallo <?= $user['nama']; ?> silahkan pilih yang ingin anda tuju</h1>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <script>alert($error);</script>
    </div>
    <div class="row">
        <div class="col m4 s12 center-align mt1">
            <a href="<?= base_url(); ?>admin/addons">
                <button class="btn-large">addons bve</button>
            </a>
        </div>
        <div class="col m4 s12 center-align mt1">
            <a href="<?= base_url(); ?>admin/route">
                <button class="btn-large">route bve</button>
            </a>
        </div>
        <div class="col m4 s12 center-align mt1">
            <a href="<?= base_url(); ?>admin/webdev">
                <button class="btn-large">Web develop</button>
            </a>
        </div>
        <div class="col s12 m12 mt1">
            <p><b>Note:</b> Maaf <?= $user['nama']; ?> untuk saat ini hanya bisa menambahkan data addons bve</p>
        </div>
    </div>    
</div>