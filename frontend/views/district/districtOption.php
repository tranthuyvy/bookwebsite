<?php
    foreach ($data as $key => $value){
        echo '<option value="'.$value["district_id"].'">'.$value["district_name"].'</option>';
    }
?>