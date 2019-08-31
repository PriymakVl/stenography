<table class="list-rules-categories" width="940">
    <tr>
        <th width="40">№</th>
        <th>Текст</th>
    </tr>
    <? if ($cats): ?>
        <?foreach ($cats as $cat): ?>
            <tr>
                <td>
                    <?=$cat->number?>
                </td>
				<td class="left">
					<a href="/rule/list?id_cat=<?=$cat->id?>"><?=$cat->name?> <span class="green">(<?=$cat->countRules()?>)</span></a>
				</td>
            </tr>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="2" class="red">Нет ничего</td>
        </tr>
    <? endif; ?>
</table>