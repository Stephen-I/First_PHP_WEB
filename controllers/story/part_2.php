<?php

use core\Database;

$heading = "Return of ages past";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$parts = $db->query("select * from `story_sections` where id = 2")->fetch();

$part2Characters = $db->query("select * from `characters` where story_section_id = 2")->fetchAll();

require views("story/part_2.view.php", ["heading" => $heading, "parts" => $parts, "part2Charcters" => $part2Characters]);