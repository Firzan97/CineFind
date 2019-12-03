<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seat[]|\Cake\Collection\CollectionInterface $seats
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
        <li><?= $this->Html->link(__('New Seat'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Halls'), ['controller' => 'Halls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hall'), ['controller' => 'Halls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seats index large-9 medium-8 columns content">
    <h3><?= __('Seats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('row') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hall_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seats as $seat): ?>
            <tr>
                <td><?= h($seat->id) ?></td>
                <td><?= h($seat->row) ?></td>
                <td><?= $seat->has('hall') ? $this->Html->link($seat->hall->name, ['controller' => 'Halls', 'action' => 'view', $seat->hall->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $seat->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seat->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seat->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
