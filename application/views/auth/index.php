<div class="background">
   <div class="container white-text">
    <div class="row center-align">
        <div class="col m6 offset-m3 s12 login">
            <form class="form" action="<?= base_url('auth'); ?>" method="post">
            <div class="">
                <h5>Login</h5>
                <?= $this->session->flashdata('message'); ?>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" class="white-text" value="<?= set_value('email'); ?>">
                    <label for="email">email</label>
                    <?= form_error('email', '<small class="">' , '</small>'); ?>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>    
                    <input type="password" name="password" class="white-text">
                    <label for="password">password</label>
                    <?= form_error('password', '<small class="">' , '</small>'); ?>
                </div>
                    <a href="<?= base_url(); ?>">
                        <input type="submit" value="Login" class="btn" name="btn">
                    </a>
                <div class="center-align">
                    <p>tidak mempunyai akun? daftar <a href="<?= base_url(); ?>auth/registrasi"> di sini</a></p>
                </div>
            </div>
            </form>
        </div> 
    </div>
</div>
</div>
