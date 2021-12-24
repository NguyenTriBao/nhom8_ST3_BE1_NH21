<?php include "header.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          MaKH
                      </th>
                      <th style="width: 20%">
                          TenKH
                      </th>
                      <th style="width: 20%">
                          email
                      </th>
                      <th style="width: 20%">
                          address
                      </th>
                      <th style="width: 20%">
                          phone
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                $getallcustomer = $customer->getAllcustomer();
                foreach($getallcustomer as $value):
                 ?>
                  <tr>
                      <td>
                          <?php echo $value['MaKH']?>
                      </td>
                      <td>
                            <?php echo $value['NameKH'] ?>
                      </td>
                      <td>
                          <?php echo $value['Email']?>
                      </td>
                      <td>
                          <?php echo $value['Address']?>
                      </td>
                      <td>
                          <?php echo $value['Phone']?>
                      </td>
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-danger btn-sm" href="delCustomer.php?id=<?php echo $value['MaKH']?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php"?>