<?php
  include_once 'layouts/header.php';
?>
<?php
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
    $username=$_POST['txtusername'];
    $pw=$_POST['password'];
    $cpw=$_POST['password2'];

    $img=$_FILES['img'];
    // var_dump($img);
    
    // echo "name=$n ,email=$email,cemail=$cemail,position=$pos,status=$status,phone=$phone,dob=$dob,pob=$pob,addr=$addr,username=$username,pw=$pw,cpw=$cpw";
    $row=$conn->query("SELECT * FROM tb_user where username='$username'");
    $num=mysqli_num_rows($row);
    
    echo $username."___";
    echo $num;
    if ($num<=0) {
        if (!$img['error']) {
            if ($img['type']=="image/jpeg" OR $img['type']=="image/png" OR $img['type']=="image/jpg") {
              if ($img['size']<=5000000) {
                if ($img['name']!="") {
                  if ($email==$cemail) {
                    if ($pw==$cpw) {
                          
                          $img_name="img".date('dmy')."-".time().rand(1111,9999).".png";
                          $enc_pw=sha1(md5($pw)).sha1("khmer");
                          if (move_uploaded_file($img['tmp_name'], 'img/profile_picture/'.$img_name)) {
                            $stm="INSERT INTO tb_user(full_name,img,email,position,status,phone,dob,pob,address,username,password) VALUES('$n','$img_name','$email','$pos','$status','$phone','$dob','$pob','$addr','$username','$enc_pw')";
                            if ($conn->query($stm)) {
                                echo '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>!</strong> User created ...
                                      </div>';
                                      $n="";
                                      $email="";
                                      $pos="";
                                      $phone="";
                                      $dob="";
                                      $pob="";
                                      $addr="";
                                      $username="";
                                    }
                          }else{echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>!</strong> Image upload failed ...
                                      </div>';}
                    }
                    else{
                      echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Password is not matched ...
                              </div>';
                    }
                  }else{
                    echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Email is not matched ...
                              </div>';
                  }
                  
                }else{echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Image name incorrect ...
                              </div>';}
              }else{echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Image size is too large ...
                              </div>';}
            }else{echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Please select image file : jpg,jpeg,png
                              </div>';}
        }else{echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> Please select an image ...
                              </div>';}
    }else{
      echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>!</strong> This username already exist ...
                              </div>';
    }

  }
?>

<script type="text/javascript">
  
</script>
<div class="" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                          <h2>
                          <a href="user_list.php"><i class="fa fa-caret-left btn btn-primary"></i></a>
                          Create new user
                          </h2>
                          
                          <div class="clearfix"></div>
                        </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="post"  action="create_user.php" enctype="multipart/form-data" novalidate>
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="<?= @$n ?>" name="txtname" placeholder="" required="required" type="text">
                          
                        </div>
                      </div>
                      <div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Photo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="img" id="img" type='file' onchange="readURL(this);" required="" />
                          <label for="img" class="b-p">Browse Photo</label><br>
                          <img id="blah" src="#" alt="..."  />
                          

                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" value="<?= @$email ?>" name="txtemail" required="required" class="form-control col-md-7 col-xs-12">
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
                                  if (@$pos=="1") {
                                    echo 'selected="selected"';
                                  }
                                ?>
                              >Seller</option>
                              <option value="2" <?php
                                  if (@$pos=="2") {
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
                          <label>Enabled <input type="radio" name="rdstatus" checked="checked" value="1"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <label>Disabled <input type="radio" name="rdstatus" value="0"></label>
                        </div>
                      </div>                    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" value="<?= @$phone ?>" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txtdob">Date of birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="txtdob" name="txtdob" value="<?= @$dob ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txtpob">Place of birth <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="txtpob" name="txtpob" class="form-control col-md-7 col-xs-12"><?= @$pob ?></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txtaddress">Current Address <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="txtaddress"  name="txtaddress" class="form-control col-md-7 col-xs-12"><?= @$addr ?></textarea>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="text" name="txtusername" value="<?= @$username ?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input  type="reset" class="btn btn-danger">
                          <button type="submit" name="btn" class="btn btn-success">Submit</button>
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
