<?php

    $response['errorCode'] = '0000';
    $response['errorMessage'] = 'Contact US detail sent';
    $response['content'] =['http://gurukulfame.com/test/images/img_10.jpg', 'http://gurukulfame.com/test/images/img_12', 'http://gurukulfame.com/test/images/img_13.jpg'];

echo json_encode($response);
?>