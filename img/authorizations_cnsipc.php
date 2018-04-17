<?php
include_once 'common.php';
include_once 'pg_top.php';
include_once("carousel.php");
?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-3 col-md-3 hidden-xs">
          <h2><?php echo ' &nbsp; '; ?></h2>
          <ul class="nav nav-pills nav-stacked" role="menu">
            <?php include("pg_menu_certificates.php"); ?>
          </ul>
        </div>
        <div class="col-lg-9 col-md-9">
          <h2 class="page-header"><?php echo $lang['SM_AUTHORIZATION']; ?> <small><?php echo $lang['SM_AUTH2']; ?></small></h2>
          <?php echo $lang['CONTENT_AUTHORIZATION_WELDING']; ?>
        </div>
      </div>
<?php include_once('pg_footer.php'); ?>