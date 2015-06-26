<?php

/**
 * This class sends the notifications through GCM
 *
 * @author Kalpit Pandit <kalpit@inkoniq.com>
 */

class Push {

    protected $apikey; // GCM API key
    
    public function __construct($db){
        $this->apikey = "Your API Key";
    }
    
    /*
     * This Will call GCM url to send notifications
     */
    public function sendGoogleCloudMessage($data) {

        // GCM url 
        $url = 'https://android.googleapis.com/gcm/send';
        
        // Message goes here
        $msg = array(
                'message' => array(
                    'name' => $data['name'],
                    'message' => $data['message'],
                    'location' => $data['location']
                 ) 
               );
        
        // Device id where we want to send notification
        $ids = array($data['apid']);
        
        $post = array(
            'registration_ids' => $ids,
            'data' => $msg,
            'time_to_live' => 15
        );
        
        // Applicaiton registration key
        $headers = array(
            'Authorization: key=' . $this->apikey,
            'Content-Type: application/json'
        );
	
	// Hiting GCM api via CURL..

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            Ajax::error(curl_errno($ch));
        }
        print_r($ch);
        curl_close($ch);
    }

}
