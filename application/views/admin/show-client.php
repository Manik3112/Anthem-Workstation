<?php include 'admin-header.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Client Module
        <small>Show Client</small>
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
            <th>Client Name</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if($dataSet){
              foreach ($dataSet as $dataItem){
                echo "<tr>
                        <td>".$dataItem->client_id."</td>
                        <td>".$dataItem->client_name."</td>
                        <td><a href='del-client?id=$dataItem->client_id' class='btn btn-danger'>Remove</a></td>
                      </tr>";
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