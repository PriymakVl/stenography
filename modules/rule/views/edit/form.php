<div id="form-rule-wrp">
    <h2>Форма для редактирования правила</h2>
    <form action="/rule/edit?id_rule=<?=$rule->id?>" method="post">

		<!-- number-->
		<div class="form-box">
			<label>Номер:</label>
			<input type="text" name="number" value="<?=$rule->number?>">
        </div>

        <!-- category-->
        <div class="form-box">
            <label>Категория:</label>
            <select name="id_cat" >
                <? foreach ($cats as $cat): ?>
                    <option value="<?=$cat->id?>" <?if ($cat->id == $rule->id_cat) echo 'selected'; ?>><?=$cat->name?></option>
                <? endforeach; ?>
            </select>
        </div>

		<!-- text -->
        <div class="form-box">
			<label>Текст правила:</label>
			<textarea name="text"><?=$rule->text?></textarea>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>