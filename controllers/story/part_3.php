<?php

use core\Database;

$heading = "Kizenthia tournament";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$parts = $db->query("select * from `story_sections` where id = 3")->fetch();

require views("story/part_3.view.php", ["heading" => $heading, "parts" => $parts]);