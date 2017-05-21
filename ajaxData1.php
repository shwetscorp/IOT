<?php
include('core/dbConfig.php');

if(isset($_POST["board_id"]) && !empty($_POST["board_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM sensors WHERE status = 1 ORDER BY sensor_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Sensor</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sensor_id'].'">'.$row['sensor_name'].'</option>';
        }
    }else{
        echo '<option value="">Sensor not available</option>';
    }
}
if(isset($_POST["sensor_id"]) && !empty($_POST["sensor_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM smodels WHERE sensor_id = ".$_POST['sensor_id']." AND status = 1 ORDER BY smodel_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Model</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['smodel_name'].'">'.$row['smodel_name'].'</option>';
        }
    }else{
        echo '<option value="">Model not available</option>';
    }
}
?>