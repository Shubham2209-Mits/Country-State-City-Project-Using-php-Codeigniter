<select name="state" id="state" class="form-control">
    <option value="">Select a State</option>
    <?php  
if(!empty($states)){
    foreach($states as $state){
        ?>
        <option value="<?php echo $state['state_id'];?>"> <?php echo $state['state_name'];  ?> </option>
        <?php
    }
}

?>
</select>