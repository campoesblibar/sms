<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>SRM</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url('lib/frontend/css/bootstrap.css'); ?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('lib/frontend/css/font-awesome.css'); ?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('lib/frontend/css/style2.css'); ?>" rel="stylesheet" />
</head>
<body>
    <!-- HEADER -->
    <?php echo $_header; ?>
    <!-- END HEADER -->

    <!-- CONTENT -->
    <div class="content-wrapper">
        <div class="container">
        <?php echo $_content; ?>
        </div>
    </div>
    <!-- END CONTENT -->
    
    <!-- FOOTER -->
    <?php echo $_footer; ?>
    <!-- END FOOTER -->

    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('lib/frontend/js/jquery-1.11.1.js'); ?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('lib/frontend/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('lib/frontend/js/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('lib/frontend/js/jquery.dataTables.min.js'); ?>"></script>
    <!-- BOOTSTRAP DATATABLES  -->
    <link href="<?php echo base_url('lib/frontend/css/dataTables.bootstrap.css'); ?>" rel="stylesheet" />

     <script type="text/javascript">
        jQuery(document).ready(function(){
            $('#inboxtes').DataTable();
            $('#kecamatan').DataTable();
        });
    </script>
</body>
</html>
