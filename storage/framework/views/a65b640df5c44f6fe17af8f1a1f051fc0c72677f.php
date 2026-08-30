<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('backend/images/favicon.ico')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/toastr.css')); ?>">



    <title>Ecommerce Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/vendors_css.css')); ?>">

    <!-- Style-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/skin_color.css')); ?>">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        <?php echo $__env->make('cms.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Left side column. contains the logo and sidebar -->
      <?php echo $__env->make('cms.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.content-wrapper -->
       <?php echo $__env->make('cms.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- Vendor JS -->
    <script src="<?php echo e(asset('backend/js/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('../assets/icons/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')); ?>"></script>
    <script src="<?php echo e(asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')); ?>"></script>
    <script src="<?php echo e(asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')); ?>"></script>

    <!-- Sunny Admin App -->
    <script src="<?php echo e(asset('backend/js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/pages/dashboard.js')); ?>"></script>
    
    <script src="<?php echo e(asset('frontend/assets/js/toastr.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/../assets/vendor_components/datatable/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/pages/data-table.js')); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- /// Tgas Input Script -->
    <script src="<?php echo e(asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')); ?>"></script>
    
    <!-- // CK EDITOR  -->
    <script src="<?php echo e(asset('../assets/vendor_components/ckeditor/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/pages/editor.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/axios.js')); ?>"></script>

    <script>
        <?php if(Session::has('message')): ?>
         var type = "<?php echo e(Session::get('alert-type','success')); ?>"
         switch(type){
            // case 'info':
            // toastr.info(" <?php echo e(Session::get('message')); ?> ");
            // break;
            case 'success':
            toastr.success(" <?php echo e(Session::get('message')); ?> ");
            break;
            case 'warning':
            toastr.warning(" <?php echo e(Session::get('message')); ?> ");
            break;
            case 'error':
            toastr.error(" <?php echo e(Session::get('message')); ?> ");
            break; 
         }
         <?php endif; ?> 

    </script>
    <script src="<?php echo e(asset('backend/js/code.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\ecommerce\ecommerce\resources\views/cms/parant.blade.php ENDPATH**/ ?>