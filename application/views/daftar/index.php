<!DOCTYPE html>
<html>
<head>
    <title>daftar</title>
</head>
<body>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Mahasiswa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                  <div class="col-lg-8">
    <form>
       <div class="form-group row">
         <label for="email" class="col-sm-2 col-form-label" name="email">Email</label>
         <div class="col-sm-10">
           <input type="text" class="form-control"  id="email" name="email" value="<?= $user['email']; ?>" readonly>
         </div>

       </div>
       <div class="form-group row">
         <label for="name" class="col-sm-2 col-form-label" name="name">Full name</label>
         <div class="col-sm-10">
           <input type="text" class="form-control " id="name" name="name" value="<?= $user['name']; ?>">
           <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
         </div>

       </div>
                <div class="modal-body">Tekan"kirim" jika sudah lengkap terisi semua data</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url(''); ?>">kirim</a>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>

      

 
             

            

          