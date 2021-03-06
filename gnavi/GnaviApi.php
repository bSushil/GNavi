<?php
namespace GNavi\Api;

class GnaviApi {
    const API_BASE = "http://api.gnavi.co.jp/";

    protected $apikey;
    
    public function __construct($apikey=null) {
        $this->apikey = $apikey;
    }

    protected function _parseErrorObject($xml) {
        $data = (object) array(
            'error' => (object) array(
                'code' => (string)$xml->error->code,
                'message'=> $xml->error->message
            ),
        );
        return $data;
    }

    protected function _doGet($uri, $query=array()) {
        //var_dump($query);
        $query['keyid'] = $this->apikey;
        $qs = http_build_query($query);
        $url = self::API_BASE . "$uri?$qs";
        $content = file_get_contents($url);
        return $content;
    }
}
