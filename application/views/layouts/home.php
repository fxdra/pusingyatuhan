
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

    <body class="template-index index-home">
        <!--Page Wrapper-->
        <div class="page-wrapper">
            <div class="classic-topHeader">
                <!--Top Header-->
                <?php $this->load->view('partials/home/top-header'); ?>
                <!--End Top Header-->

                <!--Header-->
                <?php $this->load->view('partials/home/header'); ?>
                <!--End Header-->
            </div>

            <!--Mobile Menu-->
            <?php $this->load->view('partials/mobile-menu'); ?>
            <!--End Mobile Menu-->

            <!-- Body Container -->
            <div id="page-content" class="mb-0">
                <?= isset($content) ? $content : ''; ?>
            </div>
            <!-- End Body Container -->

            <!--Footer-->       
            <?php $this->load->view('partials/footer'); ?>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll" class="rounded-circle"><i class="icon anm anm-angle-up-r"></i></div>
            <!--End Scoll Top-->

            <!--MiniCart Drawer-->
            <?php $this->load->view('partials/mini-cart'); ?>
            <!--End MiniCart Drawer-->

            <!-- Product Quickshop Modal-->
            <?php $this->load->view('partials/quick-shop'); ?>
            <!-- End Product Quickshop Modal -->

            <!-- Product Addtocart Modal-->
            <?php $this->load->view('partials/add-to-cart'); ?>
            <!-- End Product Addtocart Modal -->

            <!-- Product Quickview Modal-->
            <?php $this->load->view('partials/quick-view'); ?>
            <!--End Product Quickview Modal-->

            <!--Newsletter Modal-->
            <?php $this->load->view('partials/news-letter'); ?>
            <!--End Newsletter Modal-->


            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="/assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="/assets/js/main.js"></script>

            <!--Newsletter Modal Cookies-->
            <script>
                $(window).ready(function() {
                    setTimeout(function() {
                        $('#newsletter_modal').modal("show");
                    }, 7000);
                });
            </script>
            <!--End Newsletter Modal Cookies-->

        </div>
        <!--End Page Wrapper-->
    </body>
</html>