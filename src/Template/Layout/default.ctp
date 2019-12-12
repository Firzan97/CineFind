<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CineFind - Buy your ticket here';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><?= $this->Html->link(__('Home'),['controller'=> 'Movies','action' => 'index']); ?></h1>
            </li>
                <!--<h1><a href="CineFind/Movies/index"></a></h1>-->
        </ul>
        <ul class="top-bar-section">
            <ul class="right">
                <?php if($loggedIn) : ?>
                <li><?= $this->Html->link(__('Logout'), ['controller'=>'Users','action' => 'logout']) ?></li>
                <?php if($this->Session->read('Auth.User.role')=="customer") : ?>
                <li><?= $this->Html->link(__('User Profile'), ['controller'=>'Users','action' => 'view',$this->Session->read('Auth.User.id')]) ?>
                <?php endif; ?>
                </li>
                <?php else  : ?>
                <li><?= $this->Html->link(__('Admin'),['controller'=> 'Users','action' => 'adminlogin']); ?></li>
                <li><?= $this->Html->link(__('Customer Login'), ['controller'=>'Users','action' => 'login']) ?></li>
                <li><?= $this->Html->link(__('Register'), ['controller'=>'Users','action' => 'add']) ?></li>
              <?php endif; ?>
                
            </ul>
        </ul>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
