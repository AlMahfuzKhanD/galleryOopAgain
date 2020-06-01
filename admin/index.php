<?php include("includes/header.php"); ?>
<?php if(!$session->isSignedIn()){ redirect("login.php"); } ?>


        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- top nav -->

            <?php include("includes/top_nav.php"); ?>


            <!-- top nav -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <!-- side nav -->

            <?php include("includes/side_nav.php"); ?>


            <!-- side nav -->
            
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            
            <!-- admin-content -->

            <?php include("includes/admin_content.php"); ?>

            <!-- admin-content -->
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>