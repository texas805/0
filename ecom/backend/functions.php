<?php

session_start();
$db_filename = 'db.php';
require_once( $db_filename );

texas_insert_products();
texas_delete_products();

function texas_sanitization($data){
    $data = htmlspecialchars($data);
    return $data;
}

function texas_validation($name, $data, $rules = []){
    if( in_array('is_required', $rules) ){
        if( empty($data) ){
            $_SESSION['validation'] = [
                "status" => "failed",
                "message" => "$name is Empty"
            ];
            return false;
        }
    }

    $_SESSION['validation'] = 'passed';

    return true;
}

function texas_insert_products(){

    global $conn;

    if( isset( $_POST['add_priduct_submit'] ) ){
        // Insert into database
        $name = texas_validation('name', texas_sanitization($_POST['name']), ['is_required'] );
        $sale_price = texas_sanitization($_POST['sale_price']);
        if(empty($sale_price)){
            $sale_price = 0;
        }
        $regular_price = texas_sanitization($_POST['regular_price']);

        var_dump($_SESSION);

        if( isset($_SESSION) && $_SESSION['validation'] != "passed" ){
            $_SESSION['old_form_data'] = $_POST;
            header("location: http://texas805.test/ecom/backend/");
        }
        else{
            // insert into db
            $sql = "insert into products (product_name, sale_price, regular_price) values ('$name', '$sale_price', '$regular_price')";


            var_dump($sale_price);  
            $result = $conn->query($sql);
        
            header("location: http://texas805.test/ecom/backend/");
        }
    }
}

function fetch_products(){
    global $conn;
    $query = "SELECT * FROM products";
    $products = $conn->query($query);

    return $products;
}

function texas_delete_products(){
    if( isset($_GET['delete']) && $_GET['delete'] ){
        $sql = 'delete from products where pid = ' . $_GET['delete'];
        global $conn;
        $res = $conn->query($sql);

        header("location: http://texas805.test/ecom/backend/");
    }
}

function texas_price_html($regular_price, $sale_price = false ){
    ob_start();
    ?>
    <div class="product_price_wrapper">
        <div class="regular_price <?php echo ($sale_price) ? 'has_sale_price' : '' ?>"><?php echo '$' . $regular_price; ?></div>
        <?php 
        if($sale_price) {
            echo '<div class="sale_price">' . '$' . $sale_price . '</div>';
        } 
        ?>
    </div>
    <?php
    return ob_get_clean();
}