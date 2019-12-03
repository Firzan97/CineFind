<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie[]|\Cake\Collection\CollectionInterface $movies
 */
?>
<body class = "indwall">
<div class="movies index large-12 medium-8 columns content">
    <hr>
    <h3 class="nowshowing" align="center"><?= __('Now Showing') ?></h3>
<<<<<<< HEAD

    <table cellpadding="0" cellspacing="0" >
=======
    <table cellpadding="0" cellspacing="0" style = "background-color: rgba(0,0,0,0.7)" >
>>>>>>> f1e7e89c4985ea378e536c7a82c384936878d440
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
                   <td><b><font color = "white"><?= $this->Html->image($movie->image, ['alt' => 'CakePHP','height'=> '100px','width'=>'150px','url'=>['action' => 'view', $movie->id]]); ?>
                       <?=  $this->Text->autoParagraph(h($movie->title));  ?></font></b>
                   </td>        
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
     <h3 class="upcoming" align="center"><?= __('Upcoming') ?></h3>
     <?php

// $curl = curl_init();

// curl_setopt_array($curl, array( 
//   CURLOPT_URL => "https://api.themoviedb.org/3/movie/upcoming?api_key=f95a66d0559620c3e98e6b17a58f31e8&language=en-US&page=1",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_POSTFIELDS => "{}",
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
    
//      //echo $response;}
//      // file_put_contents('nowshowing.json', $$response);
// }

 $str = file_get_contents("nowshowing.json");

$json = json_decode($str, true);


// for($x=0;$x<15;$x++){
//   echo $title= $json['results'][$x]['title']."<br>";
//   echo $title= $json['results'][$x]['overview']."<br>";
//   echo $title= $json['results'][$x]['vote_average']."<br>";
//   echo "https://image.tmdb.org/t/p/w500/".$title= $json['results'][$x]['poster_path'].'"';
//   }
  ?>

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
         
              ?>
            
                 
                   <td><img  src=<?php  echo "https://image.tmdb.org/t/p/w500/".$title= $json['results'][8]['poster_path'];?> height="50px" width="300px" >.<br>
                      <?php echo $title= $json['results'][8]['title']; ?>
                   </td>
            <?php 
          

               ?>
                 <tr></tr>
              <?php  
          
            ?>
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
</body>
