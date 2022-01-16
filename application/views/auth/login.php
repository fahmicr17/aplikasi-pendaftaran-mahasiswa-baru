 <style >
     body{
      background-color: rgb(115, 255, 216);
    }
     
 </style>
        <!-- Outer Row -->
        <div class="row justify-content-center">
        
          
               
                
  
            <div class="col-4">
                
               

                <div class="card o-hidden border-0 shadow-lg my-2 mx-auto">
                   
                        <!-- Nested Row withiCard Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-group"><i class="fas fa-code"></i>
                                            <input type="text" class="form-control " id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="Password" class="form-control" id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="text-center">
                                        <button type="submit" class="  btn-primary block text-center">
                                                Login
                                            </a>
                                        </button>
                                    </div>
                                        

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Password</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration') ?>"> Buat Akun!</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                         
              
                    </div>
                </div>
            </div>

        </div>


    </div>

</div>

   