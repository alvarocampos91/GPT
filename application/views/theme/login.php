<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 04:28:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GPT | Login</title>

    <?php 
      echo assets_css('bootstrap.min.css');
      echo assets_css('../font-awesome/css/font-awesome.css');

      echo assets_css('plugins/iCheck/custom.css');
      echo assets_css('animate.css');
      echo assets_css('style.css');

      echo assets_css('plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css');
    ?>
</head>

<body class="gray-bg">

	<?php if (isset($notice)) : ?>
	    <?php echo $notice; ?>
	<?php else : ?>
	    <div id="notices"></div>
	<?php endif; ?>

	<?= $view_content ?>


    <!-- Mainly scripts -->
    <?php 
      echo assets_js('jquery-3.1.1.min.js');
      echo assets_js('popper.min.js');
      echo assets_js('bootstrap.js');

      echo assets_js('plugins/iCheck/icheck.min.js');
    ?>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 04:28:08 GMT -->
</html>