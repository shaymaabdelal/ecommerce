<?php
    $route = Route::current()->getName();
?>

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo e(asset('frontend/assets/images/AAA.jpg')); ?>" alt="" width="50" height="50">
                        <h3><b>AAA</b> STORE</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="<?php echo e(($route == 'cms.dashbord')?'active':''); ?>">
                <a href="<?php echo e(route('cms.dashbord')); ?>">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <?php
            $brand = (auth()->guard('admin')->user()->brand == 1);
            $category = (auth()->guard('admin')->user()->category == 1);
            $product = (auth()->guard('admin')->user()->product == 1);
            $slider = (auth()->guard('admin')->user()->slider == 1);
            $coupons = (auth()->guard('admin')->user()->coupons == 1);
            $shipping = (auth()->guard('admin')->user()->shipping == 1);
            $blog = (auth()->guard('admin')->user()->blog == 1);
            $setting = (auth()->guard('admin')->user()->setting == 1);
            $returnorder = (auth()->guard('admin')->user()->returnorder == 1);
            $review = (auth()->guard('admin')->user()->review == 1);
            $orders = (auth()->guard('admin')->user()->orders == 1);
            $stock = (auth()->guard('admin')->user()->stock == 1);
            $reports = (auth()->guard('admin')->user()->reports == 1);
            $alluser = (auth()->guard('admin')->user()->alluser == 1);
            $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);
            ?>
            
            
            <?php if($brand == true): ?>
            <li class="treeview <?php echo e(($route == 'brands.index')?'active':''); ?>">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Brands</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'brands.index')?'active':''); ?>"><a href="<?php echo e(route('brands.index')); ?>"><i class="ti-more"></i>Index</a></li>
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($category == true): ?>
            <li class="treeview <?php echo e(($route == 'categories.index')?'active':''); ?>">
                <a href="#">
                    <i data-feather="mail"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'categories.index')?'active':''); ?>"><a href="<?php echo e(route('categories.index')); ?>"><i class="ti-more"></i>Index Category</a></li>
                    <li class="<?php echo e(($route == 'subCategories.index')?'active':''); ?>"><a href="<?php echo e(route('subCategories.index')); ?>"><i
                                class="ti-more"></i>Index Sub Category</a></li>
                    <li class="<?php echo e(($route == 'subSubCategories.index')?'active':''); ?>"><a href="<?php echo e(route('subSubCategories.index')); ?>"><i
                                class="ti-more"></i>Index Sub->Sub Category</a></li>
                </ul>
            </li>

            <?php else: ?>
            <?php endif; ?>
            <?php if($product == true): ?>
            <li class="treeview <?php echo e(($route == 'products.create')?'active':''); ?>">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>products</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'products.create')?'active':''); ?>"><a href="<?php echo e(route('products.create')); ?>"><i class="ti-more"></i>Create Product</a></li>
                    <li class="<?php echo e(($route == 'products.index')?'active':''); ?>"><a href="<?php echo e(route('products.index')); ?>"><i class="ti-more"></i>Mange Product</a></li>
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($slider == true): ?>
            <li class="treeview <?php echo e(($route == 'sliders.index')?'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'sliders.index')? 'active':''); ?>"><a href="<?php echo e(route('sliders.index')); ?>"><i
                                class="ti-more"></i>Manage Slider</a></li>
            
            
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($coupons == true): ?>
            <li class="treeview <?php echo e(($route == 'copouns.index')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Coupons</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'copouns.index')? 'active':''); ?>"><a href="<?php echo e(route('copouns.index')); ?>"><i
                                class="ti-more"></i>Manage Coupon</a></ul>
                </li>
                <?php else: ?>
                <?php endif; ?>
                <?php if($shipping == true): ?>

            <li class="treeview <?php echo e(($route == 'shippings.index')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Shipping Area</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'shippings.index')? 'active':''); ?>"><a href="<?php echo e(route('shippings.index')); ?>"><i
                                class="ti-more"></i>Ship Division</a></li>
            
                    <li class="<?php echo e(($route == 'discrits.index')? 'active':''); ?>"><a href="<?php echo e(route('discrits.index')); ?>"><i
                                class="ti-more"></i>Ship District</a></li>
                    <li class="<?php echo e(($route == 'states.index')? 'active':''); ?>"><a href="<?php echo e(route('states.index')); ?>"><i
                                class="ti-more"></i>Ship State</a></li>
                </ul>
            </li>

           
            <?php else: ?>
            <?php endif; ?>

            <li class="header nav-small-cap">User Interface</li>
            <?php if($orders == true): ?>
            <li class="treeview <?php echo e(($route == 'pending-orders')? 'active':''); ?>">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Orders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'pending-orders')? 'active':''); ?>"><a href="<?php echo e(route('pending-orders')); ?>"><i
                                class="ti-more"></i>Pending Orders</a></li>
                    <li class="<?php echo e(($route == 'confirmed-orders')? 'active':''); ?>"><a href="<?php echo e(route('confirmed-orders')); ?>"><i
                                class="ti-more"></i>Confirmed Orders</a></li>
                    
                    <li class="<?php echo e(($route == 'processing-orders')? 'active':''); ?>"><a href="<?php echo e(route('processing-orders')); ?>"><i
                                class="ti-more"></i>Processing Orders</a></li>
                    
                    <li class="<?php echo e(($route == 'picked-orders')? 'active':''); ?>"><a href="<?php echo e(route('picked-orders')); ?>"><i
                                class="ti-more"></i> Picked Orders</a></li>
                    
                    <li class="<?php echo e(($route == 'shipped-orders')? 'active':''); ?>"><a href="<?php echo e(route('shipped-orders')); ?>"><i
                                class="ti-more"></i> Shipped Orders</a></li>
                    
                    <li class="<?php echo e(($route == 'delivered-orders')? 'active':''); ?>"><a href="<?php echo e(route('delivered-orders')); ?>"><i
                                class="ti-more"></i> Delivered Orders</a></li>
                    
                    <li class="<?php echo e(($route == 'cancel-orders')? 'active':''); ?>"><a href="<?php echo e(route('cancel-orders')); ?>"><i
                                class="ti-more"></i> Cancel Orders</a></li>
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($alluser == true): ?>
            <li class="treeview <?php echo e(($route == 'all-users')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>All Users </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'all-users')? 'active':''); ?>"><a href="<?php echo e(route('all-users')); ?>"><i
                                class="ti-more"></i>All Users</a></li>
            
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($blog == true): ?>
            <li class="treeview <?php echo e(($route == 'blog_categories.index')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Manage Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'blog_categories.index')? 'active':''); ?>"><a
                            href="<?php echo e(route('blog_categories.index')); ?>"><i class="ti-more"></i>Blog Category</a></li>
            
                        <li class="<?php echo e(($route == 'blog_posts.index')? 'active':''); ?>"><a href="<?php echo e(route('blog_posts.index')); ?>"><i class="ti-more"></i>List
                                Blog Post</a></li>
                        
                        <li class="<?php echo e(($route == 'blog_posts.create')? 'active':''); ?>"><a href="<?php echo e(route('blog_posts.create')); ?>"><i class="ti-more"></i>Add Blog
                                Post</a></li>
            
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($setting == true): ?>
            <li class="treeview <?php echo e(($route == 'site.setting')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Manage Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'site.setting')? 'active':''); ?>"><a href="<?php echo e(route('site.setting')); ?>"><i
                                class="ti-more"></i>Site Setting</a></li>
                    <li class="<?php echo e(($route == 'seo.setting')? 'active':''); ?>"><a href="<?php echo e(route('seo.setting')); ?>"><i class="ti-more"></i>Seo
                            Setting</a></li>
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($returnorder == true): ?>
            <li class="treeview <?php echo e(($route == 'return.request')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Return Order</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'return.request')? 'active':''); ?>"><a href="<?php echo e(route('return.request')); ?>"><i
                                class="ti-more"></i>Return Request</a></li>
            
                    <li class="<?php echo e(($route == 'all.request')? 'active':''); ?>"><a href="<?php echo e(route('all.request')); ?>"><i
                                class="ti-more"></i>All Request</a></li>
            
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($review == true): ?>
            <li class="treeview <?php echo e(($route == 'pending.review')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Manage Review</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'pending.review')? 'active':''); ?>"><a href="<?php echo e(route('pending.review')); ?>"><i
                                class="ti-more"></i>Pending Review</a></li>
            
                    <li class="<?php echo e(($route == 'publish.review')? 'active':''); ?>"><a href="<?php echo e(route('publish.review')); ?>"><i
                                class="ti-more"></i>Publish Review</a></li>
            
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($stock == true): ?>
            <li class="treeview <?php echo e(($route == 'product.stock')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Manage Stock </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'product.stock')? 'active':''); ?>"><a href="<?php echo e(route('product.stock')); ?>"><i
                                class="ti-more"></i>Product Stock</a></li>
            
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($adminuserrole == true): ?>
            <li class="treeview <?php echo e(($route == 'all.admin.user')? 'active':''); ?>  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Admin User Role </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'all.admin.user')? 'active':''); ?>"><a href="<?php echo e(route('all.admin.user')); ?>"><i
                                class="ti-more"></i>All Admin User </a></li>
            
            
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <?php if($reports == true): ?>
            <li class="treeview <?php echo e(($route == 'all-reports')? 'active':''); ?>">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>All Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo e(($route == 'all-reports')? 'active':''); ?>"><a href="<?php echo e(route('all-reports')); ?>"><i class="ti-more"></i>All
                            Reports</a></li>
                    
                    
                    </ul>
                    </li>
                </ul>
            </li>
           <?php else: ?>
            <?php endif; ?>
            

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="ti-lock"></i></a>
    </div>
</aside><?php /**PATH C:\xampp\htdocs\ecommerce\ecommerce\resources\views/cms/body/sidebar.blade.php ENDPATH**/ ?>