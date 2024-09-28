<?php $__env->startSection('title', 'profile'); ?>
<style>
    img {
        border-radius: 50%;
    }

    span {
        font-size: 20px;
        color: gray;
    }

    .container {
        margin-left: 20px;
    }

</style>
<?php $__env->startSection('content'); ?>
    <div class="container ">
        <h1 class="text-center">Admin Profile</h1>
        <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded m-4  ">
            <div class="card-body ">
                <?php if($user->image): ?>
                    <img src="<?php echo e(asset('images/'.$user->image->name)); ?>" style="width: 150px; height: 150px;">
                <?php else: ?>
                    <img src="<?php echo e(asset('images/default.svg.png')); ?>" style="width: 150px; height: 150px;">
                <?php endif; ?>
                <h4>Name:<span><?php echo e($user->username); ?></span></h4>
                <h4>Email: <span><?php echo e($user->email); ?></span></h4>
                <h4>Type: <span><?php echo e($user->type); ?></span></h4>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('LayoutAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/Admin/AdminProfile.blade.php ENDPATH**/ ?>