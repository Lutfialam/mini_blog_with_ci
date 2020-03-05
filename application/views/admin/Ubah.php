<div class="container">
    <div class="row">
        <div class="col m12 s12 center-align">
            <h3>Ubah data</h3>
        </div>
    </div>
    <div class="row">
        <?php echo form_open_multipart('admin/ubah');?>
            <div class="white-text">
                <div class="input-field">
                    <input type="text" name="Title" id="Title">
                    <label for="Title">Title</label>
                </div>
                <div class="input-field">
                    <input type="text" name="jenis" id="jenis">
                    <label for="jenis">jenis</label>
                </div>
                <!-- upload gambar -->
                    <div class="file-field input-field">
                    <div class="btn">
                        <i class="material-icons">file_upload</i>
                        <input type="file" multiple name="gambar" id="gambar">
                    </div>
                    <div class="file-path-wrapper">
                        <input type="text" class="file-path-validate" placeholder="Upload one or more files" name="gambar">
                    </div>                    
                    </div>
                <!-- akhir upload -->
                <div class="input-field">
                    <input type="text" name="link" id="link">
                    <label for="link">link</label>
                </div>
                <div class="input-field">
                    <input type="text" name="deskripsi" id="deskripsi">
                    <label for="deskripsi">deskripsi</label>
                </div>
                <button type="submit" class="btn">Tambah data</button>
            </div>
        </form>
    </div>      
</div>