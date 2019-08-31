<table class="info-rule" width="940">
    <tr>
        <th width="40">№</th>
        <th width="200">Наименование</th>
        <th>Значение</th>
    </tr>
	<!-- number -->
	<tr>
		<td>1</td>
		<td>Номер</td>
		<td class="left"><?=$rule->number?></td>
	</tr>
	<!-- number -->
	<tr>
		<td>2</td>
		<td>Глава</td>
		<td class="left"><?=$rule->category->name?></td>
	</tr>
	<!-- text -->
	<tr>
		<td>3</td>
		<td>Текст</td>
		<td class="left rule-text">
			<?=$rule->text?>
		</td>
	</tr>
	<!-- exemples -->
	<? include 'exemples.php'; ?>
	
</table>