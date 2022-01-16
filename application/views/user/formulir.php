 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
     <!-- Tombol yang memicu modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
  Klik Saya
</button>
 
<!-- Contoh Modal -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Judul Modal Di Sini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Halo, ini modal sederhana.
        <br/>
        Seri Tutorial Bootstrap 4 lengkap dari dasar sampai mahir.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Oke</button>
      </div>
    </div>
  </div>
</div>














<!-- Extra large modal / Modal paling besar-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalPalingBesar">Extra large modal</button>

<div class="modal fade modalPalingBesar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5>Modal extra large (xl)</h5>
      </div>
      <div class="modal-body">
        Contoh modal berukuran paling besar.
      </div>
    </div>

  </div>
</div>

<!-- Large modal / Modal besar-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBesar">Large modal</button>

<div class="modal fade modalBesar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
      <div class="modal-header">
        <h5>Modal large (lg)</h5>
      </div>
      <div class="modal-body">
        Contoh modal berukuran sedang.
      </div>
    </div>

  </div>
</div>

<!-- Small modal / Modal kecil-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalKecil">Small modal</button>

<div class="modal fade modalKecil" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
      <div class="modal-header">
        <h5>Modal small / kecil (sm)</h5>
      </div>
      <div class="modal-body">
        Contoh modal berukuran paling kecil.
      </div>
    </div>

  </div>
</div>


     <!-- /.container-fluid -->
    <form>
         <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Jurusan</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="option1" checked>
        <label class="form-check-label" for="tehnik">
          Tehnik informatika
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="sistem">
         Sistem informatika
        </label>
     
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>