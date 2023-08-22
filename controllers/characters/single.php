<?php

use core\Database;

$heading = "character";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$character = $db->query("select * from `characters` where id = :id", ["id" => $_GET["id"]])->fetch();

require views("characters/single.view.php", ["heading" => $heading, "character" => $character]);