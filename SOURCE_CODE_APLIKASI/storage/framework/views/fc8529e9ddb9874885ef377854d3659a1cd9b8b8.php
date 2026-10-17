<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="container p-5">
        <div class="row" style="height: 430px">
            <div class="col-md-6 col-lg-8  d-flex align-items-center">
                <img class="d-lg-block d-md-block d-sm-none d-none img-fluid "  style="opacity: 0.9"  src="img/undraw_Brainstorming_re_1lmw.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4  d-flex flex-column align-items-center">
                <div class="text-center d-flex align-items-center justify-content-center mb-2">
                    <img height="60px" width="60px" class="mr-3" src="<?php echo e(asset('/img/').'/'.\Setting::getSetting()->logo); ?>" alt="">
                    
                    <h6>
                        
                        Sistem Informasi <br> Pembayaran Sekolah
                    </h6>
                </div>
                <div class="card card-primary w-100 shadow" >
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <?php if(session('error')): ?>
                            <p class="text-danger text-center">
                                <?php echo e(session('error')); ?>

                            </p>
                        <?php endif; ?>
                        
                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " placeholder="Username"
                                    name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" id="username"
                                    autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user-alt"></span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>tess</strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="small mt-n2 mb-2 ml-3 text-muted">
                                Untuk Siswa Silahkan Login Menggunakan NIS.
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Password" name="password" value="<?php echo e(old('password')); ?>" required
                                    autocomplete="current-password" id="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="small mt-n2 mb-2 ml-3 text-muted">
                                Password Default Siswa 123456.
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                        id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="remember">Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>
            
                        
                        

                    </div>
                    <!-- /.login-card-body -->
                    <div class="simple-footer mt-n1">
                        <?php echo e(\Setting::getSettingSekolah()->nama_sekolah); ?> <br>
                        <?php echo e(\Setting::getSettingSekolah()->kota); ?> <br>
                        © <?php echo e(date("Y")); ?>

                    </div>
                </div>
            </div>
            
        </div>        
    </div>
    
</section>
<!-- /.login-box -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
        $("#admin").click(function (e) {
            e.preventDefault()
            
            $("#username").val('admin');
            $("#password").val('password');
        });

        $("#siswa").click(function (e) {
            e.preventDefault()
            
            $("#username").val('0054088460');
            $("#password").val('123456');
        });

        $("#kelas_id").change(function(){
            filter();
        });
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Compressed\spp-sekolah-main\spp-sekolah-main\resources\views/auth/login.blade.php ENDPATH**/ ?>