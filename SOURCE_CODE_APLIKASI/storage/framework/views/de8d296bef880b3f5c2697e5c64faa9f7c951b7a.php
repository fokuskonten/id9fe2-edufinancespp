<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <?php if(auth()->check() && auth()->user()->hasRole('siswa')): ?>
        <?php echo $__env->make('layouts/partials/userHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts/partials/adminHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Compressed\spp-sekolah-main\spp-sekolah-main\resources\views/home.blade.php ENDPATH**/ ?>