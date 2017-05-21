<?php
//Include database configuration file
include('core/dbConfig.php');

if(isset($_POST["bmodel_id"]) && !empty($_POST["bmodel_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM output WHERE bmodel_id = ".$_POST['bmodel_id']." AND status = 1 ORDER BY output_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select output Pin</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['output_pin'].'">'.$row['output_pin'].'</option>';
        }
    }else{
        echo '<option value="">Pin not available</option>';
    }
}
?>