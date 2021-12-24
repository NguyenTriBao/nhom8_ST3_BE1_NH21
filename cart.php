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
        $_SESSION['id'][$id] = $id;
    }
    $_SESSION['id'] = $_GET['id'];
    
}
?>

<body>
    <section>
        <section id="cart_items">
            <div class="container">
                <h3>Your shopping cart</h3>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description">Image</td>
                                <td class="price">Name</td>
                                <td class="quantity">Price</td>
                                <td class="total">Quanlity</td>
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
                                        <a  href=""><img src="./img/<?php echo $value['image']?>" alt=""></a>
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
                                        <a class="cart_quantity_delete"
                                            href="change.php?id=<?php echo $id ?>&control=3"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <?php }
                                    }
                         ?>

                            </tbody>
                    </table>
                    <h3>
                        <p style=text-align:center;background-color:rgb(251,152,15);padding:10px;color:white>TOTAL ALL:
                            <?php echo number_format($total) ?> VND </p>
                    </h3>

                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="number" name="phone" class="form-control" placeholder="Phone number" required>
                    </div>
                    
                    <!-- <div class="form-group col-md-12">
                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Your Message Here" required></textarea>
                        </div> -->
                    <div class="form-group col-md-12">
                        <a class="btn btn-default update" href="index.php">Continue Buying</a>
                        <a class="btn btn-default check_out" href="change.php?control=4">Delete All</a>
                        <input type="submit" name="submitOrder" class="btn btn-primary pull-right" value="Order">
                    </div>
                    </form>
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