

      

       

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

               <div class="row">
                <div class="col-lg-6">
                 <?= $this->session->flashdata('message'); ?>
                </div>
              </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->
             <div class="card mb-5 col-lg-8">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['name']; ?></h5>
        <p class="card-text" style=" color: blue;"><i>success in this world and the hereafter is my goal</i></p>
        <p class="card-text"><?= $user['email']; ?></p>
        <p class="card-text"><small class="text-muted"><?= date('D,F,Y',$user['date_create']); ?></small></p>
      </div>
    </div>
</div>
</div>

          