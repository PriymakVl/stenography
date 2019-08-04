<div id="form-term-wrp">
    <h2>Форма для добавления слов и фраз</h2>
    <form action="/term/add" method="post">
        <!-- term name-->
        <div class="form-box">
			<label>Нименование:</label>
			<input type="text" name="name" required>
		</div>
		
		<!-- type term-->
		<div class="form-box">
			<label>Тип:</label>
			<select name="type">
				 <option value="<?=Term::TYPE_LETTER?>">Буква</option>
				<option value="<?=Term::TYPE_PART_WORD?>">Часть слова</option>
				<option value="<?=Term::TYPE_PREFIX_WORD?>">Приставка или предлог</option>
				<option value="<?=Term::TYPE_ROOT_WORD?>" >Корень слова</option>
				<option value="<?=Term::TYPE_END_WORD?>">Окончание</option>
				<option value="<?=Term::TYPE_WORD?>">Слово</option>
				<option value="<?=Term::TYPE_SHORT_WORD?>">Короткое слово</option>
				<option value="<?=Term::TYPE_REPEAT_WORD?>">Повторяющиеся слова</option>
				<option value="<?=Term::TYPE_PHRASE?>">Фразеограммы</option>
				<option value="<?=Term::TYPE_SENTENSE?>">Предложение</option>
				<option value="<?=Term::TYPE_NUMBER?>">Число</option>
				<option value="<?=Term::TYPE_NAME?>">Собственное имя</option>
			</select>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>