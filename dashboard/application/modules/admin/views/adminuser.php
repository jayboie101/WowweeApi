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
            
            <a style="border-radius: 50%; margin-top: -20px;" type="button" class="btn pull-right btn-success btn-icon command-edit" data-row-id="10253" data-toggle="modal" data-target="#modal-register"><i class="glyphicon glyphicon-plus icon-white"></i></a>
      
      
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>USER TYPE</th>
     
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

 <?php 
    $c =0;
        $res = array_reverse($allAdminUsers -> result());
            foreach ($res as $value) {
                 $target=".bs";
                $delete_url =  base_url('admin/deleteuser') .'/'. $value->id;
                $c+=1;
              echo '
        <tr>
        <td>'.$c.'</td>
        <td class="center">'.$value->name.'</d>
        <td class="center">'.$value->email.'</td>
        <td class="center">
            <span class="label-success label label-default">'.$value->user.'</span>
        </td>

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

    


    

</div><!--/.fluid-container-->




 <div id="modal-register" class="modal login fade hidden-xs "  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content logback" >
            <div class="modal-body">
                <div class="text-center">
                    <h3 class="logos">Create your account</h3>
                        <hr/>
                
                   <?php echo form_open_multipart('admin/register');?>    
                        <div class="form-group">
                                
                                <input type="text" id="name" name="name" class="form-control"  placeholder="Enter your full name ">
                         </div>
                         

                         <div class="form-group">
                              
                                <input type="text"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                         </div>

                          <div class="form-group">
                               
                                <input type="password"  name="password" class="form-control" id="pas" placeholder="password">
                         </div>
                         <div class="form-group"  >
                               
                                <select id="user" class="form-control"  name="user">
                        
                                 <option value="admin">Admin</option>
                                 
                             </select>
                          </div>

                         <div class="form-group">
                              
                                <input type="text" id="summary" name="summary" class="form-control"  placeholder="Summary">
                         </div>                       

                         <div class="form-group">
                                
                                <input type="text" id="num" name="number" class="form-control"  placeholder="Phone number">
                         </div>
                         <div class="form-group">
                                
                                <input type="text" id="fb" name="facebook" class="form-control"  placeholder="facebook ID">
                         </div>
                          <div class="form-group">
                                
                                <input type="text" id="linkedin" name="linkedin" class="form-control"  placeholder="Linkedin ID">
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
    $res = $allAdminUsers->result();
    foreach ($res as $value) {
       echo '
                <div id="modal-register" class="modal login fade hidden-xs bs'.$value->id.'"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content logback" >
            <div class="modal-body">
                <div class="text-center">
                    <h3 class="logos">Create your account</h3>
                        <hr/>
                
                       ' .form_open_multipart('admin/editUser/'.$value->id).'
                        <div class="form-group">
                                
                                <input type="text" value="'.$value->name.'" id="name" name="name" class="form-control"  placeholder="Enter your full name ">
                         </div>
                         

                         <div class="form-group">
                              
                                <input type="text" value="'.$value->email.'"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                         </div>

                          <div class="form-group">
                               
                                <input type="password"  name="password" class="form-control" id="pas" placeholder="password">
                         </div>
                         <div class="form-group"  >
                               
                                <select id="user" class="form-control"  name="user">
                        
                                 <option value="admin">Admin</option>
                                 
                             </select>
                          </div>

                         <div class="form-group">
                              
                                <input type="text" value="'.$value->summary.'" id="summary" name="summary" class="form-control"  placeholder="Summary">
                         </div>                       

                         <div class="form-group">
                                
                                <input type="text" value="'.$value->number.'" id="num" name="number" class="form-control"  placeholder="Phone number">
                         </div>
                         <div class="form-group">
                                
                                <input type="text" value="'.$value->facebook.'" id="fb" name="facebook" class="form-control"  placeholder="facebook ID">
                         </div>
                          <div class="form-group">
                                
                                <input value="'.$value->linkedin.'" type="text" id="linkedin" name="linkedin" class="form-control"  placeholder="Linkedin ID">
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
       '
        ;
    }
 ?>
<!-- external javascript -->

<?php require_once('footer.php'); ?>

