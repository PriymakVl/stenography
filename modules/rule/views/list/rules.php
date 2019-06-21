<table class="list-rules" width="940">
    <tr>
        <th width="40">Номер</th>
        <th>Текст</th>
    </tr>
    <? if ($rules): ?>
        <?foreach ($rules as $rule): ?>
            <tr>
                <td>
                    <a href="/rule?id_rule=<?=$rule->id?>"><?=$rule->number?></a>
                </td>
				<td class="left">
					<?=$rule->text?>
				</td>
            </tr>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="2" class="red">Нет ничего</td>
        </tr>
    <? endif; ?>
</table>