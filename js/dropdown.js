$(document).ready(function(){
    $('#board').on('change',function(){
        var boardID = $(this).val();
        if(boardID){
            $.ajax({

                type:'POST',
                url:'ajaxData.php',
                data:'board_id='+boardID,
                success:function(html){
                    $('#bmodel').html(html);
                }
            }); 
        }else{
            $('#bmodel').html('<option value="">Select board first</option>'); 
        }
    });
});
$(document).ready(function(){
    $('#board').on('change',function(){
        var boardID = $(this).val();
        if(boardID){
            $.ajax({

                type:'POST',
                url:'ajaxData1.php',
                data:'board_id='+boardID,
                success:function(html){
                    $('#sensor').html(html);
                    $('#smodel').html('<option value="">Select Sensor first</option>'); 
                }
            }); 
        }else{
            $('#sensor').html('<option value="">Select board first</option>');
            $('#smodel').html('<option value="">Select Sensor first</option>');  
        }
    });
});
$(document).ready(function(){
    $('#bmodel').on('change',function(){
        var bmodelID = $(this).val();
        if(bmodelID){
            $.ajax({

                type:'POST',
                url:'ajaxData2.php',
                data:'bmodel_id='+bmodelID,
                success:function(html){
                    $('#input_pins').html(html);
                }
            }); 
        }else{
            $('#input_pins').html('<option value="">Select board model first</option>');  
        }
    });
});
$(document).ready(function(){
    $('#bmodel').on('change',function(){
        var bmodelID = $(this).val();
        if(bmodelID){
            $.ajax({

                type:'POST',
                url:'ajaxData4.php',
                data:'bmodel_id='+bmodelID,
                success:function(html){
                     $('#input_pins1').html(html);
                      $('#input_pins2').html(html);
                }
            }); 
        }else{
            $('#input_pins1').html('<option value="">Select board model first</option>');  
            $('#input_pins2').html('<option value="">Select board model first</option>'); 
        }
    });
});
$(document).ready(function(){
    $('#bmodel').on('change',function(){
        var bmodelID = $(this).val();
        if(bmodelID){
            $.ajax({

                type:'POST',
                url:'ajaxData3.php',
                data:'bmodel_id='+bmodelID,
                success:function(html){
                    $('#output_pins').html(html);
                }
            }); 
        }else{
            $('#output_pins').html('<option value="">Select board model first</option>');  
        }
    });
});
$(document).ready(function(){
    $('#bmodel').on('change',function(){
        var bmodelID = $(this).val();
        if(bmodelID){
            $.ajax({

                type:'POST',
                url:'ajaxData4.php',
                data:'bmodel_id='+bmodelID,
                success:function(html){
                    $('#output_pins1').html(html);
                    $('#output_pins2').html(html);
                }
            }); 
        }else{
            $('#output_pins1').html('<option value="">Select board model first</option>');
            $('#output_pins2').html('<option value="">Select board model first</option>');   
        }
    });
});
 $(document).ready(function(){
    $('#sensor').on('change',function(){
        var sensorID = $(this).val();
        if(sensorID){
            $.ajax({

                type:'POST',
                url:'ajaxData1.php',
                data:'sensor_id='+sensorID,
                success:function(html){
                    $('#smodel').html(html);

                }
            }); 
        }else{
            $('#smodel').html('<option value="">Select sensor first</option>'); 
        }
    });   
    
});