<?php $__env->startSection('title','show Product'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        img {
            /*width: 400px;*/
            height: 200px;
            object-fit: contain;
        }

        .card {
            border: 1px solid #e3c528;
            border-radius: 10px;

        }

        .footer-section {
            margin-top: 20px;
            height: 51px;

        }

        .footer-section a {
            border: 2px solid #e3c528;
            border-radius: 6px;
            color: #e3c528;
        }

        .footer-section:hover a {
            font-weight: bold;
            color: white;
            background-color: #e3c528;
        }

        .footer-section:hover svg {
            color: white;
        }


    </style>
    
    
    
    
    

    <div class="card-deck">
        <div class="container">
            <div class="row ">

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card col-lg-3 col-md-6 col-sm-12 m-5  shadow p-3 mb-5 bg-white rounded">
                        <img class="card-img-top" src="<?php echo e(asset('images/'.$item->image?->name)); ?>" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo e($item->name); ?></h5>
                            <p class="card-text"><?php echo e($item->description); ?></p>
                            <div class="footer-section">
                                <span class="card-text"><?php echo e($item->price); ?></span>
                                <span>Quantity:1/Kg</span>
                                <a href="#" class="d-block btn m-t-2 "
                                   onclick="event.preventDefault(); document.getElementById('add-to-cart-form-<?php echo e($item->id); ?>').submit();">
                                    Add to cart
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="#e3c528"
                                         fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z"/>
                                    </svg>
                                </a>

                                <!-- Hidden form to submit the request -->
                                <form id="add-to-cart-form-<?php echo e($item->id); ?>"
                                      action="<?php echo e(route('cart.add', $item->id)); ?>" method="post"
                                      style="display: none;">
                                    <?php echo csrf_field(); ?> <!-- CSRF token for security -->
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <?php echo e($data->links()); ?>

<?php $__env->stopSection(); ?>

<script>
    function addToCart(productId) {
        // Submit the hidden form using JavaScript
        document.getElementById('add-to-cart-form-' + productId).submit();
    }
</script>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/shop.blade.php ENDPATH**/ ?>