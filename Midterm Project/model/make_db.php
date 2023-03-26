<?php  

    function get_makes(){
        global $db;
        $query = 'SELECT * FROM makes
                       ORDER BY make_id';
        $statement = $db->prepare($query);
        $statement->execute();
        $makes = $statement->fetchAll();
        $statement->closeCursor();
        return $makes;
    }
    function add_make($make){
        global $db;
        $query = 'INSERT INTO makes
                 (make)
              VALUES
                 (:make)';
        $statement = $db->prepare($query);
        $statement->bindValue(':make', $make);
        $statement->execute();
        $statement->closeCursor(); 
    }
    function delete_make($make_id){
        global $db;
        $query = 'DELETE FROM makes
              WHERE make_id = :make_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $success = $statement->execute();
        $statement->closeCursor();
    }

?>