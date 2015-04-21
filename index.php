<!DOCTYPE HTML>
<html lang="en-US">
    <?php require_once('blocks/services/head.html'); ?>
    <body>
        <div class="b-page-wrap">
            <!-- Start Header -->
            <?php require_once('blocks/general/header.html'); ?>
            <!-- End Header -->

            <!-- Start Page Content -->
            <?php $path_content = count($_GET) > 0 ? 'pages/' . $_GET['f'] : 'pages/main.html' ?>
            <?php require_once($path_content); ?>
            <!-- End Page Content -->

            <!-- Start Footer-->
            <?php require_once('blocks/general/footer.html'); ?>
            <!-- Emd Footer -->
        </div>
    </body>
</html>