<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie[]|\Cake\Collection\CollectionInterface $movies
 */
?>

<div class="movies index large-12 medium-8 columns content">
    <hr>
    <h3 class="nowshowing" align="center"><?= __('Now Showing') ?></h3>
    <table cellpadding="0" cellspacing="0" >
        <thead>
            <tr>
               <!-- <th scope="col"><?= $this->Paginator->sort('Titles') ?></th>-->
                <th></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
        </thead>
        <tbody>
           <tr>
            <?php
             $a=1; 
              foreach ($movies as $movie): ?>
            
                <!--<td><?=  $this->Text->autoParagraph(h($movie->title));  ?></td> -->
                 
                   <td><?= $this->Html->image($movie->image, ['alt' => 'CakePHP','height'=> '100px','width'=>'150px','url'=>['action' => 'view', $movie->id]]); ?>
                       <?=  $this->Text->autoParagraph(h($movie->title));  ?>
                   </td>

                 <!--<td class="actions">
                    
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movie->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?>
                </td>-->

            
            <?php 
              if($a%6==0)
              { ?>
                 <tr></tr>
              <?php } 

             $a++;
           endforeach; ?>
            </tr>
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
