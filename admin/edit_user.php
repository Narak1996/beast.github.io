<?php
  include_once 'layouts/header.php';
?>
<?php
  if ($_GET['id']) {
    $o_id=$_GET['id'];
    $o_data= $conn->query("SELECT * FROM tb_user WHERE id='$o_id'");
          while ($o_row=mysqli_fetch_object($o_data)) {
            @$o_n=$o_row->full_name;
            @$o_img="img/profile_picture/".$o_row->img;
            @$o_email=$o_row->email;
            @$o_pos=$o_row->position;
            @$o_status=$o_row->status;
            @$o_phone=$o_row->phone;
            @$o_dob=$o_row->dob;
            @$o_pob=$o_row->pob;
            @$o_addr=$o_row->address;
          }}
    $i=$_POST['idd'];

    if($i==""){
      
  }else{
    $o_data= $conn->query("SELECT img FROM tb_user WHERE id='$i'");
          while ($i_row=mysqli_fetch_object($o_data)) {
            
            @$i_img="img/profile_picture/".$i_row->img;

          }
  }

  if (isset($_POST['btn'])) {
    $n=$_POST['txtname'];
    $email=$_POST['txtemail'];
    $cemail=$_POST['cemail'];
    $pos=$_POST['position'];
    $status=$_POST['rdstatus'];
    $phone=$_POST['phone'];
    $dob=$_POST['txtdob'];
    $pob=$_POST['txtpob'];
    $addr=$_POST['txtaddress'];
    $img=$_FILES['img'];
    $o_img1=$_POST['o_img'];
    $id_new=$_POST['idd'];

    // var_dump($img);
      
    // echo "name=$n ,email=$email,cemail=$cemail,position=$pos,status=$status,phone=$phone,dob=$dob,pob=$pob,addr=$addr,username=$username,pw=$pw,cpw=$cpw";
    if ($id_new!="") {
        if (!$img['error']) {
            if ($img['name']!="") {
              if ($img['type']=="image/jpeg" OR $img['type']=="image/png" OR $img['type']=="image/jpg") {
                if ($img['size']<=5000000) {
                  if ($email==$cemail) {
                          $img_name="img".date('dmy')."-".time().rand(1111,9999).".png";
                          $img_name1='img/profile_picture/'.$img_name;
                          $enc_pw=sha1(md5($pw)).sha1("khmer");
                          if (move_uploaded_file($img['tmp_name'],'img/profile_picture/'.$img_name)) {
                            $stm="UPDATE tb_user SET
                              full_name='$n',
                              img='$img_name',
                              email='$email',
                              position='$pos',
                              status='$status',
                              phone='$phone',
                              dob='$dob',
                              pob='$pob',
                              address='$addr' WHERE id = '$id_new';
                               ";
                               // echo $id_new;
                               unlink($i_img);
                               
                               // echo $o_img1;
                            if ($conn->query($stm)) {
                                echo '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>!</strong> Updated image ...
                                      </div>';
                                      
                                    }
                          }else{echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>!</strong> Image upload failed ...
                                      </div>';}
                   
                  }else{
                    echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Email is not matched ...
                              </div>';
                  }
                  
                }else{echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Image is too large ...
                              </div>';}
              }else{echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Please select image file : jpg,jpeg,png ...
                              </div>';}
            }else{
                  echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>!</strong> Please select an image ...
                                      </div>';
                  
              }
        }else{
              if ($email==$cemail) {
                          
                          
                            $stm="UPDATE tb_user SET
                              full_name='$n',
                              
                              email='$email',
                              position='$pos',
                              status='$status',
                              phone='$phone',
                              dob='$dob',
                              pob='$pob',
                              address='$addr' WHERE id = '$id_new';
                               ";
                               $img_p=$_POST['o_img'];
                               echo $img_p;
                            if ($conn->query($stm)) {
                                echo '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>!</strong> Updated ...
                                      </div>';
                                      
                                    }
                          
                  }else{
                    echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Email is not matched ...
                              </div>';
                  }
              }
      
    }else{
        echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Alert : </strong> Please select user from user list ...
                                      </div>';
    }
    

  }
?>


<div class="" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                          <h2>
                          <a href="user_list.php"><i class="fa fa-caret-left btn btn-primary"></i></a>
                          Edit user information
                          </h2>
                          
                          <div class="clearfix"></div>
                        </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="post"  action="edit_user.php" enctype="multipart/form-data">
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="idd" value="<?= @$o_id,@$id_new ?>">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="<?= @$o_n,@$n ?>" name="txtname" placeholder="" required="required" type="text">
                          
                        </div>
                      </div>
                      <div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Photo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="img" id="img" type='file' onchange="readURL(this);"  />
                          <label for="img" class="b-p">Browse Photo</label><br>
                          <input type="hidden" value="<?= @$o_img,@$o_img1,@$img_p ?>" name="o_img">
                          <input type="hidden" value="<?= @$img_name ?>" name="i_img">
                          
                          
                          <img src="<?= @$img_name1,@$o_img,@$img_p ?>" width="200px" id="blah" title="image" />
                          

                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" value="<?= @$o_email,@$email ?>" name="txtemail" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cemail">Confirm Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="cemail" name="cemail" data-validate-linked="txtemail" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Postion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <select class="optional form-control col-md-7 col-xs-12" name="position">
                              <option value="1" 
                                <?php
                                  if (@$o_pos=="1" OR @$pos=="1") {
                                    echo 'selected="selected"';
                                  }
                                ?>
                              >Seller</option>
                              <option value="2" <?php
                                  if (@$o_pos=="2"  OR @$pos=="2") {
                                    echo 'selected="selected"';
                                  }
                                ?> >Manager</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>Enabled <input type="radio" name="rdstatus"
                              <?php
                                  if (@$o_status=="1" OR @$status=="1") {
                                    echo 'checked="checked"';
                                  }
                                ?>
                          value="1"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <label>Disabled <input type="radio" name="rdstatus"
                              <?php
                                  if (@$o_status=="0" OR @$status=="0") {
                                    echo 'checked="checked"';
                                  }
                                ?>
                           value="0"></label>
                        </div>
                      </div>                    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" value="<?= @$o_phone,@$phone ?>" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txtdob">Date of birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="txtdob" name="txtdob" value="<?= @$o_dob,@$dob ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txtpob">Place of birth <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="txtpob" name="txtpob" class="form-control col-md-7 col-xs-12"><?= @$o_pob,@$pob ?></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txtaddress">Current Address <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="txtaddress"  name="txtaddress" class="form-control col-md-7 col-xs-12"><?= @$o_addr,@$addr ?></textarea>
                        </div>
                      </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input  type="reset" class="btn btn-danger">
                          <button type="submit" name="btn" class="btn btn-success">Update</button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php
  include_once 'layouts/footer.php';
?>
