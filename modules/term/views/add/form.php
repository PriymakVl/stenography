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
				 <option value="<?=Term::TYPE_LETTER?>">Буквы</option>
				<option value="<?=Term::TYPE_PART_WORD?>">Слоги</option>
				<option value="<?=Term::WORD?>">Слова</option>
				<option value="<?=Term::TYPE_PHRASE?>">Предложения</option>
			</select>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" id="add-order" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>