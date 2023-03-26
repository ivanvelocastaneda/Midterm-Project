<?php


switch ($action) {
    case 'add_type':
        # code...
        add_type($type);
        header('Location: .?action=edit_types');
        break;
    case 'delete_type':
        delete_type($type_id);
        header('Location: .?action=edit_types');
        
    case 'edit_types':
        include('view/type_list.php');
        
    default:
        # code...
        break;
}

?>