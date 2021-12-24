<!DOCTYPE html>
<html lang="en">
<?php require "header.php"; ?>
<?php
$total = 0;
if (isset($_GET['id']) || isset($_SESSION['last_id'])) {
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else if (isset($_SESSION['last_id'])){
        $id = $_SESSION['last_id'];
    }
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]++;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
    if (!isset($_SESSION['id'][$id])) {
       // $_SESSION['id'][$id] = $id;
        
    }
    $_SESSION['id'] = $_GET['id'];
    
}
?>
<body>
    <section>
        <section id="cart_items">
            <div class="container">
            <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">San Pham Lien Quan</h3>
                    <?php
                     if (isset($_GET['id'])):
                      $id = $_GET['id'];
                      foreach ($product->getProductById($id) as $value):
                      foreach ($product->getOldProductByManuId($value['manu_id']) as $valuee):
                        
                    ?>
                    
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/<?php echo $valuee['image']  ?> " alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#"><?php echo $valuee['name'] ?></a></h3>
                            <h4 class="product-price"><?php echo number_format($valuee['price']) ?> VND</h4>
                        </div>
                    </div>   
                    <?php 
                     endforeach;
                    endforeach;
                  endif; ?>        
                </div>
                
                <!-- /aside Widget -->
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sort By:
                            <select class="input-select">
                                <option value="0">Popular</option>
                                <option value="1">Position</option>
                            </select>
                        </label>

                        <label>
                            Show:
                            <select class="input-select">
                                <option value="0">20</option>
                                <option value="1">50</option>
                            </select>
                        </label>
                    </div>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>
                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>
                <!-- /store top filter -->

                <!-- store products -->
                <div class="row">
                    <!-- product -->
                    <h3>Your shopping cart</h3>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description">Image</td>
                                <td class="price">Name</td>
                                <td class="quantity">Price</td>
                                <td class="total">Quantity</td>
                            
                                <td></td>
                            </tr>
                            
                        </thead>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post"
                            action="processOrder.php">
                            <tbody>
                                <tr>
                                    <?php if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        foreach ($product->getProductById($id) as $value) { ?>
                                    <td>
                                        <h4><a href="#" name = "id" ><?php echo $value['id'] ?></a>
                                        </h4>
                                    </td>
                                    <td class="cart_product">
                                        <a href=""><img src="./img/<?php echo $value['image']?>" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="#"><?php echo $value['name'] ?></a>
                                        </h4>
                                    </td>
                                    <td class="cart_price">
                                        <p><?php echo number_format($value['price']) ?> VND</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up"
                                                href="change.php?id=<?php echo $id ?>&control=1"> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity"
                                                value="<?php echo $_SESSION['cart'][$id] ?>" autocomplete="off"
                                                size="2">
                                            <a class="cart_quantity_down"
                                                href="change.php?id=<?php echo $id ?>&control=2"> - </a>
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                       
                                    </td>
                                    <td class="cart_delete">
                                       
                                    </td>
                                </tr>
                                <?php }
                                    }
                         ?>

                            </tbody>
                    </table>
                   
                    </form>
                    <div class="add-to-cart">
                                    <a href="cart.php?id=<?php echo $value['id'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                </div>
                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <span class="store-qty">Showing 20-100 products</span>
                    <ul class="store-pagination">
                     
                    </ul>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
               
            </div>
        </section>
        <!--/#cart_items-->
        <!--features_items-->
        </div>
        </div>
        
    </section>
    <?php require "footer.html"?>
</body>

</html>