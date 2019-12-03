<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seat $seat
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
        <li><?= $this->Html->link(__('Edit Seat'), ['action' => 'edit', $seat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seat'), ['action' => 'delete', $seat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seat'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Halls'), ['controller' => 'Halls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hall'), ['controller' => 'Halls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seats view large-9 medium-8 columns content">
    <h3><?= h($seat->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($seat->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Row') ?></th>
            <td><?= h($seat->row) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hall') ?></th>
            <td><?= $seat->has('hall') ? $this->Html->link($seat->hall->name, ['controller' => 'Halls', 'action' => 'view', $seat->hall->id]) : '' ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Reserve') ?></h4>
        <?= $this->Text->autoParagraph(h($seat->reserve)); ?>
    </div>
</div>
