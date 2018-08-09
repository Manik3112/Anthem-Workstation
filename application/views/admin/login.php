<?php
$flag = 0;
session_start();
if(isset($_GET['submit']))
{
  if($dataSet){
      foreach ($dataSet as $dataItem){
        if($_POST['uid']=='admin' && $_POST['pass']='AAAmbd'){
          $flag=1;}
        else if($dataItem->uid==$_POST['uid'] && $dataItem->pass==$_POST['pass'])
          {$flag = 2;$eid=$dataItem->eid;}
      }
    }  
  if($flag==1)
  {
    $_SESSION['uid']=$_POST['uid'];
    $_SESSION['pass']=$_POST['pass'];
    header("Location: ".base_url()."dashboard/admin-home");
  }
  else if($flag==2){
    $_SESSION['uid']=$_POST['uid'];
    $_SESSION['pass']=$_POST['pass'];
    $_SESSION['eid']=$eid;
    header("Location: ".base_url()."user/admin-home");
  }
  else{
    echo "<script>alert('Wrong Password!');</script>";
  }
}
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Anthem Workstation
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo base_url(); ?>login?submit" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="uid" class="form-control" placeholder="User ID" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6 col-xs-offset-1">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->