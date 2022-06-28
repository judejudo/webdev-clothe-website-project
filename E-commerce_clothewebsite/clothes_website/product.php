<!DOCTYPE html>
<html lang="en">

<head>

<?php
function getProducts($id){
    include("db.php");

    $sql = "SELECT *FROM tbl_product INNER JOIN tbl_subcategories ON tbl_product.subcategory_id=tbl_subcategories.subcategory_id WHERE category=$id;";

    $result = mysqli_query($con, $sql);
    echo mysqli_error($con);
    while ($row = mysqli_fetch_assoc($result)) {
        $img_url = $row['product_image'];
        $product_name = $row['product_name'];
        $product_id = $row['product_id'];
        $product_price = $row['unit_price'];
        $subcategory_name = $row['subcategory_name'];

        echo "
            <div class='product-card'>
            <img src='$img_url' alt=''>

            <div class='product-card-details'>
            <p class='product-gender'>
                $subcategory_name
            </p>
            <p class='product-name'>$product_name</p>
            <p class='product-price'>$product_price<small>sh</small></p>
            </div>
            </div>
            ";
    }
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style002.css">

    < <div class="container">

        <div class="admin-product-form-container">

            <form action="product_process.php" method="post" enctype="multipart/form-data">
                <h3>add a new product</h3>

                <input type="text" placeholder="Enter product name" name="product_name" class="box">
                <input type="text" placeholder="Write a description of the product" name="product_description" class="box">
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                <input type="number" placeholder="Enter product price" name="product_price" class="box">
                <input type="number" placeholder="available quantity" name="available_quantity" class="box">
                <input type="number" placeholder="subcategory id" name="subcategory_id" class="box">
                <input type="text" placeholder="Created at " name="created_at" class="box">
                <input type="text" placeholder="Updated at" name="updated_at" class="box">
                <input type="text" placeholder="Added by" name="added_by" class="box">
                <input type="text" placeholder="is deleted" name="is_deleted" class="box">


                <input type="submit" class="btn" name="add_product" value="add clothing">
            </form>

        </div>

        <?php
 require("connect.php");
        $select = mysqli_query($conn, "SELECT * FROM tbl_product");

        ?>
        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>Clothe Image</th>
                        <th>clothe name</th>
                        <th>clothe price</th>
                        <th>Format</th>
                    </tr>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                    <tr>
                        <td><img src="uploaded_img/<?php echo $row['product_image']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td>$<?php echo $row['unit_price']; ?>/-</td>
                        <td>
                            <a href="updatePrd.php?edit=<?php echo $row['product_id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                            <a href="admin_page.php?delete=<?php echo $row['product_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        </div>


        </body>

</html>