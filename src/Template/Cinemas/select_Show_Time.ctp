<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema[]|\Cake\Collection\CollectionInterface $cinemas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cinema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cinemas index large-9 medium-8 columns content">
    <h3><?= __('Cinemas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?= $this->Text->autoParagraph(h($movie->title)) ?> 

            <?php foreach ($cinemas as $cinema): ?>
            <tr>
                <td>
                    <?= $this->Text->autoParagraph(h($cinema->company)) ?> 
                <table>
                 <tr>
                    <?php foreach ($cinema->showtimes as $showtime): ?>    
                    <td><?= $this->Html->link(_($showtime->screentime),['action'=>'view',$cinema->id])?></td> 
                    <tr></tr>     
                    <?php endforeach; ?>
                   </tr> 
                </td>
                </table>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cinema->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cinema->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cinema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cinema->id)]) ?>
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
