<div class="menu-outside-wrp">
    <ul>
		<li>
            <a href="/term/add">Добавить термин</a>
        </li>
		<li>
            <a href="/term/add_list?type=<?=Term::TYPE_WORD?>">Добавить слова</a>
        </li>
        <? if ($hide == Term::HIDE_IMG): ?>
    		<li>
                <a href="#" id="show-images-all">Показать изображения</a>
            </li>
        <? else: ?>
            <li>
                <a href="#" id="show-names-all">Показать слова</a>
            </li>  
        <? endif; ?> 
    </ul>
</div>