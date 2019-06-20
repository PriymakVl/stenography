<?php
    $number = 1;
?>
<table class="list-fhrase" width="940">
    <tr>
        <th width="40">№</th>
        <th>Фразы</th>
    </tr>
    <? if ($terms): ?>
        <?foreach ($terms as $term): ?>
            <tr>
                <td rowspan="2">
                    <?=$number?>
                </td>
               <td class="left">
                    <a href="/term?id_term=<?=$term->id?>"><?=$term->name?></a>
                </td>
            </tr>
            <tr>
               <td class="left">
                    <? if ($term->images): ?>
                        <img src="/terms/<?=$term->images[0]->file?>">
                    <? else: ?>
                        <span class="red">Нет</span>
                    <? endif; ?>
                </td>
            </tr>
            <? $number++ ?>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="4" class="red">Нет ничего</td>
        </tr>
    <? endif; ?>
</table>