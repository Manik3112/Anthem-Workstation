<?php include 'admin-header.php'; session_start(); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Work Module
        <small>Show Work</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Sno</th>
            <th>Party</th>
            <th>Work</th>
            <th>Status</th>
            <th>Employee</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if($dataSet){
              foreach ($dataSet as $dataItem){
                if($dataItem->status == 0){$stat = "Not Completed";}
                else if($dataItem->status == 1){$stat = "Completed";}
                if ($dataItem->past == 1 && $dataItem->emp_id == $_SESSION['eid']) {
                  echo "<tr>
                        <td>".$dataItem->sno."</td>
                        <td>".$dataItem->party_name."</td>
                        <td>".$dataItem->work."</td>
                        <td>".$stat."</td>
                        <td>".$dataItem->emp_name."</td>
                      </tr>";
                }
              }
            }
          ?>
        </tbody>
      </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'admin-footer.php'; ?>