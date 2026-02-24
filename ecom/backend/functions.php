<?php

session_start();
$db_filename = 'db.php';
require_once( $db_filename );

texas_insert_products();

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
        $regular_price = texas_sanitization($_POST['regular_price']);

        var_dump($_SESSION);

        if( isset($_SESSION) && $_SESSION['validation'] != "passed" ){
            $_SESSION['old_form_data'] = $_POST;
            header("location: http://texas805.test/ecom/backend/");
        }
        else{
            // insert into db
            $sql = "insert into products (product_name, sale_price, regular_price) values ('$name', '$sale_price', '$regular_price')";


            $result = $conn->query($sql);
        
            header("location: http://texas805.test/ecom/backend/");
        }
    }
}

