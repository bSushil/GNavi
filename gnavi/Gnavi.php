<?php
namespace GNavi\Api;

use GNavi\Api\GnaviAreaSearchApi;
use GNavi\Api\GnaviRestSearchApi;
use GNavi\Api\GnaviPrefSearchApi;
use GNavi\Api\GnaviCategoryLargeSearchApi;
use GNavi\Api\GnaviCategorySmallSearchApi;

/*require_once __DIR__ . '/GnaviRestSearchApi.php';
require_once __DIR__ . '/GnaviAreaSearchApi.php';
require_once __DIR__ . '/GnaviPrefSearchApi.php';
require_once __DIR__ . '/GnaviCategoryLargeSearchApi.php';
require_once __DIR__ . '/GnaviCategorySmallSearchApi.php';*/

class Gnavi {

    protected $apikey;

    public function __construct($apikey=null) {
        $this->apikey = $apikey;
    }

    public function doRestSearchApi($query=array()) {
        $api = new GnaviRestSearchApi($this->apikey);
        return $api->execute($query);
    }

    public function doAreaSearchApi() {
        $api = new GnaviAreaSearchApi($this->apikey);
        return $api->execute();
    }

    public function doPrefSearchApi() {
        $api = new GnaviPrefSearchApi($this->apikey);
        return $api->execute();
    }

    public function doCategoryLargeSearchApi() {
        $api = new GnaviCategoryLargeSearchApi($this->apikey);
        return $api->execute();
    }

    public function doCategorySmallSearchApi() {
        $api = new GnaviCategorySmallSearchApi($this->apikey);
        return $api->execute();
    }

}
