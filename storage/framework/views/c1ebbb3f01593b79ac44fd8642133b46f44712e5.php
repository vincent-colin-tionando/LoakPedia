<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="./LoakPedia/Project_login.css">
<section class="form-content">
    <div class="wrapper">
        <h2>Login</h2>
        <form action="#">
            <div class="input-form">
                <label class="special">Username</label>
                <input type="text" placeholder="Masukkan Username Anda" required>
            </div>
            <div class="input-form">
                <label>Kata Sandi</label>
                <input type="password" minlength="6" maxlength="10" placeholder="Buatlah kata sandi Anda (6-10 karakter)" required>
            </div>
            <div class="text">
                <h3><a href="/regis">Lupa Kata Sandi?</a></h3>
            </div>
            <div class="input-form button">
                <input type="Submit" value="Daftar Sekarang">
            </div>
            <div class="text">
                <h3 class="belum">Belum memiliki akun? <a href="/regis">Registrasi Sekarang</a></h3>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aldd\A sunib\SEMESTER 4\SE\Code\LoakPedia\Laravel\LoakPedia\resources\views/pages/login.blade.php ENDPATH**/ ?>