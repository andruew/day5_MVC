<h1>List of products</h1>

<?php foreach($data['products'] as $item) {?>
    <div class="product">
        <img src="<?=$item['image']?>" width="100" height="100">
        <div style="clear:both"></div>
        <span class="title"><?=$item['title']?></span> <br/>
        <span class="price"><?=$item['price']?></span>
    </div>
<?php } ?>
