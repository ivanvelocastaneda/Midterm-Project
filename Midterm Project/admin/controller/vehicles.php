<?php 

switch ($action) {
    case 'show_add-vehicle':
        # code...
        add_vehicle($year,$price,$model,$type_id,$class_id,$make_id);
        header('Location: .?action=add_vehicle');
        break;
    case 'delete_vehicle':
        delete_vehicle($vehicle_id);
        header('Location: .?action=show_vehicle_list');
        
    case 'add_vehicle':
        include('view/add_vehicle.php');
        
    default:
        # code...
        break;
}

?>