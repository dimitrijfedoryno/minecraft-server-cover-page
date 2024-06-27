<?php

try {
	require_once('MinecraftServer.php');
	$server = new MinecraftServer('srv.fedoryno.cz');
} catch (Exception $e) {
	// handle errors
}
/*
if ($server->online == 1) {
    echo "Server je online (" . $server->numplayers . ")";
} else {
    echo "Server je offline";
};
*/
?>