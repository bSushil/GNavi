# Client for gnavi

Yii2 library for gnavi.co.jp based upon https://github.com/fukata/php-gnavi

## How to

    use GNavi\Api;

    $apikey = 'Your API KEY';
    $query = array(
        'name' => 'ワイン',
    );
    $gnavi = new Gnavi($apikey);
    $data = $gnavi->doRestSearchApi($query);

    if ( isset( $data->error ) ) {
        // error
    } else {
        // success
        foreach ( $data->rest as $r ) {
            print("name: " . $r->name);
        }
    }

Please access gnavi api list for further informaiton.

## Licence

Apache Licence 2.0
