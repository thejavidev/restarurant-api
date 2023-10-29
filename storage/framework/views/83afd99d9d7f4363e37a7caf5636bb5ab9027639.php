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
                    <a href="<?php echo e(route('blog.create')); ?>" class="btn login_btn btn-focus ">Add</a>
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
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><img src="<?php echo e(asset('files/blog/'.$blog->src)); ?>" style="width: 200px" alt=""></td>
                            <td class="text-center"><?php echo e($blog->blog_title_az); ?></td>

                            <td>
                                <div class="btn-list align-items-center justify-content-center">
                                    <a href="<?php echo e(route('blog.edit',$blog->id)); ?>" class="btn btn-blue"><i class="fa fa-pen"></i></a>
                                    <form action="<?php echo e(route('blog.destroy',$blog->id)); ?>" method="POST">
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

<?php echo $__env->make('back.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u719039710/domains/cavidan.info/public_html/coffee/resources/views/back/pages/blog/index.blade.php ENDPATH**/ ?>