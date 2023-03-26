<?php include 'header.php';?>

    <main>
        <h2>Error</h2>
        <p><?php echo $error; ?></p>
        <p><a href=".">Back to Home</a></p>
    </main>

<?php echo '<h2><a href="?action=show_vehicle_list">Vehicles</a></h2>' ?>
<?php include 'footer.php'; ?>