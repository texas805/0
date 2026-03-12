<?php
if( isset($_POST['action']) && $_POST['action'] == 'formsubmit' ){

    $result = [
        'status' => 'success',
        'message' => 'Data Received Successfully',
        'color' => 'black'
    ];

    if( 'female' === $_POST['gender'] ){
        $result['color'] = 'pink';
    }

    echo json_encode($result);
    die();
}