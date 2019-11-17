<style>
	input[name="sentense"] {
		width: 930px;
		height: 30px;
		margin-bottom: 20px;
	}
</style>

<div>
    <form action="/term/make_sentense" method="post">
        <input type="text" name="sentense" placeholder="Введите строку">
        <input type="submit" value="Создать">
    </form>
</div>

<? if (isset($sentense_arr)): ?>
	<h2>Исходная строка</h2>
	<h1 style="color: red;">
		<?= $sentense_str ?>
	</h1>


	<h2>Результ</h2>
	<p class="sentense-result">
		<? foreach ($sentense_arr as $key => $value): ?>
			<? if ($value): ?>
				<?= $value ?>&nbsp;&nbsp;
			<? else: ?>
				<?= $key ?>&nbsp;&nbsp;
			<? endif; ?>
		<? endforeach; ?>
	</p>
<? endif; ?>