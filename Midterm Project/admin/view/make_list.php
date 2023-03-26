<?php include 'header.php'?>
    <h2>Vehicle Make List</h2>
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
                        <?php foreach ($makes as $make) : ?>
                        <tr class="table-active">
                        <th scope="row"><?php echo $make['make'];?></th>
                        
                        
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action" value="delete_make">
                                <input type="hidden" name="make_id" value="<?php echo $make['make_id'] ?>">
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
            <input type="hidden" name="action" value="add_make">
                <label>Name</label>
                <input type="text" name="make" required>
                <label>&nbsp;</label>
                <input type="submit" value="Add Make">
            </form>
        </div>
       

<?php include 'footer.php'?>