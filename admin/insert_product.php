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
                    <a href="create_user.php"><i class="fa fa-caret-left btn btn-primary"></i></a>
                    Insert Product
                    </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: block;">

                    

                  </div>
                </div>
                  </div>
                  




  

<?php
  include_once 'layouts/footer.php'; 
?>