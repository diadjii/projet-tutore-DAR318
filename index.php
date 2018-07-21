<?php
/**
* To install Neo4j-PHP-Client, we use Composer
*
* $ curl -sS https://getcomposer.org/installer | php
* $ php composer.phar require graphaware/neo4j-php-client
*
*/

require __DIR__.'/vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;

// change to your hostname, port, username, password
$neo4j_url = "bolt://neo4j:partitions-interpreters-eligibility@18.206.233.175:32910";

// setup connection

$client = ClientBuilder::create()
->addConnection('default', $neo4j_url)
->build();



$h = $_GET['id'];

// Most influential followers
$cypher_query = <<<EOQ
MATCH 
(h:Hashtag)<-[:TAGS]-(t:Tweet)<-[:POSTS]-(u:User)-[:FOLLOWS]->(u:User:Me)
WHERE
h.name="$h"
RETURN 
count(t),count(u),t,u 
EOQ;

$params = [];

$result = $client->run($cypher_query, $params);

$liste = [];
$pp = [];
$i = 0; 

foreach ($result->records() as $record) {
    $node =$record->get("count(u)");  
    $node2 =$record->get("count(t)");  
    
    $n = $record->get("u");
    $followers = $n->values()['followers'];
    $name = $n->values()['name'];   
    $pp[$i] = $name;    
    $liste[$i] = [
        "name"      => $name,
        "followers" => $followers,
        "tweets" => 0
    ];  
    
    $i++;  
}

$test = array_count_values($pp);
$k = 0;

for ($i=0; $i < count($liste); $i++) { 
  
        foreach ($test as $k => $v) {
            if($liste[$i]['name'] === $k){
                $liste[$i]['tweets'] = $v;
            }
        }
}

function unique_multidim_array($array, $key) { 
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i]  = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    } 
    return $temp_array; 
} 
$op = unique_multidim_array($liste,'name'); 
$lin = [];
$i = 0;
foreach ($op as $value) {
    $lin[$i] = $value;    
    $i++;        
}
    echo json_encode($lin); 
        
