<div id="form-term-wrp">
    <h2>Форма для редактирования слов и фраз</h2>
    <form action="/term/edit?id_term=<?=$term->id?>" method="post">
        <!-- term name-->
        <div class="form-box">
			<label>Нименование:</label>
			<input type="text" name="name" value="<?=$term->name?>" required>
		</div>
		
		<!-- type term-->
		<div class="form-box">
			<label>Тип:</label>
			<select name="type">
				<option value="<?=Term::TYPE_LETTER?>" <? if ($term->type == Term::TYPE_LETTER) echo 'selected'?>>Буква</option>
				<option value="<?=Term::TYPE_PART_WORD?>" <? if ($term->type == Term::TYPE_PART_WORD) echo 'selected'?>>Часть слова</option>
				<option value="<?=Term::TYPE_PREFIX_WORD?>" <? if ($term->type == Term::TYPE_PREFIX_WORD) echo 'selected'?>>Приставка или предлог</option>
				<option value="<?=Term::TYPE_ROOT_WORD?>" <? if ($term->type == Term::TYPE_ROOT_WORD) echo 'selected'?>>Корень слова</option>
				<option value="<?=Term::TYPE_END_WORD?>" <? if ($term->type == Term::TYPE_END_WORD) echo 'selected'?>>Окончание</option>
				<option value="<?=Term::TYPE_WORD?>" <? if ($term->type == Term::TYPE_WORD) echo 'selected'?>>Слово</option>
				<option value="<?=Term::TYPE_SHORT_WORD?>" <? if ($term->type == Term::TYPE_SHORT_WORD) echo 'selected'?>>Короткое слово</option>
				<option value="<?=Term::TYPE_REPEAT_WORD?>" <? if ($term->type == Term::TYPE_REPEAT_WORD) echo 'selected'?>>Повторяющиеся слова</option>
				<option value="<?=Term::TYPE_PHRASE?>" <? if ($term->type == Term::TYPE_PHRASE) echo 'selected'?>>Фразеограммы</option>
				<option value="<?=Term::TYPE_SENTENSE?>" <? if ($term->type == Term::TYPE_PHRASE) echo 'selected'?>>Предложение
				</option>
				<option value="<?=Term::TYPE_NUMBER?>" <? if ($term->type == Term::TYPE_PHRASE) echo 'selected'?>>Число</option>
				<option value="<?=Term::TYPE_NAME?>" <? if ($term->type == Term::TYPE_PHRASE) echo 'selected'?>>Собственное имя
				</option>
			</select>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>