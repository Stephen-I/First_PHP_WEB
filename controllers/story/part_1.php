<?php

use core\Database;

$heading = "Chronicles of the black dragon";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$parts = $db->query("select * from `story_sections` where id = 1")->fetch();

$part1Characters = $db->query("select * from `characters` where story_section_id = 1")->fetchAll();

require views("story/part_1.view.php", ["heading" => $heading, "parts" => $parts, "part1Charcters" => $part1Characters]);