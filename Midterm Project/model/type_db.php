<?php  
    function get_types(){
        global $db;
        $query = 'SELECT * FROM types
                       ORDER BY type_id';
        $statement = $db->prepare($query);
        $statement->execute();
        $types = $statement->fetchAll();
        $statement->closeCursor();
        return $types;
    }
    function add_type($type){
        global $db;
        $query = 'INSERT INTO types
                 (type)
              VALUES
                 (:type)';
        $statement = $db->prepare($query);
        $statement->bindValue(':type', $type);
        $statement->execute();
        $statement->closeCursor();
    }
    function delete_type($type_id){
        global $db;
        $query = 'DELETE FROM types
              WHERE type_id = :type_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $success = $statement->execute();
        $statement->closeCursor();
    }
?>