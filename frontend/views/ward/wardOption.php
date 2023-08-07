<option>--Select options--</option>
<?php
foreach ($data as $key => $value){
    echo '<option value="'.$value["ward_id"].'">'.$value["ward_name"].'</option>';
}
?>