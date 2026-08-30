<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="icon fa fa-user"></i>
                                <?php if(session()->get('language') == 'arabic'): ?> حسابي <?php else: ?> My Account <?php endif; ?>
                            </a></li>
                        <li><a href="<?php echo e(route('wishlist')); ?>"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="<?php echo e(route('mycart')); ?>"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="<?php echo e(route('checkout')); ?>"><i class="icon fa fa-check"></i>Checkout</a></li>
                        <li><a href="" type="button" data-toggle="modal" data-target="#ordertraking"><i class="icon fa fa-check"></i>Order
                                Traking</a></li>
                        <?php if(auth()->guard()->check()): ?>
                        <li><a href="<?php echo e(route('profile')); ?>"><i class="icon fa fa-lock"></i>User Profile</a></li>
                            <?php else: ?>
                            <li><a href="<?php echo e(route('web.login','web')); ?>"><i class="icon fa fa-lock"></i>Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                       <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                            data-toggle="dropdown"><span class="value">
                                <?php if(session()->get('language') == 'arabic'): ?> اللغة <?php else: ?> Language <?php endif; ?>
                            </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                                <?php if(session()->get('language') == 'arabic'): ?>
                                <li><a href="<?php echo e(route('english.language')); ?>">English</a></li>
                                <?php else: ?>
                                <li><a href="<?php echo e(route('arabic.language')); ?>">Arabic</a></li>
                                <?php endif; ?>
                        </ul>
                        </li>
                    </ul>
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <?php
                    $setting = App\Models\SiteSetting::find(1);
                    ?>
                    <div class="logo"> <a href="<?php echo e(route('inn')); ?>"> <img src="<?php echo e(asset($setting->logo)); ?>" alt="logo"> </a> </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form method="post" action="<?php echo e(route('product.search')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="category.html">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" placeholder="Search here..." />
                                <button class="search-button" type="submit"></button> 
                                <div id="searchProducts"></div>
                            </div>
                        </form>
                    </div>
                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                            data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                               <div class="basket-item-count"><span class="count" id="cartQty"> </span></div>
                                <div class="total-price-basket"> <span class="lbl">cart -</span>
                                    <span class="total-price"> <span class="sign">$</span>
                                        <span class="value" id="cartSubTotal"> </span> </span>
                                </div>
                             </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                               <div id="miniCart">

                               </div>
                                <!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">Sub Total :</span>
                                        <span class='price' id="cartSubTotal"> </span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo e(route('checkout')); ?>"
                                        class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div>
                                <!-- /.cart-total-->

                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw"> <a href="<?php echo e(route('inn')); ?>" data-hover="dropdown" class="dropdown-toggle"
                                        data-toggle="dropdown"><?php if(session()->get('language') == 'arabic'): ?> الرئيسية <?php else: ?> Home <?php endif; ?></a> </li>
                                
                                <!--   // Get Category Table Data -->
                                <?php
                                $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                                ?>
                                
                                
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle"
                                        data-toggle="dropdown"> <?php if(session()->get('language') == 'arabic'): ?> <?php echo e($category->category_name_ar); ?> <?php else: ?> <?php echo e($category->category_name_en); ?> <?php endif; ?> </a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">
                                
                                                    <!--   // Get SubCategory Table Data -->
                                                    <?php
                                                    $subcategories =
                                                    App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                                    ?>
                                
                                                    <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                
                                                        <a href="<?php echo e(url('shop/subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en )); ?>">
                                                        <h2 class="title"><?php if(session()->get('language') == 'arabic'): ?> <?php echo e($subcategory->subcategory_name_ar); ?> <?php else: ?> <?php echo e($subcategory->subcategory_name_en); ?>

                                                        <?php endif; ?></h2></a>
                                
                                
                                                        <!--   // Get SubSubCategory Table Data -->
                                                        <?php
                                                        $subsubcategories =
                                                        App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                                                        ?>
                                
                                                        <?php $__currentLoopData = $subsubcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <ul class="links">
                                                            <li><a href="<?php echo e(url('shop/subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en )); ?>"><?php if(session()->get('language') == 'arabic'): ?> <?php echo e($subsubcategory->subsubcategory_name_ar); ?> <?php else: ?> <?php echo e($subsubcategory->subsubcategory_name_en); ?>

                                                            <?php endif; ?></a></li>
                                
                                                        </ul>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <!-- // End SubSubCategory Foreach -->
                                
                                                    </div>
                                                    <!-- /.col -->
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <!-- // End SubCategory Foreach -->
                                
                                
                                                    
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- // End Category Foreach -->
                                <li> <a href="<?php echo e(route('shop.page')); ?>">Shop</a> </li>

                                                   
                                <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
                                <li class="dropdown  navbar-right special-menu"> <a href="<?php echo e(route('home.blog')); ?>">Blog</a> </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->
<!-- Order Traking Modal -->
<div class="modal fade" id="ordertraking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Track Your Order </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo e(route('order.tracking')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <label>Invoice Code</label>
                        <input type="text" name="code" required="" class="form-control"
                            placeholder="Your Order Invoice Number">
                    </div>

                    <button class="btn btn-danger" type="submit" style="margin-left: 17px;"> Track Now </button>

                </form>


            </div>

        </div>
    </div>
</div>
</header>


<style>
    .search-area {
        position: relative;
    }

    #searchProducts {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>


<script>
    function search_result_hide(){
    $("#searchProducts").slideUp();
  }
   function search_result_show(){
      $("#searchProducts").slideDown();
  }

</script><?php /**PATH C:\xampp\htdocs\ecommerce\ecommerce\resources\views/frontend/body/header.blade.php ENDPATH**/ ?>