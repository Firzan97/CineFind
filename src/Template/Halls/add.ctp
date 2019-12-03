<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hall $hall
 */
?>
<style>
    nav{
        border-radius: 10px;
        background-color: rgba(0,0,0,0.5);
    height: 60px;
    border-style: solid;
    border-radius: 20px;
    color: darkolivegreen;
    }
</style>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Halls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seats'), ['controller' => 'Seats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seat'), ['controller' => 'Seats', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="halls form large-9 medium-8 columns content">
    <?= $this->Form->create($hall) ?>
    <fieldset>
        <legend><?= __('Add Hall') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('totalseat');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
