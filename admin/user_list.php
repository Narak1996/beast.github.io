<?php
  include_once 'layouts/header.php';
  
  $user= $conn->query("SELECT * FROM tb_user ORDER BY id DESC");
?>
        <script type="text/javascript">
                    $(document).ready(function(){
                    $('#tb9').DataTable();});
        </script>


                  <div class="x_content">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>
                          <a href="create_user.php"><i class="fa fa-plus btn btn-primary"></i></a>
                          User List
                          </h2>
                          
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content" style="display: block;">

                          <table class="table table-striped table-hover" id="tb9">
                            <thead>
                              <tr >
                                <th>#</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Position</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                      $rec=mysqli_num_rows($user);
                                      if($rec>0){
                                      		$id=0;
                                      		while ($row=mysqli_fetch_object($user)) {
                                            $st="";
                                            $style="";
                                            if ($row->status==1) {
                                              $st="Enabled";
                                              $style='style="color: green;"';
                                            }
                                            else{
                                              $st="Disabled";
                                              $style='style="color: red;"';
                                            }
                                            if ($row->position==1) {
                                              $post="Seller";
                                              
                                            }
                                            else{
                                              $post="Manager";
                                              
                                            }
                  								        echo '<tr style="">'.
                		                          '<th scope="row">'.(++$id).'</th>'.
                		                          '<td>'.$row->full_name.'</td>'.
                                              '<td>'.$row->email.'</td>'.
                                              '<td '.$style.'>'.$st.'</td>'.
                                              '<td>'.$post.'</td>'.
                                              '<td>'.$row->phone.'</td>'.
                		                          
                		                          '<td>'.
                		                          	'<a href="edit_user.php?id='.$row->id.'" class="text-warning"><i class="fa fa-'.'pencil fa-lg"></i></a>'.
                		                          	 ' | <a href="#" class="text-danger"><i class="fa fa-'.'user fa-lg"></i></a>'. 
                		                          '</td>'.
                		                        '</tr>';
                  						        }
                                      }else{
                                      	echo "no record";
                                      }
                                      	
                                ?>
                             
                            </tbody>
                          </table>

                        </div>
                      </div>
                  </div>
                  




  

<?php
  include_once 'layouts/footer.php'; 
?>