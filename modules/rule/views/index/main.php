<!-- css files -->
<link rel="stylesheet" href="/modules/rule/css/index.css">

<div id="content">

    <!-- message -->
    <? include_once('./views/total/message.php'); ?>
	
	<!-- links move -->
     <div style="text-align: center; margin-bottom: 15px;">
     	<? if ($rule->id != 1): ?>
	    	<a href="/rule?id_rule=<?=($rule->id - 1)?>" class="preview">Предыдущее</a>
	    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
   		 <? endif; ?>
    	<a href="/rule?id_rule=<?=($rule->id + 1)?>" class="preview">Следующее</a>
    </div>

	<!-- info term -->
	<? include_once('info.php'); ?>

    <!-- term menu -->
    <? include_once('menu.php'); ?>

</div>

<!-- js files -->
<script src="/modules/rule/js/delete_rule.js"></script>

