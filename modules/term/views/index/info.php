<table class="info-term" width="940">
    <tr>
        <th width="40">№</th>
        <th width="200">Наименование</th>
        <th>Начертание</th>
    </tr>
	<!-- name -->
	<tr>
		<td>1</td>
		<td>Название</td>
		<td class="left"><?=$term->name?></td>
	</tr>
	<!-- images -->
	<tr>
		<td>2</td>
		<td>Начертание</td>
		<td class="left">
			<? if ($term->images): ?>
				<? foreach ($term->images as $image): ?>
					<img src="/terms/<?=$image->file?>">
				<? endforeach; ?>
			<? else: ?>
				<span class="red">Нет</span>
			<? endif; ?>
		</td>
	</tr>
	<!-- type -->
	<tr>
		<td>3</td>
		<td>Тип</td>
		<td><?=$term->typeString?></td>
	</tr>
	<!-- rules -->
	<tr>
		<td>4</td>
		<td>Правила</td>
		<td>Нет</td>
	</tr>
</table>