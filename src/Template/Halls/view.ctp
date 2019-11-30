<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hall $hall
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hall'), ['action' => 'edit', $hall->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hall'), ['action' => 'delete', $hall->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hall->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Halls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hall'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seats'), ['controller' => 'Seats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seat'), ['controller' => 'Seats', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="halls view large-9 medium-8 columns content">
    <h3><?= h($hall->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hall->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Totalseat') ?></th>
            <td><?= $this->Number->format($hall->totalseat) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($hall->name)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Seats') ?></h4>
        <?php if (!empty($hall->seats)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Row') ?></th>
                <th scope="col"><?= __('Hall Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hall->seats as $seats): ?>
            <tr>
                <td><?= h($seats->id) ?></td>
                <td><?= h($seats->row) ?></td>
                <td><?= h($seats->hall_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Seats', 'action' => 'view', $seats->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Seats', 'action' => 'edit', $seats->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seats', 'action' => 'delete', $seats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seats->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Showtimes') ?></h4>
        <?php if (!empty($hall->showtimes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Screen Time') ?></th>
                <th scope="col"><?= __('Movie Id') ?></th>
                <th scope="col"><?= __('Hall Id') ?></th>
                <th scope="col"><?= __('Cinema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hall->showtimes as $showtimes): ?>
            <tr>
                <td><?= h($showtimes->id) ?></td>
                <td><?= h($showtimes->date) ?></td>
                <td><?= h($showtimes->screen_time) ?></td>
                <td><?= h($showtimes->movie_id) ?></td>
                <td><?= h($showtimes->hall_id) ?></td>
                <td><?= h($showtimes->cinema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Showtimes', 'action' => 'view', $showtimes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Showtimes', 'action' => 'edit', $showtimes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Showtimes', 'action' => 'delete', $showtimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtimes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
