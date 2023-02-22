<?php 
// variable data 
$page_title;
$style_sheet;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mahinul Abid"/>
    <meta name="description" content="Buy books online, anywhere from the world."/>
    <meta name="keyword" content="Knigi, Knigi books sell, Knigi Online Bookshop">

    <meta property="og:title" content=<?php echo $page_title ?> />
    <meta property="og:description" content="Buy books online, anywhere from the world." />
    <meta property="og:image" content="./app/img/favicon.png" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Typescript, SaSS">
    <title><?php echo $page_title ?></title>
    <link rel="icon" href="./app/img/favicon.png">

    <link rel="stylesheet" href=<?php echo $style_sheet; ?>>

    <!-- google web fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet">
</head>