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

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">GPT</h1>

            </div>
            <h3><?php echo lang('login_heading');?></h3>
            <p><?php echo lang('login_subheading');?></p>
            <p><?php echo $message;?></p>
            <?php 
              $attributes = array('class' => 'm-t', 'role' => 'form');
              echo form_open("auth/login",$attributes);
            ?>
                <div class="form-group">
                    <?php echo form_input($identity);?>
                </div>
                <div class="form-group">
                    <?php echo form_input($password);?>                    
                </div>
                <div class="form-group" style="text-align: left;">
                  <?php $data = array('name'=>'remember','value'=>'1','checked'=>FALSE,'id'=>'remember','class'=>'i-checks'); ?>
                  <?php echo form_checkbox($data);?>
                  <?php echo lang('login_remember_label', 'remember');?>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Ingresar</button>
                <a href="forgot_password"><small><?php echo lang('login_forgot_password');?></small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            <?php echo form_close();?>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

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