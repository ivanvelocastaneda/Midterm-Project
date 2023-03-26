<?php

switch ($action) {
    case 'add_class':
        # code...
        add_class($class);
        header('Location: .?action=edit_classes');
        break;
    case 'delete_class':
        delete_class($class_id);
        header('Location: .?action=edit_classes');
        
    case 'edit_classes':
        include('view/class_list.php');  
          
    default:
        # code...
        break;
}





?>