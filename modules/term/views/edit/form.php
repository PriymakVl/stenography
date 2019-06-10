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
				<option value="<?=Term::TYPE_PART_WORD?>" <? if ($term->type == Term::TYPE_PART_WORD) echo 'selected'?>>Слог</option>
				<option value="<?=Term::TYPE_WORD?>" <? if ($term->type == Term::TYPE_WORD) echo 'selected'?>>Слово</option>
				<option value="<?=Term::TYPE_PHRASE?>" <? if ($term->type == Term::TYPE_PHRASE) echo 'selected'?>>Предложение</option>
			</select>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>