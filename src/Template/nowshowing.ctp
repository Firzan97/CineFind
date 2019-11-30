
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie[]|\Cake\Collection\CollectionInterface $movies
 */

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.themoviedb.org/3/movie/now_playing?api_key=f95a66d0559620c3e98e6b17a58f31e8&language=en-US&page=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{}",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    
    $response;
  
}
 
$json = json_decode($response, true);
// for($x=0;$x<15;$x++){
// 	echo $title= $json['results'][$x]['title']."<br>";
// 	echo $title= $json['results'][$x]['overview']."<br>";
// 	echo $title= $json['results'][$x]['vote_average']."<br>";
// 	}

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="movies index large-9 medium-8 columns content">
<h3><?= __('Now Showing') ?></h3>
 <table>
 	<?=  $this->Html->tableHeaders(['Title', 'Rating']); ?>
<?php for($x=0;$x<10;$x++){ ?>
<?= $this->Html->tableCells([
    [$json['results'][$x]['title'],$json['results'][$x]["vote_average"],],
]); }?>

</table>
</div>
