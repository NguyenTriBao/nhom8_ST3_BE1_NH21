<?php include "header.php"?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php   if(isset($_GET['id'])):
                 $id = $_GET['id'];
                 $getproduct =$product->getProductById($id);
                 foreach($getproduct as $value):
                ?>
    <section class="content">
        <form action="edit.php" method="post" enctype="multipart/form-data">
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
                        <label for="inputName">ID</label>
                        <input type="text" id="inputName" class="form-control" name="id" value="<?php echo $value['id'] ?>">
                    </div>           
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" id="inputName" class="form-control" name="name" value="<?php echo $value['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Manufactures</label>
                        <select id="inputStatus" class="form-control custom-select" name="manu">
                            <?php
                 $getallmanu = $manu->getAllManu();
                 foreach($getallmanu as $vl):
                 ?>
                            <option value=<?php echo $vl['manu_id'] ?>> <?php echo $vl['manu_name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Protype</label>
                        <select id="inputStatus" class="form-control custom-select" name="type">
                            <?php
                 $getalltype = $type->getAllProtype();
                 foreach($getalltype as $va):
                 ?>
                            <option value=<?php echo $va['type_id'] ?>> <?php echo $va['type_name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea id="inputDescription" class="form-control" rows="4" name="desc"><?php echo $value['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Price</label>
                    <input type="text" id="inputProjectLeader" class="form-control" name="price" value="<?php echo $value['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">image</label>
                    <input type="file" id="inputClientCompany" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="inputStatus">Feature</label>
                    <select id="inputStatus" class="form-control custom-select" name="feature">
                        <option selected disabled>0</option>
                        <option> 1</option>
                    </select>
                </div>

            </div>
            <!-- /.card-body -->
            <?php endforeach; endif; ?>
</div>
<!-- /.card -->
</div>
<div class="row">
    <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input name="submit" type="submit" value="Edit Porject" class="btn btn-success float-right">
    </div>
</div>
</form>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<?php include "footer.php"?>