<?php
foreach($menu as $title => $item) { ?>
    <a href="<?=$item['url']?>"><?=$title?></a>
<?php
}