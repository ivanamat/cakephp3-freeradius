<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Wifi Manager';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title') ?>
    </title>
    <link href="http://<?php echo getenv('SERVER_NAME'); ?>" rel="alternate" hreflang="es" />
    <link href="http://<?php echo getenv('SERVER_NAME'); ?>/en" rel="alternate" hreflang="en" />
        
    <?php echo $this->Html->meta('icon') ?>

    <?php echo $this->Html->css('Freeradius.base.css') ?>
    <?php echo $this->Html->css('Freeradius.cake.css') ?>
    <?php // echo $this->Html->css('Freeradius.tabs'); ?>
    
    <?php echo $this->Html->script('https://code.jquery.com/jquery-3.1.0.min.js'); ?>

    <?php echo $this->fetch('meta') ?>
    <?php echo $this->fetch('css') ?>
    <?php echo $this->fetch('script') ?>
</head>
<body>
    <div class="top-bar expanded" data-topbar>
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?php echo $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </div>
    <?php echo $this->Flash->render() ?>
    <div class="container clearfix">
        <?php echo $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
