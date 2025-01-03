<!doctype html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url(); ?>/assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic - Pages | Materio - Bootstrap Material Design Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="<?= base_url(); ?>/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url(); ?>/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->
    <?= $this->renderSection('content') ?>

    <!-- / Content -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/item/materio-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url(); ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>