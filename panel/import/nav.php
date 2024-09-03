<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aerologix</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4> <?php echo $user_name ?> </h4>
                        <small>Super Admin</small>                        
                    </div>
                </div>
            </li>
           <li class='<?php if(basename($_SERVER['PHP_SELF']) == "dashboard.php") { echo "active"; } ?>'><a href="dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
             <li class='<?php if(basename($_SERVER['PHP_SELF']) == "enquries.php") { echo "active"; } ?>'><a href="enquries"><i class="zmdi zmdi-account"></i><span>Received Enquries</span></a></li>      
           <li class='<?php if(basename($_SERVER['PHP_SELF']) == "quotes.php") { echo "active"; } ?>'><a href="quotes"><i class="zmdi zmdi-account"></i><span>Received Quotes</span></a></li>
              <li class='<?php if(basename($_SERVER['PHP_SELF']) == "tracking-ocean.php") { echo "active"; } ?>'><a href="tracking-ocean"><i class="zmdi zmdi-account"></i><span>Tracking Sea-Freight</span></a></li>
                <li class='<?php if(basename($_SERVER['PHP_SELF']) == "tracking-air.php") { echo "active"; } ?>'><a href="tracking-air"><i class="zmdi zmdi-account"></i><span>Tracking Air Freight</span></a></li>
            <li class='<?php if(basename($_SERVER['PHP_SELF']) == "logout.php") { echo "active"; } ?>'><a href="logout"><i class="zmdi zmdi-account"></i><span>Log out</span></a></li>
           
      
           
            
         
           
  
        </ul>
    </div>
</aside>