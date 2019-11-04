<div class="menu-outside-wrp">
    <ul>
        <? if ($this->session->id_user): ?>
    		<li>
                <a href="/rule/edit?id_rule=<?=$rule->id?>">Редакт-ть правило</a>
            </li>
            <li>
                <a href="#" id_rule="<?=$rule->id?>" id="delete-rule">Удалить правило</a>
            </li>
    		<li>
                <a href="/rule/add_examples?id_rule=<?=$rule->id?>">Добавить примеры</a>
            </li>
        <? endif; ?>
        <li><a href="#" id="hide-images">Скрыть изображ.</a></li>
        <li><a href="#" id="hide-words">Скрыть слова</a></li>
        <li style="display: none;" id="stop-sounds"><a href="#" >Остановить озвучку</a></li>
        <li id="play-sounds"><a href="#" >Озвучить слова</a></li>
    </ul>
</div>