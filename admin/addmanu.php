<?php include "header.php"?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" id="inputName" class="form-control" name="name">
                    </div>
            </div>
            <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<div class="row">
    <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input name="addtype" type="submit" value="Create new Porject" class="btn btn-success float-right">
        ?>
    </div>

</div>
</form>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<?php include "footer.php"?>