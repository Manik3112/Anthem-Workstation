<?php include 'admin-header.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Client Module
        <small>Add Client</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container container50">
      <h3>Add New Cleint</h3>
      <hr>
      <form method="POST" action="<?php echo base_url(); ?>index.php/pages/insert/?query=client">
        <div class="form-group">
          <label>Client Name</label>
          <input class="form-control" name="client-name" placeholder="Client Name" required="" />
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn form-control btn-success" value="Add-Client">
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'admin-footer.php'; ?>