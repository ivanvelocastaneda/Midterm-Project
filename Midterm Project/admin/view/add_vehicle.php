<?php include 'header.php'?>
    <h2>Add Vehicles</h2>
    <!-- nav area -->
   
   
    <div class="drop-down-container">
                <form action="." method="POST" >
                    <input type="hidden" name="action" value="show_add-vehicle">
                        <!-- makes container -->
                    <select name="make_id" class="drop-down-selector text-primary">
                    
                            <!-- <option value="">View All Makes</option> -->
                            <?php foreach ($makes as $make) : ?>
                                <?php if($make_id == $make['make_id']) {?>
                                    <option value="<?= $make['make_id']?>" selected>
                            <?php }else { ?>
                                <option value="<?= $make['make_id']?>">
                            <?php } ?>
                                    <?= $make['make'] ?>
                                </option>
                            <?php endforeach; ?>
                    </select> 
                
                        <!-- Types container -->
                        <select name="type_id" class="drop-down-selector text-primary">
                            <!-- <option value="">View All Types</option> -->
                            <?php foreach ($types as $type) : ?>
                                <?php if($type_id == $type['type_id']) {?>
                                    <option value="<?= $type['type_id']?>" selected>
                            <?php }else { ?>
                                <option value="<?= $type['type_id']?>">
                            <?php } ?>
                                    <?= $type['type'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <!-- Classes container -->
                        <select name="class_id" class="drop-down-selector text-primary">
                            <!-- <option value="">View All Classes</option> -->
                            <?php foreach ($classes as $class) : ?>
                                <?php if($class_id == $class['class_id']) {?>
                                    <option value="<?= $class['class_id']?>" selected>
                            <?php }else { ?>
                                <option value="<?= $class['class_id']?>">
                            <?php } ?>
                                    <?= $class['class'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                <div class="container-fluid">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" name="year"  required>
                        <label for="floatingInput">year</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="model" required>
                        <label >Model</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="price" required>
                        <label >Price</label>
                    </div>
        
                    <label>&nbsp;</label>
                    <input type="submit" value="Add Vehicle">
            
                </div>
                    
            </form>
                     
    </div>
        
        
       

<?php include 'footer.php'?>