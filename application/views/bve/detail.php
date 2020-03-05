<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta description="Website penyedia addons openBVE">

  <title><?= $bve['Title']; ?></title>
  
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="<?= base_url(); ?>/css/me.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/css/sweetalert2.min.css">
  
</head>
<body>
<div class="detail">
    <div class="container">
        <div class="row mb">
            <div class="col m12 s12 center-align">
                <h4><?= $bve['jenis']; ?></h4>
            </div>
            <div class="col m6 s12 center-align">
                <img src="<?= base_url(); ?>img/gambar/<?= $bve['gambar']; ?>" width="75%">
            </div>    
            <div class="col m6 s12">
                <hr>
                <h5>Deskripsi :</h5>
                <p><?= $bve['deskripsi']; ?></p>
                <hr>
            </div>
            <?php if ( $this->session->userdata('email') ) { ?>
            <div class="col s2 m2 offset-m10 white-text">
                <a onclick="M.toast({html: 'menuju link download'})" class="btn tooltipped" data-position="right" data-tooltip="download disini!" href="<?= $bve['link']; ?>">download</a>
            </div>    
            <?php } else { ?>
                <p>silahkan login terlebih dahulu <a href="<?= base_url('auth'); ?>">disini</a> </p>
            <?php } ?>
        </div>
    </div>
</div>
