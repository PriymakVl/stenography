<table class="list-words" width="940">
    <tr>
        <th width="40">
            <input type="checkbox" disabled>
        </th>
        <th width="200">Наименование</th>
        <th>Начертание</th>
		<th>Правила</th>
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
				<td class="term-images-td">
					<? if ($term->images): ?>
						<? foreach ($term->images as $image): ?>
							<img src="/web/terms/<?=$image->file?>">&nbsp;&nbsp;
						<? endforeach; ?>
					<? else: ?>
						<span class="red">нет</span>
					<? endif; ?>
				</td>
				<td><span class="red">нет</span></td>
            </tr>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="3" class="red">Нет ничего</td>
        </tr>
    <? endif; ?>
</table>