<?php

$heading = "Return of ages past";

$config = require("config.php");

$db = new Database($config["database"]);

$parts = $db->query("select * from `story_sections` where id = 2")->fetch();

$part2Characters = $db->query("select * from `characters` where story_section_id = 2")->fetchAll();

require "views/story/part_2.view.php";