<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
             
                          
              <li>

                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                        <i class="material-icons">exit_to_app</i>

                        Logout

                    </a>

                    <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>" style="display: none">

                        <?php echo csrf_field(); ?>

                    </form>

                </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php /**PATH C:\xampp\htdocs\OnlineCorner\resources\views/layouts/partial/topbar.blade.php ENDPATH**/ ?>