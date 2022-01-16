
  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  </div>
  <!-- /.container-fluid -->

 <!--Modal-->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">formulir pendaftaran mahasiswa baru</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" id="nama" class="form-control" placeholder="Masukkan nama ">
  </div>
   <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" class="form-control" placeholder="Masukkan email">
  </div>
 
  <div class="form-group">
    <label for="umur">Umur</label>
    <input type="number" id="umur" class="form-control" placeholder=" ">
  </div>
  <div class="form-group">
    <label for="lahir">Tgl Lahir</label>
    <input type="date" id="lahir" class="form-control" placeholder="">
  </div>

 
  <div class="form-group">
    <label for="pekerjaan">Jurusan</label>
    <select id="pekerjaan" class="form-control">
      <option value="">- Pilih Jurusan</option>
      <option value="">Tehnik Informatika</option>
      <option value="">Sistem Information</option>
      <option value="">Jaringan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="inline1"> Pembayaran</label>
  <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="inline1">
    <label class="custom-control-label" for="inline1">Reguler</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="inline2">
    <label class="custom-control-label" for="inline2">Beasiswa</label>
  </div>
</div>

 
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" rows="3" placeholder="Contoh textarea .."></textarea>
  </div>
      </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('user/Information'); ?>">Daftar</a>
                </div>
            </div>
        </div>
    </div>
 </form>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->