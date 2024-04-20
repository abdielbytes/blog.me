<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Post';

$post = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->findOrFail();

require "views/post.view.php";