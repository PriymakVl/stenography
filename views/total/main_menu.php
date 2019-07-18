<nav id="main-menu">
    <ul>
		<li>
			<a href="/">Главная</a>
		</li>
        <li>
            <a href="/rule/list">Правила</a>
        </li>
        <!-- Тренажеры -->
        <li class="drop">
            <a href="#">Тренажер</a>
            <div class="dropdownContain">
                <div class="dropOut">
                    <div class="triangle"></div>
                    <ul>
                        <!--
                        <li>
                            <a href="#">Буквы</a>
                        </li>
                        <li>
                            <a href="#">Слоги</a>
                        </li>
                        -->
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_WORD?>">Слова</a>
                        </li>
                        <li>
                            <a href="/term/select?type=<?=Term::TYPE_PHRASE?>">Предложения</a>
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
            <a href="/main/logout">Выйти</a>
        </li>
        <? endif; ?>
    </ul>
</nav>