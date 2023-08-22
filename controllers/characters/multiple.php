<?php

use core\Database;

$heading = "Characters";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$characters = $db->query("select * from `characters`")->fetchAll();



require views("characters/multiple.view.php", ["heading" => $heading, "characters" => $characters]);