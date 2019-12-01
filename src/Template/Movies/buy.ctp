<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav> -->
<div class="movies view large-12 medium-8 columns content">
  <!--  <h3><?= h($movie->title) ?></h3>
     <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movie->id) ?></td>
        </tr>
    </table> -->
 <!--    <div class="movieInfo" >
       <?= $this->Html->image($movie->image, ['alt' => 'CakePHP','height'=> '400px','width'=>'500px']); ?>
       <?= $this->Html->link(__('Buy'), ['controller' => 'Showtimes', 'action' => 'index']) ?> 
       <h4><?= $this->Form->button('Buy', ['controller'=>'Showtimes','action'=>'index']) ;?></h4>
    </div>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Budget') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->budget)); ?>
    </div>
    <div class="row">
        <h4><?= __('Rating') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->rating)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Genre') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->genre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Length') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->length)); ?>
    </div> -->
  <!--   <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->image)); ?>
    </div> -->
    <div class="related">
        <h4><?= __('Related Showtimes') ?></h4>
        <?php if (!empty($movie->showtimes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Screentime') ?></th>
                <th scope="col"><?= __('Movie') ?></th>
                <th scope="col"><?= __('Hall Id') ?></th>
                <th scope="col"><?= __('Cinema') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php
            $place2=1;
            foreach ($movie->showtimes as $showtimes): 
            $place1=$showtimes->cinema_id;                ?>
            <tr>
                <!--<td><?= h($showtimes->id) ?></td>-->
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

                <?php 
                
                   if($showtimes->cinema_id!=$place2)
                   {
                    $place2=$showtimes->cinema_id;                    ?>
                    <tr></tr>
               <?php
                   }
                ?>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>