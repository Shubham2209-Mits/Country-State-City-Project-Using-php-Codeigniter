<select name="city" id="city" class="form-control">
                <option value="">Select a City</option>
                    
                    <?php 
                    if(!empty($cities)){
                    foreach($cities as $city){
?>
                  <option value="<?php echo $city['city_id']; ?>"><?php echo $city['city_name']; ?></option>
<?php
                    }
                    }
                    ?>
                </select>