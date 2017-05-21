<?php
//Include database configuration file
include('core/dbConfig.php');

if(isset($_POST["bmodel_id"]) && !empty($_POST["bmodel_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM input WHERE bmodel_id = ".$_POST['bmodel_id']." AND status = 1 ORDER BY input_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['input_pin'].'">'.$row['input_pin'].'</option>';
        }
    }else{
        echo '<option value="">Pin not available</option>';
    }
}
?>