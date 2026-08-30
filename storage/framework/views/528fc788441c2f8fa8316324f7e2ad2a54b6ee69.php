

<?php $__env->startSection('content'); ?>
    <div class="container-full">
        <div class="content">
            <div class="row">
                
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background: url('../') center center;">
                    <h3 class="widget-user-username"><?php echo e(Auth::user()->name); ?></h3>

                    <a href="<?php echo e(route('cms.edit_profile')); ?>" class="btn btn-rounded btn-success mb-5" style="float: right">Edit Profile</a>

                    <h6 class="widget-user-desc"><?php echo e(Auth::user()->email); ?></h6>

                    
                </div>
                <div class="widget-user-image">
                    <img class="rounded-circle" src="<?php echo e(!empty(Auth::user()->image)?asset('upload/admin_image/'.Auth::user()->image):asset('upload/no_image.jpg')); ?>" alt="User Avatar">
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">12K</h5>
                                <span class="description-text">FOLLOWERS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 br-1 bl-1">
                            <div class="description-block">
                                <h5 class="description-header">550</h5>
                                <span class="description-text">FOLLOWERS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">158</h5>
                                <span class="description-text">TWEETS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            
            </div>    
        
        </div>    
    
    </div>   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.parant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\ecommerce\resources\views/cms/profile/index.blade.php ENDPATH**/ ?>