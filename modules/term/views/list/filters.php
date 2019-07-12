<?
    $type_terms = Term::convertType($this->session->type);
?>
<div id="term-filters-wrp">
	<span>Тип: </span><span style="color:green;"><?=$type_terms?></span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label>Скрыть изображения</label>
    <input type="radio" name="hide" value="<?=Term::HIDE_IMG?>" <?=($hide==Term::HIDE_IMG)?'checked':''?>>
    &nbsp;&nbsp;&nbsp;
    <label>Скрыть слова</label>
    <input type="radio" name="hide" value="<?=Term::HIDE_WORD?>" <?=($hide==Term::HIDE_WORD)?'checked':''?>>
</div>