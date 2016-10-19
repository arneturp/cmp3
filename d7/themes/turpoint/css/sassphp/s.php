<?php
require_once "scss.inc.php";

use Leafo\ScssPhp\Server;

$directory = "stylesheets";

Server::serveFrom($directory);
?>
