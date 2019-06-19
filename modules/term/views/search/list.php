<table class="list-orders" width="940">
    <tr>
        <th width="40">
            <input type="checkbox" disabled>
        </th>
        <th width="120">Наименование</th>
        <th>Обозначение</th>
    </tr>
    <? if ($terms): ?>
        <?foreach ($terms as $term): ?>
            <tr>
                <td>
                    <input type="checkbox" name="term" >
                </td>
                <td>
                    <a href="/term?id_term=<?=$term->id?>"><?=$term->name?></a>
                </td>
				<td>
                    <? if ($term->images): ?>
                    <? foreach ($term->images as $image): ?>
                        <img src="/terms/<?=$image->file?>">&nbsp;&nbsp;
                    <? endforeach; ?>
                    <? else: ?>
                        <span class="red">нет</span>
                    <? endif; ?>            
                </td>
            </tr>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="5" style="color: red;">Слов и фраз нет</td>
        </tr>
    <? endif; ?>
</table>