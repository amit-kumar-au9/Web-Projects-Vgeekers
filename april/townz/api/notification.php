<?php
    
    function send_notification($body, $title, $token){
        $apiKey = 'AAAAQXJVG6o:APA91bGrNkt6dg5IBFQy_KxaznsaLL5A_OQHci0m07T5HO-Qk7P3YCewwwTTYUZbcqBbJeJqGkcggEhEEauriLgz-ShJuFljTUOShPTsB85vXcWBQOxHR7WXbal6LGcUB0XhiHunuvoY';
        $url = 'https://fcm.googleapis.com/fcm/send';
        define( 'API_ACCESS_KEY', $apiKey);
        #prep the bundle
        $msg = array(
                'body' => $body,
                'title' => $title
            );
        $fields = array(
                'registration_ids' => $token,
                'notification' => $msg
            );
        $headers = array(
                'Authorization: key='.$apiKey,
                'Content-Type: application/json'
            );
        #Send Reponse To FireBase Server
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, $url );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
    }
    
?>