<?php
include_once 'menu.php';
?>

<div>
    <?php foreach ($news as $item): ?>
        <a href="<?=route('NewsOne', $item['id'])?>"><?=$item['title']?></a>
    <?php endforeach ?>
</div>


