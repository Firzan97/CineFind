<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hall $hall
 */
?>

<div class="halls view large-1 medium-8 columns content">
    </div>

<div class="halls view large-10 medium-8 columns content">
    <h3 align="center">Thank You!</h3>
    <hr>
    <h3>Total</h3>
    <hr>
    <table class="vertical-table">
       <!--  <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hall->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Total price:') ?></th>
            <td><?= $price; ?></td>
        </tr>
        <tr>
        <th scope="row"><?= __('Price:') ?></th>
        <td><?= $ticket->price; ?></td>
        </tr>
        <tr>
        <th scope="row"><?= __('Number Of Ticket:') ?></th>
        <td><?= $count2; ?></td>
        </tr>
          <tr>
        <th scope="row"><?= __('Seat:') ?></th>
        <td><?= $seat ?></td>
        </tr>
          <tr>
        <th scope="row"><?= __('Name:') ?></th>
        <td><?=$this->Session->read('Auth.User.name'); ?></td>
        </tr>
         <tr>
        <th scope="row"><?= __('Showtime:') ?></th>
        <td><?= $showtime->screentime; ?></td>
        </tr>
         <tr>
        <th scope="row"><?= __('Cinema:') ?></th>
        <td><?= $cinema->company; ?></td>
        </tr>
         <tr>
        <th scope="row"><?= __('Movie:') ?></th>
        <td><?= $movie->title; ?></td>
        </tr>
    </table>
         <?= $this->Html->link(__('Back'), ['controller' => 'Movies', 'action' => 'index']) ?> 

</div>
<div class="halls view large-1 medium-8 columns content">
    </div>