<?php
$lifetime= 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime,'/');
session_start();

require('model/database.php');
require('model/vehicles_db.php');
require('model/make_db.php');
require('model/class_db.php');
require('model/type_db.php');

$firstname=filter_input(INPUT_POST, 'firstname',FILTER_SANITIZE_STRING);
if(!$firstname){
    //echo 'in makes get';
    //$firstname = filter_input(INPUT_GET, 'firstname',FILTER_SANITIZE_STRING);
    $SESSION['userid'] = $firstname;
}

$make_id=filter_input(INPUT_POST, 'make_id',FILTER_VALIDATE_INT);
if(!$make_id){
    //echo 'in makes get';
    $make_id = filter_input(INPUT_GET, 'make_id',FILTER_VALIDATE_INT);
}
$type_id=filter_input(INPUT_POST, 'type_id',FILTER_VALIDATE_INT);
if(!$type_id){
    //echo 'in type get';
    $type_id = filter_input(INPUT_GET, 'type_id',FILTER_VALIDATE_INT);
}
$class_id=filter_input(INPUT_POST, 'class_id',FILTER_VALIDATE_INT);
if(!$class_id){
    //echo 'in class get';
    $class_id = filter_input(INPUT_GET, 'class_id',FILTER_VALIDATE_INT);
    //echo $class_id;
}
$sort= filter_input(INPUT_POST, 'sort',FILTER_SANITIZE_STRING);
if(!$sort){
    $sort=filter_input(INPUT_GET, 'sort',FILTER_SANITIZE_STRING);
}


//show all items
$action = filter_input(INPUT_POST, 'action',FILTER_SANITIZE_STRING);
if(!$action){
    $action=filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
    if(!$action){
        $action='show_vehicle_list';
    }
}


if($action == 'show_vehicle_list'){
    //echo 'begin';
    //echo 'after get vehicles';
    if($type_id){
      
        $vehicles=get_vehicles_by_type($type_id,$sort);
       
    }
    else if($make_id){
        //echo 'entered make index';
        
        $vehicles=get_vehicles_by_make($make_id,$sort); 
        
    }
    else if($class_id){
        //echo 'in class index';
        $vehicles=get_vehicles_by_class($class_id,$sort); 
    }
    else{
       
        $vehicles=get_vehicles($sort); 
    }

    
    $types=get_types();
    $makes= get_makes();
    $classes=get_classes();
    include('view/vehicle_list.php');
}

?>