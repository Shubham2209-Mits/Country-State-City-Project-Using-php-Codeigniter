<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
    <title>Dropdown</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h3 class="bg-dark text-white">Dropdown / Country > State > City</h3>
                </div>
                <div class="form-group ">
                <label for="">Country:</label>
                <select name="counrty" id="country" class="form-control">
                    <option value="counrty">Select a Country</option>
                </select>
            </div>

            <div class="form-group ">
                <label for="">State:</label>
                <select name="State" id="State" class="form-control">
                    <option value="counrty">Select a State</option>
                </select>
            </div>

            <div class="form-group ">
                <label for="">City:</label>
                <select name="City" id="City" class="form-control">
                    <option value="counrty">Select a City</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>