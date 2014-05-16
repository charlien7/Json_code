<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar</title>
    <link rel="stylesheet" href="<?php asset_url(); ?>css/vendor/normalize.css">
    <link rel="stylesheet" href="<?php asset_url(); ?>css/vendor/foundation.min.css">
    <link rel="stylesheet" href="<?php asset_url(); ?>css/main.css">
    <script src="<?php asset_url(); ?>js/vendor/modernizr.js"></script>
</head>
<body>
    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1><a href="#">Site Name</a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                    <li class="active"><a href="#">Menu Option</a></li>
                    <li><a href="#">Menu Item</a></li>
                    <li><a href="#">Another Item</a></li>
                </ul>
            </section>
        </nav>
    </div>
    <div class="row">
        <div class="columns">
          <h3>Bienvenido</h3>
          <table id="users" class="full-width">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody id="users-body">
                        
                    </tbody>
                </table>    



        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php asset_url(); ?>js/vendor/jquery.js"><\/script>')</script>
    <script src="<?php asset_url(); ?>js/vendor/foundation.min.js"></script>
    <script src="<?php asset_url(); ?>js/vendor/foundation.topbar.js"></script>
    <script src="<?php asset_url(); ?>js/vendor/foundation.dropdown.js"></script>
    <script>$(document).foundation();</script>
    <script src="<?php asset_url(); ?>js/main.js"></script>
</body>
</html>