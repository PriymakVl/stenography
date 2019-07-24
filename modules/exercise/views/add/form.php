<div id="form-rule-wrp">
    <h2>Форма для добавления правил</h2>
    <form action="/rule/add" method="post">

		<!-- number-->
		<div class="form-box">
			<label>Номер:</label>
			<input type="text" name="number">
        </div>

		<!-- text -->
        <div class="form-box">
			<label>Текст правила:</label>
			<textarea name="text"></textarea>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>