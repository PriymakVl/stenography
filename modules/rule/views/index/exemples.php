<tr>
	<td>4</td>
	<td>Примеры</td>
	<td class="left rule-examples">
		<? if ($rule->examples): ?>
			<? foreach ($rule->examples as $example): ?>
				<div>
					<span><?=$example->name?></span>&nbsp; &nbsp; 
					<? if ($example->images): ?>
						<? foreach ($example->images as $img): ?>
							<img height="50" src="/terms/<?=$img->file?>">
						<? endforeach; ?>
					<? endif; ?>
				</div>
			<? endforeach; ?>
		<? else: ?>
			<span class="red">Нет</span>
		<? endif; ?>
	</td>
</tr>