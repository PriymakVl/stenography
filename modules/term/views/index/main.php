<!-- css files -->
<link rel="stylesheet" href="/modules/rule/css/index.css">

<div id="content">

    <!-- message -->
    <? include_once('./views/total/message.php'); ?>

    <div style="text-align: center; margin-bottom: 15px;">
    	<a href="/term?id_term=<?=($term->id - 1)?>" class="preview">Предыдущая</a>
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    	<a href="/term?id_term=<?=($term->id + 1)?>" class="preview">Следующая</a>
    </div>

	<!-- info term -->
	<? include_once('info.php'); ?>

    <!-- term menu -->
    <? include_once('menu.php'); ?>

</div>

<!-- js files -->
<script src="/modules/term/js/delete_rule.js"></script>

