<?
echo 'phpのテストです。<br>';

$dbinfo = parse_url(getenv('DATABASE_URL'));

echo '<pre>'.var_dump($dbinfo).'</pre>';

phpinfo();
?>
