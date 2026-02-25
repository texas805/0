<?php

require_once('functions.php');

echo 'Hello Admin <br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

    <div class="entry_form">
        <?php
            $old_form_data = [];
            if( isset($_SESSION['validation']) && $_SESSION['validation'] != "passed" && isset($_SESSION['old_form_data']) ){
                $old_form_data = $_SESSION['old_form_data'];
            }

        ?>
        <form action="" method="post">
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $old_form_data['name'] ?? '' ?>">
            </div>
            <div class="form-control">
                <label for="regular_price">Regular Price</label>
                <input type="text" name="regular_price" id="regular_price" value="<?php echo $old_form_data['regular_price'] ?? '' ?>">
            </div>
            <div class="form-control">
                <label for="sale_price">Sale Price</label>
                <input type="text" name="sale_price" id="sale_price" value="<?php echo $old_form_data['sale_price'] ?? '' ?>">
            </div>
            <div class="form-control">
                <input type="submit" name="add_priduct_submit" value="submit">
            </div>
            <?php
                if( isset($_SESSION['validation']) && $_SESSION['validation'] != "passed" && isset($_SESSION['validation']['message']) ){
                    echo $_SESSION['validation']['message'];

                    $_SESSION['validation'] = '';
                    $_SESSION['old_form_data'] = '';
                }
            ?>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>PID</th>
                <th>Name</th>
                <th>Sale Price</th>
                <th>Regular Price</th>
                <th>thumbnail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM products";
                $products = $conn->query($query);
                if($products->num_rows){
                    while( $product = $products->fetch_assoc()){
                        echo '<tr>';
                        echo '<td>' . $product['pid'] . '</td>';
                        echo '<td>' . $product['product_name'] . '</td>';
                        echo '<td>' . $product['sale_price'] . '</td>';
                        echo '<td>' . $product['regular_price'] . '</td>';
                        echo '<td>' . $product['image'] . '</td>';
                        echo '<td>' . '<a href="?delete=' . $product['pid'] .'">Delete</a>' . '</td>';
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>