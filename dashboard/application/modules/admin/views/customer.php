 <?php require_once('header.php'); ?>

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
        <th>PASSWORD</th>
        <th>EMAIL</th>
         <th>FULLNAME</th>
         <th>QUESTION</th>
        <th>ANSWERS</th>
        <th>PHONE NUMBER</th>
        <th>ADDRESS</th>
         <th>Actions</th>
    </tr>
    </thead>
    <tbody>

                <?php 
    $c =0;
        $res = array_reverse($allCustomers -> result());
            foreach ($res as $value) {
                 $target=".bs";
                $delete_url =  base_url('admin/deleteCustomer') .'/'. $value->id;
                $c+=1;
              echo '
                 <tr>
        <td>'.$c.'</td>
        <td class="center">'.$value->username.'</d>
        <td class="center">'.$value->password.'</td>
         <td class="center">'.$value->email.'</td>       
        <td class="center">'.$value->fullname.'</td>
        <td class="center">'.$value->question.'</td>
        <td class="center">'.$value->answer.'</td>
        <td class="center">'.$value->phoneno.'</td>        
        <td class="center">'.$value->address.'</td>
        
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

     

</div><!--/.fluid-container-->




 <div id="modal-register" class="modal login fade hidden-xs "  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content logback" >
            <div class="modal-body">
                <div class="text-center">
                    <h3 class="logos">Create your account</h3>
                        <hr/>
                
                   <?php echo form_open_multipart('admin/registerCustomer');?>    
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
                                
                                <input type="text" id="linkedin" name="address" class="form-control"  placeholder="address">
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
    $res = $allCustomers->result();
    foreach ($res as $value) {
       echo '

        <div class="modal fade bs'.$value->id.'" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Update Customer Information</h3>
                </div>
                 ' .form_open_multipart('admin/editCustomer/'.$value->id).'
                <div class="modal-body">
                    


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
                                
                                <input type="text" id="linkedin" name="address" value="'.$value->address.'" class="form-control"  placeholder="address">
                         </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <input type="submit"  class="btn btn-primary" data-dismiss="modal" value="Save changes"/>
                </div>

                </form>
            </div>
        </div>
    </div>

 
       '
        ;
    }
 ?>
<!-- external javascript -->
 <?php require_once('footer.php'); ?>