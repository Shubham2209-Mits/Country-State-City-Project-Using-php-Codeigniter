<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css') ?>">
    

    <title>Country_name</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="form-group">
                <label for="">Country:</label>
                <select name="country" id="country" class="form-control">
                <option value="">Select a Country</option>
                    
                    <?php 
                    foreach($countries as $country){
?>
                        <option value="<?php echo $country['country_id']; ?>"><?php echo $country['country_name']; ?></option>
<?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">State:</label>
                <div id="statebox">
                <select name="state" id="state" class="form-control">
                    <option value="">Select a State</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label for="">City:</label>
                <div id="citybox">
                <select name="city" id="city" class="form-control">
                    <option value="">Select a City</option>
                </select>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<script>
    $("document").ready(function() {
        $('#country').change(function() {
           
            var country_id = $(this).val(); 
            $.ajax({
                url: '<?php echo base_url('Countryc/getstates') ?>',
                type: 'POST',
                data: {
                    country_id: country_id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);

                    if (response['states']) {
                        $("#statebox").html(response['states']);
                    }
                }
            });
            if(country_id == ""){
            $("#citybox").html(" <select name=\"city\" id=\"city\" class=\"form-control\">\
                    <option value=\"\">Select a City</option>\
                </select>");
           }

        });


        $(document).on("change", "#state", function() {
            var state_id = $(this).val();

            $.ajax({
                url: '<?php echo base_url('Countryc/getcities') ?>',
                type: 'POST',
                data: {
                    state_id: state_id
                },
                dataType: 'json',
                success: function(response) {
                    if (response['cities']) {
                        $("#citybox").html(response['cities']);
                    }
                }
            });

        });
        
    });

</script>
</html>