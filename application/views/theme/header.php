<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 04:31:36 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de usuarios</title>
    
    <?php 
        echo assets_css('bootstrap.min.css');
        echo assets_css('../font-awesome/css/font-awesome.css');

        echo assets_css('animate.css');
        echo assets_css('style.css');

        if (isset($stylesheets))
        {
            foreach ($stylesheets as $style)
            {
                echo "<link rel='stylesheet' type='text/css' href='{$style}' />";
            }
        }
    ?>

</head>

<body class="pace-done fixed-sidebar">

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <?php echo assets_img('profile_small.jpg',["alt"=>"image", "class"=>"rounded-circle"]); ?>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">David Williams</span>
                                <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <?php foreach ($menu as $datos):?>
                    <li <?php echo $datos['active']? 'class = "active"':''; ?>>
                        <a href="<?php echo $datos['ruta']; ?>">
                            <i class="fa <?php echo $datos['icono']; ?>"></i> <span class="nav-label"><?php echo $datos['nombre'] ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </nav>

                <div id="page-wrapper" class="gray-bg">
                    <div class="row border-bottom">
                        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                            <div class="navbar-header">
                                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                                <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.9.1/search_results.html">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="top-search" id="top-search">
                                    </div>
                                </form>
                            </div>
                            <ul class="nav navbar-top-links navbar-right">
                                <li>
                                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-messages">
                                        <li>
                                            <div class="dropdown-messages-box">
                                                <a class="dropdown-item float-left" href="profile.html">
                                                    <?php echo assets_img('a7.jpg'); ?>
                                                </a>
                                                <div class="media-body">
                                                    <small class="float-right">46h ago</small>
                                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <div class="dropdown-messages-box">
                                                <a class="dropdown-item float-left" href="profile.html">
                                                    <?php echo assets_img('a4.jpg'); ?>
                                                </a>
                                                <div class="media-body ">
                                                    <small class="float-right text-navy">5h ago</small>
                                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <div class="dropdown-messages-box">
                                                <a class="dropdown-item float-left" href="profile.html">
                                                    <?php echo assets_img('profile.jpg'); ?>
                                                </a>
                                                <div class="media-body ">
                                                    <small class="float-right">23h ago</small>
                                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <div class="text-center link-block">
                                                <a href="mailbox.html" class="dropdown-item">
                                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-alerts">
                                        <li>
                                            <a href="mailbox.html" class="dropdown-item">
                                                <div>
                                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                                    <span class="float-right text-muted small">4 minutes ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="profile.html" class="dropdown-item">
                                                <div>
                                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                    <span class="float-right text-muted small">12 minutes ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="grid_options.html" class="dropdown-item">
                                                <div>
                                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                    <span class="float-right text-muted small">4 minutes ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <div class="text-center link-block">
                                                <a href="notifications.html" class="dropdown-item">
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-sign-out"></i> Log out
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-10">
                            <h2>Data Tables</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index-2.html">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>Tables</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <strong>Data Tables</strong>
                                </li>
                            </ol>
                        </div>
                        <div class="col-lg-2">

                        </div>
                    </div>
                    <div class="wrapper wrapper-content animated fadeInRight">