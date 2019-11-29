 <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php echo e(Request::is('admin/dashboard*') ? 'active': ''); ?>">
            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?php echo e(Request::is('admin/slider*') ? 'active': ''); ?>">
            <a class="nav-link" href="<?php echo e(route('slider.index')); ?>">
              <i class="material-icons">slideshow</i>
              <p>Sidebar</p>
            </a>
          </li>
          <li class="<?php echo e(Request::is('admin/category*') ? 'active': ''); ?>">
            <a class="nav-link" href="<?php echo e(route('category.index')); ?>">
              <i class="material-icons">content_paste</i>
              <p>Category</p>
            </a>
          </li>

            <li class="<?php echo e(Request::is('admin/item*') ? 'active': ''); ?>">
            <a class="nav-link" href="<?php echo e(route('item.index')); ?>">
              <i class="material-icons">library_books</i>
              <p>Item</p>
            </a>
          </li>
          
          
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Reervation</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Contact</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
   <?php /**PATH C:\laragon\www\OnlineCorner\resources\views/layouts/partial/sidebar.blade.php ENDPATH**/ ?>