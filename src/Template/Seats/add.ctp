<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seat $seat
 */
?>
<style>
    nav{
        border-radius: 10px;
        background-color: rgba(0,0,0,3);
    height: 60px;
    border-style: solid;
    border-radius: 20px;
    color: darkolivegreen;
    }
</style>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Seats'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Halls'), ['controller' => 'Halls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hall'), ['controller' => 'Halls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seats form large-9 medium-8 columns content">
    <?= $this->Form->create($seat) ?>
    <fieldset>
        <legend><?= __('Add Seat') ?></legend>
        <?php
            echo $this->Form->control('row');
            echo $this->Form->control('hall_id', ['options' => $halls]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
