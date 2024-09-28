<?php $__env->startSection('title','show users'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        table tr td img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        table {
            margin-top: 10px;
        }
    </style>
    <table class="table table-striped  m-auto text-center" style="width: 65%;">
        <thead>
        <tr>

            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">date</th>
            <th scope="col" class="text-center">control</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>

                <td><?php echo e($item->Title); ?></td>
                <td><?php echo e($item->Description); ?></td>
                <td><?php echo e($item->created_at); ?></td>
                <td class="text-center">
                    <a href="" class="  m-2" style="text-decoration: none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </a>
                    <a href="/delete-item?model_name=Services&id=<?php echo e($item->id); ?>" class=" m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" color="red" height="16" fill="currentColor"
                             class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                        </svg>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </tbody>
    </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('LayoutAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/Admin/ShowServices.blade.php ENDPATH**/ ?>