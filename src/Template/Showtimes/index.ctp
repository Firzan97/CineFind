<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showtime[]|\Cake\Collection\CollectionInterface $showtimes
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
      <!--  <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Showtime'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Halls'), ['controller' => 'Halls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hall'), ['controller' => 'Halls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cinemas'), ['controller' => 'Cinemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cinema'), ['controller' => 'Cinemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>-->
    </ul>
</nav>
<div class="showtimes index large-9 medium-8 columns content">
    <h3><?= __('Showtimes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('screen time') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('movie_id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('hall_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cinema_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($showtimes as $showtime): ?>
            <tr>
                <!--<td><?= $this->Number->format($showtime->id) ?></td> -->
                <td><?= h($showtime->date) ?></td>
                <td><?= h($showtime->screentime) ?></td>
                <!--<td><?= $showtime->has('movie') ? $this->Html->link($showtime->movie->title, ['controller' => 'Movies', 'action' => 'view', $showtime->movie->id]) : '' ?></td>-->
                <td><?= $showtime->has('hall') ? $this->Html->link($showtime->hall->name, ['controller' => 'Halls', 'action' => 'view', $showtime->hall->id]) : '' ?></td>
                <td><?= $showtime->has('cinema') ? $this->Html->link($showtime->cinema->company, ['controller' => 'Cinemas', 'action' => 'view', $showtime->cinema->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Select'), ['action' => 'view', $showtime->id]) ?>
                    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $showtime->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $showtime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtime->id)]) ?>-->
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
