<div class="menu-outside-wrp">
    <ul>
        <? if ($this->session->id_user): ?>
    		<li>
                <a href="/term/add">Добавить термин</a>
            </li>
    		<li>
                <a href="/term/add_list?type=<?=Term::TYPE_WORD?>">Добавить слова</a>
            </li>
            <li>
                <a href="/sound/add_list">Добавить аудио файлы</a>
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
        <li><a href="#" id="pass_page">Перейти на страницу...</a></li>
        <li><a href="#" id="play-sounds">Озвучить слова</a></li>
    </ul>
</div>