<?php

$heading = "Characters";

$config = require("config.php");

$db = new Database($config["database"]);

$characters = $db->query("select * from `characters`")->fetchAll();



require "views/characters.view.php";