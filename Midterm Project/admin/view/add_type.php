<h2 class="text-primary">Add Vehicle Type</h2>
<form action="." method="POST" class="add_form">
    <div class="container">
        <input type="hidden" name="action" value="add_type">
        <div>
            <label for="type_name" class="form_label px-0">Type name: </label>
            <input class="form_field" type="text" name="type_name" id="type_name" maxlength="100" autocomplete="off" aria-required="true" required>
        </div>
        <div class="form_group my-2 row">
            <div></div>
            <button class="btn btn-primary">Add type</button>
        </div>
    </div>
</form>