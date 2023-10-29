<?php $__env->startSection('title'); ?> Products <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page">
        <?php echo $__env->make('back.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <table class="table table-vcenter table-mobile-md card-table">
                    <thead style="cursor: ">
                    <tr>
                        <th>Site tipe</th>
                        <th>Adı</th>
                        <th>Tel no</th>
                    </tr>
                    </thead>
                    <tbody id="services">
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($contact->site_type); ?></td>
                                <td><?php echo e($contact->full_name); ?></td>
                                <td><?php echo e($contact->tel); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo $contacts->links('vendor.pagination.bootstrap-4'); ?>

            </div>
        </div>
        <?php echo $__env->make('back.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SAYTLAR\DESKTOP\javidev\resources\views/back/pages/contact/index.blade.php ENDPATH**/ ?>