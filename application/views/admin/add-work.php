<?php include 'admin-header.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Work Module
        <small>Assign Work</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container container50">
       <form method="POST" action="<?php echo base_url(); ?>index.php/pages/insert/?query=work">
        <div class="form-group">
          <label>Select Employee</label>
          <select class="form-control" name="emp-name">
            <?php
            if($dataSet){
              foreach ($dataSet as $dataItem){
                echo "<option>$dataItem->emp_name</option>";
              }
            }
          ?>       
          </select>
        </div>
        <div class="form-group">
        <label>Party Name</label>
          <input class="form-control" name="party-name" placeholder="Party" />
        </div>
        <div class="form-group">
          <label>Work</label>
          <input class="form-control" name="work" placeholder="Work" />
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn form-control btn-success" value="Add-Work">
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'admin-footer.php'; ?>