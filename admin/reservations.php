<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php define( "TITLE", "Reservations | CineMad"); include( 'includes/header.php'); ?>
<style>
    table {
        border-collapse: collapse;
        width: 800px;
    }

    th, td {
        padding: 8px;
        border: 1px solid #ddd;
    }

    tr:nth-child(even){background-color: #f2f2f2 !important;}
</style>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
        <div class="container">

            <table>
                <tr><th>Ordrenummer</th><th>Dato</th><th>Antal</th><th>Tid</th>
                    <th>Name</th><th>Phone</th><th>Bord</th><th>Timestamp</th><th>Delete</th></tr>

<?php
$bestil = "SELECT * FROM bestilling WHERE odate >= NOW()  ORDER BY odate, otid, obord ASC";
$result = mysqli_query($conn, $bestil);

while($row = mysqli_fetch_array($result)) {
    ?>

        <tr><td><?php echo $row['ordernr'] ?></td><td><?php echo $row['odate'] ?></td><td><?php echo $row['oantal'] ?></td><td><?php echo $row['otid'] ?></td>
            <td><?php echo $row['oname'] ?></td><td><?php echo $row['ophone'] ?></td><td><?php echo $row['obord'] ?></td><td><?php echo $row['otimestamp'] ?></td>


<td>
<!-- DELETE -->
<form id="delete" method="post" action="deletereservation.php">
    <input type="hidden" name="did" value="<?php print $row['ordernr']; ?>"/>
    <input type="submit" value="x" onclick="return confirm('Are you sure?')" class="delete"/>

</form><br></td></tr>

<?php }
?></table></div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>
