<?php
//Include database configuration file
include('core/dbConfig.php');

if(isset($_POST["board_id"]) && !empty($_POST["board_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM bmodels WHERE board_id = ".$_POST['board_id']." AND status = 1 ORDER BY bmodel_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Model</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['bmodel_id'].'">'.$row['bmodel_name'].'</option>';
        }
    }else{
        echo '<option value="">Model not available</option>';
    }
}
?>