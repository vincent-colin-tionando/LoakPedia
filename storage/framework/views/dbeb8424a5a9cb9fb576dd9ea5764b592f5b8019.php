<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="./LoakPedia/Project_login.css">
<section class="form-content">
    <div class="wrapper">
        <h2>Login</h2>
        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="input-form">
                <label class="special">Username</label>
                <input type="text" placeholder="Masukkan Username Anda" required>
                <?php $__errorArgs = ['login_failed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-form">
                <label>Kata Sandi</label>
                <input type="password" minlength="6" maxlength="10" placeholder="Masukan kata sandi Anda (6-10 karakter)" required>
            </div>
            <div class="text">
                <h3><a href="/regis">Lupa Kata Sandi?</a></h3>
            </div>
            <div class="input-form button">
                <a href="/home"><input type="submit" value="Masuk">
            </div>
            <div class="text">
                <h3 class="belum">Belum memiliki akun? <a href="/regis">Registrasi Sekarang</a></h3>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicho\Downloads\LoakPedia-20230612T162001Z-001\LoakPedia\resources\views/pages/login.blade.php ENDPATH**/ ?>