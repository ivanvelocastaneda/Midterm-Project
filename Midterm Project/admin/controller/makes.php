
<?php


switch ($action) {
    case 'add_make':
        # code...
        add_make($make);
        header('Location: .?action=edit_makes');
        break;
    case 'delete_make':
        delete_make($make_id);
        header('Location: .?action=edit_makes');
        
    case 'edit_makes':
        include('view/make_list.php');   
        
    default:
        # code...
        break;
}



?>




