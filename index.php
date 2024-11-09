<?php 
    // Start the session to get all needed data from session/user
    session_start();

    // Get the head html file
    include './Includes/HTML/header.html';
?>

<!-- Start of Body Tag -->
<body>

    <?php 
        // Get the side.html file to view
        include './Includes/HTML/sidebar.php';

        // Get the footer.html file to view
        include './Includes/HTML/footer.html'
    ?>

    
</body>
</html>