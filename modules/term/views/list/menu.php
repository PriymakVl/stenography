<div class="menu-outside-wrp">
    <ul>
        <? if ($this->session->id_user): ?>
    		<li>
                <a href="/term/add">Добавить термин</a>
            </li>
    		<li>
                <a href="/term/add_list?type=<?=Term::TYPE_WORD?>">Добавить слова</a>
            </li>
        <? endif; ?>
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