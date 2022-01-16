<div class="container-fluid">


  <!-- /.container-fluid -->

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>




  <!-- /.container-fluid -->
  <form class="h8 mb-4">
    <!-- Vertically centered scrollable modal -->
    <!-- Tombol yang memicu modal -->
    <h3 style="font-family:Britannic Bold; text-align: center; ">DATA MAHASISWA BARU</h3>
    <button type="button" class="btn-primary text-align right" data-toggle="modal" data-target="#modalSaya">
      Daftar
    </button>
    <button type="button" class="btn-danger " style="margin-left:853px " data-toggle="modal" data-target="#modalSaya">
      Hapus
    </button>
     <button type="button" class="btn-success " data-toggle="modal" data-target="#modalSaya">
      Edit
    </button>
         <button type="button" class="btn-warning " data-toggle="modal" data-target="#modalSaya">
      Edit
    </button>
    <!--tembah data ke databases-->
    <form action="input.php" method="post">
      <div class="row">
        <div class="col-lg">
          <table class="table table-hover" style="font-family: Bookman Old Style;">
            <thead>
              <tr>
                <th scope="col "class=" bg-primary text-light">No</th>
                <th scope="col"class=" bg-primary text-light">Nama</th>
                 <th scope="col"class=" bg-primary text-light">Email</th>
                <th scope="col"class=" bg-primary text-light">Jalur</th>
                 <th scope="col"class=" bg-primary text-light">Tanggal lahir</th>
               
                <th scope="col"class=" bg-primary text-light">Tanggal daftar</th>
                <th scope="col"class=" bg-primary text-light">Action</th>
              </tr>
            </thead>
            <tbody>

	 <tr>
                <th scope="row" class="bg-dark text-light">1</th>
                <td class="bg-dark text-light"><?=$user['name'];?></td>
                <td class="bg-dark text-light"><?=$user['email'];?></td>
                <td class="bg-dark text-light">KIP KULIAH</td>
                <td class="bg-dark text-light">17-februari-2002</td>
                <td class="bg-dark text-light"><?= date('D,F,Y',$user['date_create']); ?></td>
                <td class="bg-info text-warning"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-edit-interface-kiranshastry-lineal-color-kiranshastry.png"/style="width:40px; margin-left:8px;" type="button"></td>
              </tr>
               <tr>
                <th scope="row" class="bg-dark text-light">2</th>
                <td class="bg-dark text-light">Hanan Sayudi</td>
                <td class="bg-dark text-light">anan@gmail.com</td>
                <td class="bg-dark text-light">REGULER</td>
                <td class="bg-dark text-light">05-maret-2002</td>
                <td class="bg-dark text-light"><?= date('D,F,Y',$user['date_create']); ?></td>
                <td class="bg-info text-warning"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-edit-interface-kiranshastry-lineal-color-kiranshastry.png"/style="width:40px; margin-left:8px;" type="button"></td>
              </tr>
               <tr>
                <th scope="row" class="bg-dark text-light">3</th>
                <td class="bg-dark text-light">Suherman</td>
                <td class="bg-dark text-light">suher@gmail.com</td>
                <td class="bg-dark text-light">BIDIKMISI</td>
                <td class="bg-dark text-light">20-februari-2002</td>
                <td class="bg-dark text-light"><?= date('D,F,Y',$user['date_create']); ?></td>
                <td class="bg-info text-warning"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-edit-interface-kiranshastry-lineal-color-kiranshastry.png"/style="width:40px; margin-left:8px;" type="button"></td>
              </tr>
               <tr>
                <th scope="row" class="bg-dark text-light">4</th>
                <td class="bg-dark text-light">Wawan </td>
                <td class="bg-dark text-light">wawan@gmail.com</td>
                <td class="bg-dark text-light">KIP KULIAH</td>
                <td class="bg-dark text-light">03-februari-2001</td>
                <td class="bg-dark text-light"><?= date('D,F,Y',$user['date_create']); ?></td>
                <td class="bg-info text-warning"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-edit-interface-kiranshastry-lineal-color-kiranshastry.png"/style="width:40px; margin-left:8px;" type="button"></td>
              </tr>
             

             

            </tbody>
          </table>
        </div>
      </div>

</div>
</form>
<!-- End of Main Content -->



<!-- Contoh Modal -->
<form action="formulir/input.php" method="post">
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title" id="modalSayaLabel">Formulir Pendaftar</h3>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">
          <label for="name" class="col-sm-2 col-form-label active">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="nama">
          </div>
        </div>
        <br>
        <div class="row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email"name="email">
          </div>
        </div>
        <br>
        <div class="row ">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
        </div>
        <br>
        <div class="row">
          <label for="lahir" class="col-sm-2 col-form-label">Tgl/lahir</label>
          <div class="col-sm-6">
            <input type="date" class="form-control" id="lahir" name="lahir">
          </div>
        </div>
        <br>
        <div class="row">
          <label for="lahir" class="col-sm-2 col-form-label">Jurusan</label>
          <div class="col-sm-6">
            <select class="custom-select custom-select-sm" name="jurusan">
              <option selected="1" value="1">Tehnik Informatika</option>
              <option value="2">Sistem Informasi</option>
              <option value="3">Jaringan</option>
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <label for="1" class="col-sm-2 col-form-label">Jenis kelamin</label>
          <div class="col-sm-6">
            <select class="custom-select custom-select-sm"name="jenis_kelamin">
              <option selected="1" value="1">Laki-laki</option>
              <option value="2">Prempuan</option>

            </select>
          </div>
        </div>
        <div class="row">
          <label for="Lulusan" class="col-sm-2 col-form-label active">Lulusan</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="Lulusan" name="lulusan">
          </div>
        </div>
        <br>
        <div class="row">
          <label for="no_hp" class="col-sm-2 col-form-label">No hp</label>
          <div class="col-sm-6">
            <input type="tel" class="form-control "name="no_hp" value="(+62)" >
          </div>
        </div>
        <br />
        Semua harus di isi sesuai data yang lengkap!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="input">Daftar</button>
      </div>
    </div>
  </div>
</div>
</form>
