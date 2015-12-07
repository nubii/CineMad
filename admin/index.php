<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Admin Panel | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
        <div class="container">
            <h2><em>Welcome back</em>To the admin panel <?php echo $_SESSION['user_name'];?></h2>
                <p style="font-size: 2em;">This is the place for the master mind, not just any master mind but <i style="font-style: italic;">your</i> mastermind.</p>
    </div>

        </div>

    </section>
</main>
<?php include( 'includes/footer.php');
?>


<style>
    .container .grid_4 {
  width: 370px;
  margin-top: 30px;
}
</style>