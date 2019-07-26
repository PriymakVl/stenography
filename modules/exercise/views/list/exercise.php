<table class="list-rules" width="940">
    <tr>
        <th width="40">№</th>
        <th>Название</th>
    </tr>
    <? if ($exercises): ?>
        <?foreach ($exercises as $rule): ?>
            <tr>
                <td>
                    <?=$rule->number?>
                </td>
				<td class="left">
					<a href="/rule?id_rule=<?=$rule->id?>"><?=$rule->text?></a>
				</td>
            </tr>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="2" class="red">Нет ничего</td>
        </tr>
    <? endif; ?>
</table>