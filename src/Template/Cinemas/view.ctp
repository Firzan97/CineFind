<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema $cinema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cinema'), ['action' => 'edit', $cinema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cinema'), ['action' => 'delete', $cinema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cinema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cinemas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cinema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cinemas view large-9 medium-8 columns content">
   
    <!-- <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cinema->id) ?></td>
        </tr>
    </table> -->
    <div class="row">
        <h4><?= __('Company') ?></h4>
        <?= $this->Text->autoParagraph(h($cinema->company)); ?>
    </div>
    <div class="row">
        <h4><?= __('Map') ?></h4>
       <iframe src=<?php echo "'".$cinema->map."'" ?>. width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        
    </div>
   <!--  <div class="related">
        <h4><?= __('Related Showtimes') ?></h4>
        <?php if (!empty($cinema->showtimes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Screentime') ?></th>
                <th scope="col"><?= __('Movie Id') ?></th>
                <th scope="col"><?= __('Hall Id') ?></th>
                <th scope="col"><?= __('Cinema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cinema->showtimes as $showtimes): ?>
            <tr>
                <td><?= h($showtimes->id) ?></td>
                <td><?= h($showtimes->date) ?></td>
                <td><?= h($showtimes->screentime) ?></td>
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
    </div> -->
</div>
