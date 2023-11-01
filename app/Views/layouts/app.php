<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Dashboard</title>
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/style_cust.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('./assets/CSS/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/CSS/style.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/CSS/style_cust.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>

<?= $this->renderSection('content') ?>

</body>
</html>