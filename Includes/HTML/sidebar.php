<div class="container">
    <!-- Start Nav bar -->
    <aside>
        <!-- Start For Logo -->
        <div class="top">
            <div class="logo">
                <img src="./Assets/Images/logo.png" alt="JOST LOGO">
                <h2>WRAP<span class="danger">IT</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>
        </div>
        <!-- End For Logo -->

        <!-- Start Of Side Bar -->
        <div class="sidebar">
            <a href="#" class="nav-link tablinks" onclick="openCity(event, 'Dashboard')">
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashboard</h3>
            </a>
            <a href="#" class="nav-link tablinks" onclick="openCity(event, 'Customer')">
                <span class="material-icons-sharp">person_outline</span>
                <h3>Customers</h3>
            </a>
            
            <a href="#" class="nav-link tablinks">
                <span class="material-icons-sharp">receipt_long</span>
                <h3>Orders</h3>
            </a>
            <a href="#" class="nav-link tablinks">
                <span class="material-icons-sharp">insights</span>
                <h3>Analytics</h3>
            </a>
            <a href="#" class="nav-link">
                <span class="material-icons-sharp">notifications</span>
                <h3>Notification</h3>
                <span class="message-count">20</span>
            </a>
            <a href="#" class="nav-link">
                <span class="material-icons-sharp">inventory</span>
                <h3>Products</h3>
            </a>
            <a href="#" class="nav-link">
                <span class="material-icons-sharp">report_gmailerrorred</span>
                <h3>Reports</h3>
            </a>
            <a href="#" class="nav-link">
                <span class="material-icons-sharp">manage_accounts</span>
                <h3>Profile</h3>
            </a>
            <!-- Log Out Button -->
            <a href="#" class="nav-link">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <!-- End Of Side Bar -->

    </aside>
    <!-- End Nav bar -->

    <!-- START OF MAIN  -->
    <?php 
        // Get the side.html file to show
        include 'maincontent.php';
    ?>
    <!-- END OF MAIN -->

    <!-- START OF RIGHT  -->
    <?php 
        // Get the side.html file to show
        include 'rightbar.html';
    ?>
    <!-- END OF RIGHT -->
     
</div>