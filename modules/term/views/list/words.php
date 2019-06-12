<table class="list-words" width="940">
    <tr>
        <th width="40">
            <input type="checkbox" disabled>
        </th>
        <th width="200">Наименование</th>
        <th>Изображения</th>
    </tr>
    <? if ($terms): ?>
        <?foreach ($terms as $term): ?>
            <tr>
                <td>
                    <input type="checkbox" name="term" id_term="<?=$term->id?>">
                </td>
                <td style="visibility:<?=($hide == Term::HIDE_WORD)?'hidden':'visible'?>">
                    <a href="/term?id_term=<?=$term->id?>"><?=$term->name?></a>
                </td>
				<td style="visibility:<?=($hide == Term::HIDE_IMG)?'hidden':'visible'?>">
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
            <td colspan="4" class="red">Нет ничего</td>
        </tr>
    <? endif; ?>
</table>