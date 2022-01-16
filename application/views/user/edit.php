 <!-- Begin Page Content -->


   <!-- /.container-fluid -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

 <!-- End of Main Content -->
  <div class="col-lg-8">
 <form action="<?=base_url('user/edit'); ?>" method="post" enctype="multipart/form-data">
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
       <div class="from-group row">
         <div class="col-sm-2">Picture</div>
         <div class="col-sm-10">
           <div class="row">
             <div class="col-sm-3">
               <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " alt="..." class="img-thumbnail" >
             </div>
             <div class="col-sm-9">
               <div class="custom-file">
                 <input type="file" class="custom-file-input" id="image" name="image">
                 <label class="custom-file-label" for="customFile">Pilih file</label>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="form-group row justify-content-end">
         <div class="col-sm-10">

         </div>
         <button type="submit" class="btn btn-primary">Edit</button>
       </div>
 </form>
 </div>
 </div>