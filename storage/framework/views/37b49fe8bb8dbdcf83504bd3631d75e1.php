<?php $__env->startSection('title','cart'); ?>
<?php $__env->startSection('content'); ?>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:30%">Product</th>
            <th style="width:10%">Price</th>

            <th style="width:10%">Quantity</th>
            <th style="width:10%">Total</th>

            <th style="width:10%" class="text-center">control</th>

        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productId => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td><?php echo e($item['name']); ?></td>
                <td>$<?php echo e(number_format($item['price'], 2)); ?></td>
                <td><?php echo e($item['quantity']); ?></td>
                <td>$<?php echo e(number_format($item['price'] * $item['quantity'], 2)); ?></td>
                <td>
                    <form class="text-center" action="<?php echo e(route('cart.remove', $productId)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger text-center">Remove</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/cart.blade.php ENDPATH**/ ?>