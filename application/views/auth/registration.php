
 <div class="container" >
    <div class="card o-hidden border-1 shadow-lg my-5 col-lg-4 mx-auto " >

        <div class="body p-2">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-2">
                        <div class="text-center">
                            <h1 class="h5 text-gray-900 mb-4">Buat Akun Dulu Ya CS!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">

                            <div class=" form-group row">
                                
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        
                            </div>
                            <div class=" form-group row">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>"/>
                                  <i class="fa fa-key"></i>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                    <input type="password1" class="form-control" id="password1" name="password1" placeholder="Repeat Password" value="<?= set_value('password1'); ?>">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                                <div class="text-center">
                            <button type="submit" class="btn-primary block text-center">
                                Buat Akun
                            </button>
                        </div>
                        
                        </form>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/index'); ?>">Sudah Punya Akun Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>