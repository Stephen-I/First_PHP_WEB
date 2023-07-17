<?php

$heading = "character";

$config = require("config.php");

$db = new Database($config["database"]);

$character = $db->query("select * from `characters` where id = :id", ["id" => $_GET["id"]])->fetch();

require "views/character.view.php";