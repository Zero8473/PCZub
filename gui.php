<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="styles/styles.css" type="text/css"/>
        <title>PC und Zubehoer</title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="container">
            <div class="head-container">
                <?php require 'texte/header.php'?>
            </div>
            <div class="body-container">

                <div class="nav-container">

                    <?php require_once 'texte/navi.php'; ?>

                </div>

                <div class="text-container">

                    <div class='text-description'>
                        <!-- load the page corresponding to the link user clicked on -->
                        <?php require_once $path; ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
