<?php
    
    function send_notification($body, $title, $token){
        $apiKey = 'AAAADB-253M:APA91bHfI8fYnc5gqtvfnqRCm4_4fITDsy750Q_O_HWOPXNa3a7I1l6XDEhRnr5e-7EC6YVMRKaEhthZJXDN8yI_7YMHbuIC6HslNYpjLLIbUPsdHSQUmIOmbLRbpyft6EUcWofrnHG5';
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