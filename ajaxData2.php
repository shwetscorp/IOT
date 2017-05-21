<?php
//Include database configuration file
include('core/dbConfig.php');

if(isset($_POST["board_id"]) && !empty($_POST["board_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM input WHERE board_id = ".$_POST['board_id']." AND status = 1 ORDER BY input_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Input Pin</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['input_pin'].'">'.$row['input_pin'].'</option>';
        }
    }else{
        echo '<option value="">Pin not available</option>';
    }
}
?>