<?php
$db_filename = 'db.php';
require_once( $db_filename );

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
        <form action="">
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
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
                        echo '<td>' . $product['name'] . '</td>';
                        echo '<td>' . $product['sale_price'] . '</td>';
                        echo '<td>' . $product['regular_price'] . '</td>';
                        echo '<td>' . $product['image'] . '</td>';
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>