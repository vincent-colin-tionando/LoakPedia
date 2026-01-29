<?php if(auth()->guard()->check()): ?>
    <?php
        $user = auth()->user();
    ?>
<?php endif; ?>


<?php $__env->startSection('content'); ?>


<link rel="stylesheet" href="./LoakPedia/Logged/Project_profile.css">

<div class="container">
    <div class="sidebar">
        <ul>
            <li><a href="#">Daftar Transaksi</a></li>
            <li><a href="#">Obrolan</a></li>
            <li><a href="#">Masukan</a></li>
            <li><a href="#">Histori</a></li>
            <li><a href="#">Daftar Produk</a></li>
            <li><a href="#">Keamanan</a></li>
            <li><a href="#">Pengaturan</a></li>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="logout">Keluar</button>
            </form>
        </ul>
    </div>

    <div class="content">
        <img src="./LoakPedia/Logged/ellipse_79.png" alt="">
    </div>

    <div class="biodata">
        <h4>Biodata</h4>
        <ul>
            <li>Nama          &emsp;&emsp;&emsp;&emsp;: <?php echo e(Auth::user()->name); ?></li>
            <li>Tanggal Lahir &nbsp;: <?php echo e(Auth::user()->birthdate); ?></li>
        </ul>
    </div>

    <div class="kontak">
        <h4>Kontak</h4>
        <ul>
            <li>Email       &emsp;&emsp;&emsp;: <?php echo e(Auth::user()->email); ?></li>
            <li>No. Telepon : (+62)<?php echo e(Auth::user()->phone); ?></li>
        </ul>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.masterlogged', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicho\Downloads\LoakPedia\resources\views/pages/logged/profile.blade.php ENDPATH**/ ?>