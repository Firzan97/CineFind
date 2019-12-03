<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema $cinema
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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cinema->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cinema->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cinemas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cinemas form large-9 medium-8 columns content">
    <?= $this->Form->create($cinema) ?>
    <fieldset>
        <legend><?= __('Edit Cinema') ?></legend>
        <?php
            echo $this->Form->control('company');
            echo $this->Form->control('map');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
