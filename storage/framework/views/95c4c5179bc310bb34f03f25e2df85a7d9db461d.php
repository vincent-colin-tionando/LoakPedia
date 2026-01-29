<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="./LoakPedia/Project_registrasi.css">
<section class="form-content-regis">
    <div class="wrapper">
        <h2>Registrasi</h2>
        <form action="#">
            <div class="input-form">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Masukkan Nama Lengkap Anda" required>
            </div>
            <div class="input-form">
                <label class="special">Username</label>
                <input type="text" placeholder="Masukkan Username Anda" required>
            </div>

            <div class="input-form">
                <label>E-Mail</label>
                <input type="email" placeholder="Masukkan E-Mail Anda" required>
            </div>

            <div class="input-form">
                <label>No. Telepon</label>
                <input type="tel" placeholder="Masukkan No. Telepon Anda (cth. 0895-8883-6152)" pattern="08[0-9]{2}-[0-9]{4}-[0-9]{4}" required>
            </div>

            <div class="input-form">
                <label>Tanggal Lahir</label>
                <input type="date" required>
            </div>

            <div class="input-form">
                <label>Kata Sandi</label>
                <input type="password" minlength="6" maxlength="10" placeholder="Buatlah kata sandi Anda (6-10 karakter)" required>
            </div>
            <div class="input-form">
                <label>Konfirmasi</label>
                <input type="password" minlength="6" maxlength="10" placeholder="Konfirmasikan kata sandi Anda (6-10 karakter)" required>
            </div>

            <div class="policy">
                <input type="checkbox">
                <h3>Saya menyetujui <a href="#">Syarat & Ketentuan</a> yang berlaku</h3>
            </div>
            <div class="input-form button">
                <a href="/home"><input type="Submit" value="Daftar Sekarang"></a>
            </div>
            <div class="text">
                <h3>Sudah memiliki akun? <a href="/login">Masuk Sekarang</a></h3>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Aldd\A sunib\SEMESTER 4\SE\Code\LoakPedia\Laravel\LoakPedia\resources\views/pages/regis.blade.php ENDPATH**/ ?>