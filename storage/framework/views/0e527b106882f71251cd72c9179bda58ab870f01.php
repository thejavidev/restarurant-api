<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    <link href="<?php echo e(asset('back/dist/css/tabler.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('back/dist/css/tabler-flags.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('back/dist/css/tabler-payments.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('back/dist/css/tabler-vendors.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('back/dist/css/demo.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('back/dist/css/login_page.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: yellowgreen;
            color: white;
        }

        .select2-results ul li {
            background-color: #1f2936;
            color: #656d77;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="antialiased">
<input type="hidden" value="<?php echo e(env('app_url')); ?>" id="rootUrl">
<?php echo $__env->yieldContent('content'); ?>
<script src="<?php echo e(asset('back/dist/js/tabler.min.js')); ?>"></script>
<script src="<?php echo e(asset('jquery.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var loadFile = function(event) {
        var output = document.querySelector('.outputImg');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    var loadFile2 = function(event) {
        var output = document.querySelector('.outputImg2');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH /home/u719039710/domains/cavidan.info/public_html/coffee/resources/views/back/layout/master.blade.php ENDPATH**/ ?>