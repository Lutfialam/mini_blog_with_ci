<div class="background-regist">
   <div class="container">
    <div class="row center-align">
        <div class="col m6 offset-m3 s12 login">
            <form class="form-regist" method="post" action="<?= base_url('auth/registrasi'); ?>">
            <div class="white-text">
                <h5>Registrasi</h5>
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                    <label for="nama">Nama</label>
                    <?= form_error('nama', '<small class="">' , '</small>'); ?>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <input type="text" name="nomor" id="nomor" value="<?= set_value('nomor'); ?>">
                    <label for="nomor">No telephone</label>
                    <?= form_error('nomor', '<small class="">' , '</small>'); ?>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="text" name="email" id="email" value="<?= set_value('email'); ?>">
                    <label for="email">email</label>
                    <?= form_error('email', '<small class="">' , '</small>'); ?>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>    
                    <input type="password" name="password" id="password">
                    <label for="password">password</label>
                    <?= form_error('password', '<small class="">' , '</small>'); ?>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>    
                    <input type="password" name="password2" id="password2">
                    <label for="password2">password2</label>
                    <?= form_error('password2', '<small class="">' , '</small>'); ?>
                </div>
                    <a href="<?= base_url(); ?>auth/index">
                        <input type="submit" value="Registrasi" class="btn" name="btn">
                    </a>
                </div>
            </form>
        </div> 
    </div>
</div>
</div>
