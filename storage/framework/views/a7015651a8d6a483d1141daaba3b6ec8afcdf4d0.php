<?php $__env->startSection('title'); ?> Products <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page">
        <?php echo $__env->make('back.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <div class="global_buttons">
                    <a href="<?php echo e(route('simple.create')); ?>" class="btn login_btn btn-focus ">Add</a>
                </div>

                <table class="table table-vcenter table-mobile-md card-table bg px-4 py-4">
                    <thead >
                    <tr>
                        <th class="text-center">Cover</th>
                        <th class="text-center">Name(AZ)</th>

                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody id="services">
                    <?php $__currentLoopData = $simple; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $simple): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><img src="<?php echo e(asset('files/simple/'.$simple->src)); ?>" style="width: 60px" alt=""></td>
                            <td class="text-center"><?php echo e($simple->text_1_az); ?></td>

                            <td>
                                    <div class="btn-list align-items-center justify-content-center">
                                    <a href="<?php echo e(route('simple.edit',$simple->id)); ?>" class="btn btn-blue"><i class="fa fa-pen"></i></a>
                                    <form action="<?php echo e(route('simple.destroy',$simple->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-red" type="submit" onclick="return confirm('You are sure you want to delete it?')"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php echo $__env->make('back.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SAYTLAR\PROJECTS\VOLTER BISHOP\COFFEE\_coffee\resources\views/back/pages/simple/index.blade.php ENDPATH**/ ?>