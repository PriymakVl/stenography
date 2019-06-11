<div id="term-filters-wrp">
	<label>Тип:</label>
    <select id="term-filter-type">
        <option value="<?=Term::TYPE_LETTER?>" <?if ($this->get->type == Term::TYPE_LETTER) echo 'selected'; ?>>Буквы</option>
        <option value="<?=Term::TYPE_PART_WORD?>" <?if ($this->get->type == Term::TYPE_PART_WORD) echo 'selected'; ?>>Слоги</option>
		<option value="<?=Term::TYPE_WORD?>" <?if ($this->get->type == Term::TYPE_WORD) echo 'selected'; ?>>Слова</option>
		<option value="<?=Term::TYPE_PHRASE?>" <?if ($this->get->type == Term::TYPE_PHRASE) echo 'selected'; ?>>Предложения</option>
    </select>
    <label>Скрыть изображения</label>
    <input type="radio" name="hide" value="<?=Term::HIDE_IMG?>" checked>
    <label>Скрыть слова</label>
    <input type="radio" name="hide" value="<?=Term::HIDE_WORD?>">
</div>