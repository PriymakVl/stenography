<nav id="main-menu">
    <ul>
		<li>
			<a href="/">Главная</a>
		</li>
        <li>
            <a href="/rule/category">Правила</a>
        </li>
        <!-- Words -->
        <li class="drop">
            <a href="#">Слова</a>
            <div class="dropdownContain">
                <div class="dropOut">
                    <div class="triangle"></div>
                    <ul>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_WORD?>">Слова</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_SHORT_WORD?>">Короткие слова</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_REPEAT_WORD?>">Повтор. слова</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_PHRASE?>">Фразеограммы</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_SENTENSE?>">Предложения</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        <!-- Letter -->
        <li class="drop">
            <a href="#">Буквы</a>
            <div class="dropdownContain">
                <div class="dropOut">
                    <div class="triangle"></div>
                    <ul>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_LETTER?>">Буквы</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_PART_WORD?>">Часть слова</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_PREFIX_WORD?>">Приставки</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_ROOT_WORD?>">Корни слова</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_END_WORD?>">Окончания</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <? if ($this->session->id_user): ?>
        <li>
            <a href="/exercise/list">Упражнения</a>
        </li>
        <li>
            <a href="/main/search">Поиск</a>
        </li>
        <li>
            <a href="/main/logout">Выйти</a>
        </li>
        <? endif; ?>
        <li>
            <a href="/term/make_sentense">Создать предложение</a>
        </li>
    </ul>
</nav>