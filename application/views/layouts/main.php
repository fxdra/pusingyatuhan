
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title><?= $title; ?></title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="/assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="/assets/css/style-min.css">
        <link rel="stylesheet" href="/assets/css/responsive.css">
    </head>

    <body class="template-index">
        <!--Page Wrapper-->
        <div class="page-wrapper">
            <!--Top Header-->
            <div class="top-header">
            <?php $this->load->view('partials/main/top-header');?>
            </div>
            <!--End Top Header-->

            <!--Header-->
            <?php $this->load->view('partials/main/header');?>
            <!--End Header-->
            <!--Mobile Menu-->
            <?php $this->load->view('partials/mobile-menu');?>
            <!--End Mobile Menu-->

            <!-- Body Container -->
            <div id="page-content"> 
            <?= isset($content) ? $content : ''; ?>
            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <?php $this->load->view('partials/footer');?>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->

            <!--MiniCart Drawer-->
            <?php $this->load->view('partials/mini-cart');?>
            <!--End MiniCart Drawer-->


            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="/assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="/assets/js/main.js"></script>

        </div>
        <!--End Page Wrapper-->
    </body>
</html>