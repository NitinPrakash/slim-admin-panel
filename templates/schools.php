<?php include_once('adm-head.php');?>
      <?php include_once('adm-sidebar.php');?>  
      <div class="container-fluid mimin-wrapper">
          <!-- start: content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Contacts</h3>
                        <p class="animated fadeInDown">
                            <a href="<?php echo SITEROOT.'/dashboard';?>">Dashboard</a> <span class="fa-angle-right fa"></span> Contacts
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Contacts</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">                          
                      <table id="all-contacts" class="table table-striped table-condensed" width="100%" cellspacing="0">                          
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>                          
                          <th>Created</th>
                          <th>Updated</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($contacts) { 
                            
                                foreach( $contacts as $c_id => $contact ) {  
                                   $email = $contact['email']?$contact['email']:'N/a'; 
                                   $phone = $contact['phone']?$contact['phone']:'N/a';
                                   $created = date('d-m-Y',$contact['created']);
                                   $updated = date('d-m-Y',strtotime($contact['updated']));
                                   echo '<tr>
                                            <td>'.$contact['name'].'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$phone.'</td>                                            
                                            <td>'.$created.'</td>
                                            <td>'.$updated.'</td>
                                            <td><button class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Activate"><i class="fa fa-bell"></i></button>&nbsp;
                                                <button class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>&nbsp;
                                                <button class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></button></td>    
                                          </tr>  ';   
                                }
                                
                              }  
                        
                        ?>  
                                              
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->                    
      </div>
      
    <!-- start: Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
       
    <!-- plugins -->
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/plugins/jquery.datatables.min.js"></script>
    <script src="assets/js/plugins/datatables.bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.nicescroll.js"></script>

    <!-- custom -->
     <script src="assets/js/main.js"></script>   
     <script type="text/javascript">
        $(document).ready(function(){
          $('#all-contacts').DataTable();
        });
     </script>
  <!-- end: Javascript -->
  </body>
</html>