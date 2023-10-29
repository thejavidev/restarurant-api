<?php $__env->startSection('title'); ?> Products <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page">
        <?php echo $__env->make('back.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content m-3">
            <div class="mb-3 col-md-10 offset-md-1">
               <div class="d-flex justify-content-center align-items-center mb-4">
                   <a href="<?php echo e(route('simple.index')); ?>" class="btn login_btn btn_blue btn-margin btn-focus ">All</a>
               </div>
                <form action="<?php echo e(route('simple.update',$simple->id)); ?>" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>


                    <div class="row">
                        <div class="row">

                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src">Photo</label>
                                <input type="file" accept="image/*" onchange="loadFile(event)" hidden="" class="form-control <?php $__errorArgs = ['src'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="src" name="src" value="<?php echo e(old('src')); ?>">
                                <?php $__errorArgs = ['src'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-start">
                                <img src="<?php echo e(asset('files/simple/'.$simple->src)); ?>"   class="all-img outputImg" alt="">
                            </div>
                        </div>
                        <hr class="mt-4" />
                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_1_az">Text 1(AZ)</label>
                            <input type="text" class="form-control login_input <?php $__errorArgs = ['text_1_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="text_1_az" id="text_1_az" value="<?php echo e(old('text_1_az',$simple->text_1_az)); ?>">
                            <?php $__errorArgs = ['text_1_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_1_en">Text 1(EN)</label>
                            <input type="text" class="form-control login_input <?php $__errorArgs = ['text_1_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="text_1_en" id="text_1_en" value="<?php echo e(old('text_1_en',$simple->text_1_en)); ?>">
                            <?php $__errorArgs = ['text_1_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_1_ru">Text 1(RU)</label>
                            <input type="text" class="form-control login_input <?php $__errorArgs = ['text_1_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="text_1_ru" id="text_1_ru" value="<?php echo e(old('text_1_ru',$simple->text_1_ru)); ?>">
                            <?php $__errorArgs = ['text_1_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_2_az">Text 2(AZ)</label>
                            <textarea  cols="30" rows="6" class="form-control login_input <?php $__errorArgs = ['text_2_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="text_2_az" id="text_2_az" ><?php echo e(old('text_2_az',$simple->text_2_az)); ?></textarea>
                            <?php $__errorArgs = ['text_2_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_2_en">Text 2(EN)</label>
                            <textarea  cols="30" rows="6" class="form-control login_input <?php $__errorArgs = ['text_2_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="text_2_en" id="text_2_en" ><?php echo e(old('text_2_en',$simple->text_2_en)); ?></textarea>
                            <?php $__errorArgs = ['text_2_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_2_ru">Text 2(RU)</label>
                            <textarea  cols="30" rows="6" class="form-control login_input <?php $__errorArgs = ['text_2_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="text_2_ru" id="text_2_ru" ><?php echo e(old('text_2_ru',$simple->text_2_ru)); ?></textarea>
                            <?php $__errorArgs = ['text_2_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group  global_buttons">
                        <button class="btn login_btn btn_save">Edit</button>
                    </div>
                </form>
            </div>
        </div>
        <?php echo $__env->make('back.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u719039710/domains/cavidan.info/public_html/coffee/resources/views/back/pages/simple/edit.blade.php ENDPATH**/ ?>