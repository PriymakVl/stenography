<div id="form-rule-wrp">
    <h2>Форма для добавления примеров правила</h2>
    <form action="/rule/add_examples?id_rule=<?=$rule->id?>" method="post">

		<!-- text -->
        <div class="form-box">
			<label>Примеры правила:</label>
			<textarea name="examples"></textarea>
            <span>Слова перечислять через запятую</span>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>