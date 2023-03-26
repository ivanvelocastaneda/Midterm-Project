<div class="links mt-4">
    <?php if ($action != 'vehicles_list') { ?>
        <p><a href=".">View Full Vehicle List</a></p>
    <?php } ?>

    <?php if ($action != 'add_vehicle') { ?>
        <p><a href="?action=add_vehicle">Click here</a> to add a vehicle</p>
    <?php } ?>

    <?php if ($action != 'makes_list') { ?>
        <p><a href="?action=makes_list">View/Edit Vehicle Makes</a></p>
    <?php } ?>

    <?php if ($action != 'types_list') { ?>
        <p><a href="?action=types_list">View/Edit Vehicle Types</a></p>
    <?php } ?>

    <?php if ($action != 'classes_list') { ?>
        <p><a href="?action=classes_list">View/Edit Vehicle Classes</a></p>
    <?php } ?>
 </div>
</main>
<footer class="border-top border-1 border-secondary">
    <p class="text-end mt-2 copyright">&copy; <?= date("Y"); ?> Zippy Used Autos</p>
</footer>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>