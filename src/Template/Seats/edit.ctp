<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seat $seat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seat->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Seats'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Halls'), ['controller' => 'Halls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hall'), ['controller' => 'Halls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seats form large-9 medium-8 columns content">
    <?= $this->Form->create($seat) ?>
    <fieldset>
        <legend><?= __('Edit Seat') ?></legend>
        <?php
            echo $this->Form->control('row');
            echo $this->Form->control('hall_id', ['options' => $halls]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
