<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showtime $showtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Showtime'), ['action' => 'edit', $showtime->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Showtime'), ['action' => 'delete', $showtime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtime->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Halls'), ['controller' => 'Halls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hall'), ['controller' => 'Halls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cinemas'), ['controller' => 'Cinemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cinema'), ['controller' => 'Cinemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="showtimes view large-9 medium-8 columns content">
    
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Movie') ?></th>
            <td><?= $showtime->has('movie') ? $this->Html->link($showtime->movie->title, ['controller' => 'Movies', 'action' => 'view', $showtime->movie->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hall') ?></th>
            <td><?= $showtime->has('hall') ? $this->Html->link($showtime->hall->name, ['controller' => 'Halls', 'action' => 'view', $showtime->hall->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cinema') ?></th>
            <td><?= $showtime->has('cinema') ? $this->Html->link($showtime->cinema->company, ['controller' => 'Cinemas', 'action' => 'view', $showtime->cinema->id]) : '' ?></td>
        </tr>
    
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($showtime->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Screentime') ?></h4>
        <?= $this->Text->autoParagraph(h($showtime->screentime)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($showtime->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Showtime Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($showtime->tickets as $tickets): ?>
            <tr>
                <td><?= h($tickets->id) ?></td>
                <td><?= h($tickets->price) ?></td>
                <td><?= h($tickets->quantity) ?></td>
                <td><?= h($tickets->showtime_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
