<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="./LoakPedia/Logged/EmptyCart.css">

<section class="./LoakPedia/Logged/empty-image">
    <img src="./LoakPedia/Logged/empty.jpg" alt="">
</section>

<section class="text">
    <h3>Keranjang Belanja Anda Kosong!</h3>
</section>

<form action="/homelogged">
    <div class="input-form button">
        <input type="Submit" value="Belanja Sekarang">
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.masterlogged', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicho\Downloads\LoakPedia\resources\views/pages/logged/emptycart.blade.php ENDPATH**/ ?>