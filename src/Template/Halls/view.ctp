<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hall $hall
 */
?>

<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
=======
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
>>>>>>> f1e7e89c4985ea378e536c7a82c384936878d440
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
</nav> -->
<div class="halls view large-1 medium-8 columns content">
    </div>

<div class="halls view large-10 medium-8 columns content">
    <h3>Hall <?= h($hall->name) ?></h3>
    <table class="vertical-table">
       <!--  <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hall->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Total seat free:') ?></th>
            
           
            <?php 
             $count=0;
             foreach ($hall->seats as $seats):
              if($seats->reserve=="yes")

                $count++;
               endforeach; ?>



            
            
            <td><?= 50-$count; ?></td>
        </tr>
        <tr>
        <th scope="row"><?= __('Total seat reserve:') ?></th>
        <td><?= $count; ?></td>
        </tr>
        <tr>
        <th scope="row"><?= __('Total seat :') ?></th>
        <td>50</td>
        </tr>
    </table>
<!--     <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($hall->name)); ?>
    </div> -->
    <div class="related">
        <h4><?= __('Related Seats') ?></h4>
        <?php if (!empty($hall->seats)): ?>
        <table cellpadding="0" cellspacing="0" >
          <!--   <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Row') ?></th>
                <th scope="col"><?= __('Hall Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr> -->
            <tr>
                <tr>
                    <td colspan="12" bgcolor="GREY"><h2 align="center">SCREEN</h2></td>

                </td></td>
                </tr>
                 <tr>
                    <td colspan="12"></td>
                </tr>
            <?php 
            $count1=1;
            $count2=0;
            foreach ($hall->seats as $seats):
            
            
                if($seats->reserve=="yes")
                {
                 $count2++;
             ?>
               
                <td >
                    <?= $this->Html->image("/img/chair2.png", ['alt' => 'CakePHP']); ?>
                    <?= $seats->id ?>
                </td>

               <!--  <td><?= h($seats->row) ?></td>
                <td><?= h($seats->hall_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Seats', 'action' => 'view', $seats->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Seats', 'action' => 'edit', $seats->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seats', 'action' => 'delete', $seats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seats->id)]) ?>
                </td> -->
            

            <?php 
             }
             
             else{
                ?>
                <td ><?= $this->Html->image("/img/chair.png", ['alt' => 'CakePHP']); ?> <?= $seats->id ?></td>
       

                <?php
             }
              if($count1==2 || $count1==12 || $count1==22 || $count1==32 || $count1==42)
              {?>
                <td ></td>
            <?php  }
            if($count1==8 || $count1==18 || $count1==28 || $count1==38 || $count1==48)
            {
               {?>
                <td ></td>
            <?php  }
            }
            if($count1==10 || $count1==20 || $count1==30 || $count1==40 || $count1==50)
                {?>
               <tr></tr>
            <?php }
           $count1++;
            endforeach; ?>
            </tr>
        </table>
        <?php endif; ?>

        <?= $this->Form->create('halls',array('controller'=>'halls','action'=>'buy',$hall->id)) ?>
        
        <?= $this->Form->text('Seat', ['class' => 'seat']); ?>
        
         <?= $this->Form->hidden( 'hallid', array( 'type' => 'number','value'=>$hall->id) ); ?>
        <?= $this->Form->hidden( 'showtimeid', array( 'type' => 'number','value'=>$showtimeid) ); ?>

        <?= $this->Form->button("Buy",array('class'=>'btn')) ;?>
        <?= $this->Form->end() ?>

    </div>
   <!--  <div class="related">
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
    </div> -->
</div>
<div class="halls view large-1 medium-8 columns content">
    </div>