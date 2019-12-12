<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav> -->
<style>
    div{ background-color: rgba(0,0,0,0.7);
    width: 80%; margin: 0 auto;
    color: white;
    font-size: 20px;
    padding: 10px;
    font-family:monospace;
    border: 2px solid red;
    border-radius: 12px;
    }
    
</style>
<body class = "viewall">
<div class="movies view large-12 medium-8 columns content">
  <!--  <h3><?= h($movie->title) ?></h3>
     <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movie->id) ?></td>
        </tr>
    </table> -->
    <div class="movieInfo" >
       <?= $this->Html->image($movie->image, ['alt' => 'CakePHP','height'=> '400px','width'=>'500px']); ?>

       <?php if($this->Session->read('Auth.User.role')=="customer"){ ?>
       <h4><?= $this->Html->link(__('Buy'), ['controller' => 'Showtimes', 'action' => 'index', $movie->id]) ?> </h4>
       <?php } ?>

       <h4><?= $this->Html->link(__('Back'), ['controller' => 'Movies', 'action' => 'index', $movie->id]) ?> </h4>
       
    </div>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Budget') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->budget)); ?>
    </div>
    <div class="row">
        <h4><?= __('Rating') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->rating)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Genre') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->genre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Length') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->length)); ?>
    </div>
  <!--   <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->image)); ?>
    </div> -->
   
</div></body>