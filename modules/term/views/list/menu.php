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

        <!-- saunds words all -->
        <? if ($this->get->delay): ?>
            <li><a href="#" id="stop-sounds">Остановить озвучку</a></li>
        <? else: ?>
            <li><a href="#" id="play-sounds">Озвучить все</a></li>
        <? endif; ?>
        
        <!-- sounds words page -->
        <li style="display: none;" id="stop-sounds-page"><a href="#" >Остановить озвучку</a></li>
        <li id="play-sounds-page"><a href="#" >Озвучить страницу</a></li>
    </ul>
</div>