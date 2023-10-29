<?php $__env->startSection('title'); ?> Products <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page">
        <?php echo $__env->make('back.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-primary w-100">Add</a>
                <table class="table table-vcenter table-mobile-md card-table">
                    <thead >
                    <tr>

                        <th>Name(AZ)</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="services">
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td><?php echo e($blog->blog_title_az); ?></td>

                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="<?php echo e(route('blog.edit',$blog->id)); ?>" class="btn btn-primary"><i class="fa fa-pen"></i></a>
                                    <form action="<?php echo e(route('blog.destroy',$blog->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('You are sure you want to delete it?')"><i class="fa fa-times"></i></button>
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

<?php echo $__env->make('back.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SAYTLAR\DESKTOP\coffee\resources\views/back/pages/blog/index.blade.php ENDPATH**/ ?>