<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email</title>

    <!-- Bootstrap -->
    <link href="../asset-email/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../asset-email/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../asset-email/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../asset-email/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../asset-email/build/css/custom.min.css" rel="stylesheet">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Email</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>ADMIN</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu</h3>
                            <ul class="nav side-menu">
                                <li><a href="/email"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                            </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Edit</h3>
                            <hr>
                        </div>
                    </div>
            </div>
            
            <!-- Table -->
            <form class="form-horizontal form-label-left"  method="post" action="{{ url('creat') }}" >
               
                <input type="hidden" name="user_id" value="0">
                <input type="hidden" name="id" value="0">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label>Subject <span class="required">*</span></label>
                    <input class="form-control col-md-7 col-xs-12"  name="subject" type="text" >
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label >Title <span class="required">*</span></label>
                    <input  class="form-control col-md-7 col-xs-12"  name="title" type="text" >
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                    <label >Color <span class="required">*</span></label>
                    <input class="col-md-12 col-sm-12 col-xs-12 form-group" name="color" type="color"  style="height: 40px">

                </div>

                <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                    <label>From_address<span class="required">*</span></label>
                    <select class="form-control" name="from_address">
                        <option value="accounting@caza.vn" >accounting@caza.vn</option>
                        <option value="hello@caza.vn" >hello@caza.vn</option>
                    </select>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label>Text<span class="required">*</span></label>
                    <input class="form-control col-md-7 col-xs-12"  name="text" type="text" value="">
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <label>Type<span class="required">*</span></label>
                    <input class="form-control col-md-7 col-xs-12"  name="type" type="text" value="">
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    
                <div style="padding-left: 10px;">
                    <a href="/email" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> OK</button>
                </div>
                
            </form>

            <!-- /end table -->
        </div>
    </div>
    <footer>
        <div class="pull-right">
            good job
        </div>
        <div class="clearfix"></div>
    </footer>
    
<!-- scrip -->

    <script src="../asset-email/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../asset-email/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../asset-email/vendors/fastclick/lib/fastclick.js"></script>
    <script src="../asset-email/vendors/nprogress/nprogress.js"></script>
    <script src="../asset-email/vendors/iCheck/icheck.min.js"></script>
    <script src="../asset-email/build/js/custom.min.js"></script>

</body>
</html>