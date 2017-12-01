<?php require('_includes/_functions.php') ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Base Front End<?php if (isset($title)) echo ' | ' . $title; ?></title>
        <meta name="description" content="<?php if (isset($description)) echo $description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <!-- bower:css -->
        <!-- endbower -->
        <link rel="stylesheet" href="<?php echo '/assets/dist/'.gulp_rev('css/styles.min.css'); ?>">
    </head>
    <body>

        <header class="site-header" role="banner">
            <!-- Site header goes here -->
        </header>

        <div class="main" role="main">