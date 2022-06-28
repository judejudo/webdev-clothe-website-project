/<?php

    require('connect.php');

    if (isset($_POST['add_product'])) {

        $product_name = $_POST['product_name'];
        $product_desc = $_POST['product_description'];
        $product_image = $_FILES['product_image']['name'];
        // $product_image_tmp =$_FILES['product_image']['tmp_name'];
        $product_price = $_POST['product_price'];
        $product_available = $_POST['available_quantity'];
        $subcategory_id = $_POST['subcategory_id'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];
        $added_by = $_POST['added_by'];
        $is_deleted = $_POST['is_deleted'];

        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_img/'. $product_image;

        
        $insert = "INSERT INTO tbl_product(product_name,product_description,product_image,unit_price,available_quantity,subcategory_id,created_at,updated_at,added_by,is_deleted)
          VALUES('$product_name','$product_desc','$product_image','$product_price','$product_available','$subcategory_id','$created_at','$updated_at','$added_by','$is_deleted')";
            $upload = mysqli_query($conn, $insert);
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
                
            
        };
    

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM tbl_product WHERE product_id = $product_id");
        
    };

    ?>

