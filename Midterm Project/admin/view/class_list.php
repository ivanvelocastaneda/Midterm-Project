<?php include 'header.php'?>
    <h2>Vehicle Class List</h2>
    <!-- nav area -->    
            <!-- Table container -->
        <div class="table-body container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr class="table-active">
                        <th scope="col">Name</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($classes as $class) : ?>
                        <tr class="table-active">
                        <th scope="row"><?php echo $class['class'];?></th>
                        
                        
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action" value="delete_class">
                                <input type="hidden" name="class_id" value="<?php echo $class['class_id'] ?>">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                            
                        </tr> 
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div>    
        </div>
        
        <div class="container-fluid">
            <form action="." method="post">
            <input type="hidden" name="action" value="add_class">
                <label>Name</label>
                <input type="text" name="class" required>
                <label>&nbsp;</label>
                <input type="submit" value="Add Class">
            </form>
        </div>
       

<?php include 'footer.php'?>