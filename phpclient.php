<?php
require_once 'vendor/autoload.php';

use Elastica\Client;
use Elastica\Query;
use Elastica\Query\QueryString;
use Elastica\Search;

$client = new Client();
$index = $client->getIndex('index000');
$type = $index->getType('jdbc');

$search = new Search($client);

$query = new QueryString('クエリー');
$search->setQuery($query);
$resultSet = $search->search();

foreach ($resultSet as $res) {
$d = $res->getData();
print_r( $d );
}
?>

