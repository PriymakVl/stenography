<table class="info-term" width="940">
    <tr>
        <th width="40">№</th>
        <th width="200">Наименование</th>
        <th>Начертание</th>
    </tr>
	<tr>
		<td>1</td>
		<td><?=$term->name?></td>
		<td>
			<? if ($term->images): ?>
				<img src="/web/terms/<?=$term->images[0]->file?>">
			<? else: ?>
				<span class="red">Нет</span>
			<? endif; ?>
		</td>
	</tr>
</table>