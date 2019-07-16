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
    </ul>
</div>