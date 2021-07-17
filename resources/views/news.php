<?php
include_once 'menu.php';
?>


<?php foreach ($news as $item): ?>
    <div>
        <a href="<?=route('NewsOne', $item['id'])?>"><?=$item['title']?></a>
    </div>
<?php endforeach ?>



