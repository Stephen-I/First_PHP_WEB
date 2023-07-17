<?php

$heading = "Give us your opinion";

$config = require("config.php");

$db = new Database($config["database"]);

$reviews = $db->query("select * from `reviews`")->fetchAll();

require "views/reviews.view.php";