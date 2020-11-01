<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Trial</title>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="./dataTables.checkboxes.css">
  <script src="./dataTables.checkboxes.min.js"></script>




</head>
<body>
    <div class="ui grid">
        <div class="eleven wide computer nine wide tablet six wide mobile column">
            <div class="ui segment" style="margin: 100px;">
<?php include_once "./checkbox-form.php" ?>
            </div>
        </div>
    </div>

<script>
<?php include_once "./checkbox.js" ?>


</script>
</body>
</html>