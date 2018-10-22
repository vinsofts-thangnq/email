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
    <link href="asset-email/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="asset-email/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="asset-email/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="asset-email/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="asset-email/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="email" class="site_title"><i class="fa fa-paw"></i> <span>Email</span></a>
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
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
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

            <!-- search -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                    <div class="title_left">
                        <h3>Email</h3>
                        
                    </div>

                    <div class="title_right" >
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="clearfix"></div>
            </div>
            <!-- end-search -->

            <!-- Table -->
                    <div class="x_content">
                        <div class="table-responsive">
                        <a href="{{url('add/')}}" class="btn btn-success"><i class="fa fa-check-square-o"></i> Add</a>
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="hidden" name="subject" value="post">
                                            <input type="hidden" name="text" value="0">
                                            <input type="hidden" name="from_address" value="0">
                                            <input type="hidden" name="user_id" value="0">
                                            <input type="hidden" name="color" value="0" >
                                            </th>
                                            <th class="column-title">Id </th>
                                            <th class="column-title">Title </th>
                                            <th class="column-title">Type </th>
                                            <th class="column-title">Options </th>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $stt = 0 ?>
                                    @foreach($data as $dt)
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <?php $stt = $stt + 1 ?>
                                            <th scope="row">{{$stt}}</th>
                                            <td class=""name="title">{{$dt->title}}</td>
                                            <td class=""name="type">{{$dt->type}}</td>
                                            
                                            <td class=" last">
                                                <a class="fa fa-fw fa-pencil text-warning" href="{{url('edit/'.$dt->id)}}"></a>
                                                <a class="fa fa-fw fa-close text-warning" style="color:red" href="{{url('delete/'.$dt->id)}}" onclick="return window.confirm('Bạn có chắc muốn xoá không?')"></a>
                                            </td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>
                        </div>
                    </div>
            <!-- /end table -->
        </div>
    </div>
    
<!-- scrip -->
    <script src="asset-email/vendors/jquery/dist/jquery.min.js"></script>
    <script src="asset-email/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="asset-email/vendors/fastclick/lib/fastclick.js"></script>
    <script src="asset-email/vendors/nprogress/nprogress.js"></script>
    <script src="asset-email/vendors/iCheck/icheck.min.js"></script>
    <script src="asset-email/build/js/custom.min.js"></script>

</body>
</html>