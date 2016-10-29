<?php 
    $sesiondata=$this->session->all_userdata();
   
   ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.wowthemes.net/demo/calypso/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2015 14:28:14 GMT -->
<head>
<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Event</title>
<!-- Style <?php echo base_url(); ?>/assets/ -->
 <script src="<?php echo base_url(); ?>/assets/bower_components/jquery/jquery.min.js"></script>

<link id="bs-css"  href="<?php echo base_url(); ?>/assets/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/assets/css/charisma-app.css" rel="stylesheet">
  <link href='<?php echo base_url(); ?>/assets/css/jquery.noty.css' rel='stylesheet'>
    
    <link href='<?php echo base_url(); ?>/assets/css/bootstrap-darkly.min.css' rel='stylesheet'>
    
    <!-- jQuery -->
   
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">


</head>
<body>

    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> 
                <span style="    margin-top: -10px;sss">SmartShop Dashboard</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
           
            <!-- theme selector ends -->

        

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/showAdminuser"><i class="glyphicon glyphicon-user"></i><span> Admin Users</span></a>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/showMerchant"><i class="glyphicon glyphicon-user"></i><span> Merchants</span></a>
                        </li>
                         <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/showCustomer"><i class="glyphicon glyphicon-user"></i><span> Customers</span></a>
                        </li>
                       </ul>
                   
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
              
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Admin Users</h2>
       
            <a style="border-radius: 50%;     margin-top: -20px;" type="button" class="btn pull-right btn-success btn-icon command-edit" data-row-id="10253" data-toggle="modal" data-target="#modal-register"><span class="glyphicon glyphicon-plus icon-white"></span></a>
      
      
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>S/N</th>
        <th>USERNAME</th>
       
        <th>FULLNAME</th>
        <th>EMAIL</th>
         <th>QUESTION</th>
        <th>ANSWERS</th>
        <th>RC NUMBER</th>
        <th>ADDRESS</th>
        <th>PHONE NUMBER</th>
        <th>PICTURE</th>
         <th>Actions</th>
    </tr>
    </thead>
    <tbody>

                <?php 
    $c =0;
        $res = array_reverse($allMerchants -> result());
            foreach ($res as $value) {
                 $target=".bs";
                $delete_url =  base_url('admin/deleteMerchant') .'/'. $value->id;
                $c+=1;
              echo '
                 <tr>
        <td>'.$c.'</td>
        <td class="center">'.$value->username.'</d>
       
        <td class="center">'.$value->fullname.'</td>
         <td class="center">'.$value->email.'</td>
        <td class="center">'.$value->question.'</td>
        <td class="center">'.$value->answer.'</td>
         <td class="center">'.$value->rcnumber.'</td>
        <td class="center">'.$value->address.'</td>
        <td class="center">'.$value->phoneno.'</td>
       <td class="center"><img style="width: 50px; height: 50px;" src="'.base_url('pictures/admin/thumb/')."/".$value->picture.'" alt=""></td>
        
        <td class="center">
            <a style="border-radius: 50%;" class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                
            </a>
            <a style="border-radius: 50%;" type="button" class="btn btn-success btn-icon command-edit" data-row-id="10253" href="'.'" data-target="'.$target.$value->id.'" data-toggle="modal"><span class="glyphicon glyphicon-edit icon-white"></span></a>
            <a style="border-radius: 50%;" class="btn btn-danger" href="'. $delete_url.'">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                
            </a>
        </td>
    </tr>
              ';
            }

             ?>
   
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

   
   

   
</div>
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->




 <div id="modal-register" class="modal login fade hidden-xs "  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content logback" >
            <div class="modal-body">
                <div class="text-center">
                    <h3 class="logos">Create your account</h3>
                        <hr/>
                
                   <?php echo form_open_multipart('admin/registerMerchant');?>    
                        <div class="form-group">
                                
                                <input type="text" id="name" name="fullname" class="form-control"  placeholder="Enter your full name ">
                         </div>
                          <div class="form-group">
                                
                                <input type="text" id="name" name="username" class="form-control"  placeholder="Enter your user name ">
                         </div>
                         

                         <div class="form-group">
                              
                                <input type="text"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                         </div>

                          <div class="form-group">
                               
                                <input type="password"  name="password" class="form-control" id="pas" placeholder="password">
                         </div>
                       
                         <div class="form-group">
                              
                                <input type="text" id="summary" name="question" class="form-control"  placeholder="question">
                         </div>
                         <div class="form-group">
                              
                                <input type="text" id="summary" name="answer" class="form-control"  placeholder="answer">
                         </div>                       

                         <div class="form-group">
                                
                                <input type="text" id="num" name="phoneno" class="form-control"  placeholder="phone">
                         </div>
                         <div class="form-group">
                                
                                <input type="text" id="fb" name="rcnumber" class="form-control"  placeholder="rc number">
                         </div>
                          <div class="form-group">
                                
                                <input type="text" id="linkedin" name="address" class="form-control"  placeholder="address">
                         </div>
                        <div class="form-group">
                          <label class="txtColor" >Select picture</label>
                          <input type="file" name="userfile" >                           
                         </div>
                        
                  
                         <button type="submit" class="btn btn-primary btn-uppercase">Submit</button>
                        
                    </form>
                </div>
            </div><!-- /.modal-body -->
            <!-- /.modal-footer -->
            <a href="#" data-dismiss="modal" class="remove-icon"><i class="fa fa-times"></i></a>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php 
    $res = $allMerchants->result();
    foreach ($res as $value) {
       echo '
                <div id="modal-register" class="modal login fade hidden-xs bs'.$value->id.'"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content logback" >
            <div class="modal-body">
                <div class="text-center">
                    <h3 class="logos">Create your account</h3>
                        <hr/>
                
                       ' .form_open_multipart('admin/editMerchant/'.$value->id).'
                       
                         

                         <div class="form-group">
                                
                                <input type="text" value="'.$value->fullname.'" id="name" name="fullname" class="form-control"  placeholder="Enter your full name ">
                         </div>
                          <div class="form-group">
                                
                                <input type="text" id="name" value="'.$value->username.'" name="username" class="form-control"  placeholder="Enter your user name ">
                         </div>
                         

                         <div class="form-group">
                              
                                <input type="text" value="'.$value->email.'"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                         </div>

                          <div class="form-group">
                               
                                <input type="password" value="'.$value->password.'"  name="password" class="form-control" id="pas" placeholder="password">
                         </div>
                       
                         <div class="form-group">
                              
                                <input type="text" id="summary" value="'.$value->question.'" name="question" class="form-control"  placeholder="question">
                         </div>
                         <div class="form-group">
                              
                                <input type="text" id="summary" name="answer" value="'.$value->answer.'" class="form-control"  placeholder="answer">
                         </div>                       

                         <div class="form-group">
                                
                                <input type="text" id="num" name="phoneno" value="'.$value->phoneno.'" class="form-control"  placeholder="phone">
                         </div>
                         <div class="form-group">
                                
                                <input type="text" id="fb" name="rcnumber" value="'.$value->rcnumber.'" class="form-control"  placeholder="rc number">
                         </div>
                          <div class="form-group">
                                
                                <input type="text" id="linkedin" name="address" value="'.$value->address.'" class="form-control"  placeholder="address">
                         </div>
                         <div class="form-group">
                          <label class="txtColor" >Select picture</label>
                          <input type="file"  name="userfile" >                           
                         </div>
                  
                         <button type="submit" class="btn btn-primary btn-uppercase">Submit</button>
                        
                    </form>
                </div>
            </div><!-- /.modal-body -->
            <!-- /.modal-footer -->
            <a href="#" data-dismiss="modal" class="remove-icon"><i class="fa fa-times"></i></a>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
       '
        ;
    }
 ?>
<!-- external javascript -->

<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src="<?php echo base_url(); ?>/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- data table plugin -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.dataTables.min.js"></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url(); ?>/assets/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url(); ?>/assets/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url(); ?>/assets/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url(); ?>/assets/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url(); ?>/assets/js/charisma.js"></script>




<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div>
</body>

<!-- Mirrored from www.wowthemes.net/demo/calypso/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2015 14:30:03 GMT -->
</html>