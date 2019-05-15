<table class="list-terms" width="940">
    <tr>
        <th width="40">
            <input type="checkbox" disabled>
        </th>
        <th width="200">Наименование</th>
        <th>Начертание</th>
    </tr>
    <? if ($terms): ?>
        <?foreach ($terms as $term): ?>
            <tr>
                <td>
                    <input type="checkbox" name="term" id_term="<?=$term->id?>">
                </td>
                <td>
                    <a href="/term?id_term=<?=$term->id?>"><?=$term->name?></a>
                </td>
				<td><?=$term->name?></td>
				<td>
					<? if ($term->images): ?>
						<img src="/web/images/terms/<?=$term->images[0]->file?>">
					<? else: ?>
						<span class="red
					<? endif; ?>
				</td>
            </tr>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="3" class="red">Нет ничего</td>
        </tr>
    <? endif; ?>
</table>