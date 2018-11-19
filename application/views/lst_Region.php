<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
</head>
<body>
    <?php
    foreach($lesRegions as $laRegion)
    {
        echo '<p>'.$laRegion->nomRegion.'</p>';
    }
    ?>
</body>
</html>