<?php include 'admin-header.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Module
        <small>Add Employee</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container container50">
      <h3>Add New Employee</h3>
      <hr>
       <form method="POST" action="<?php echo base_url(); ?>index.php/pages/insert/?query=emp">
        <div class="form-group">
          <label>Employee Name</label>
          <input class="form-control" name="emp-name" placeholder="Employee Name" required="" />
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn form-control btn-success" value="Add-Employee">
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
<?php include 'admin-footer.php'; ?>