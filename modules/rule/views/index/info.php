<table class="info-term" width="940">
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
	<!-- text -->
	<tr>
		<td>2</td>
		<td>Текст</td>
		<td class="left">
			<?=$rule->text?>
		</td>
	</tr>
	<!-- exemples -->
	<tr>
		<td>3</td>
		<td>Примеры</td>
		<td class="left">
			<? if ($rule->examples): ?>
				<? foreach ($rule->examples as $example): ?>
					<span><?$example->name?></span>
					<img height="50" src="/terms/<?=$exemple->file?>">
				<? endforeach; ?>
			<? else: ?>
				<span class="red">Нет</span>
			<? endif; ?>
		</td>
	</tr>
</table>