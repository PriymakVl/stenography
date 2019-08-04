<!-- css files -->
<link rel="stylesheet" href="/modules/rule/css/list.css">

<div id="content">

    <!-- message -->
    <? include_once('./views/total/message.php'); ?>
	
    <h1>Правила: <span class="green"><?=$cat->name?></span></h1>
    <!-- term list -->
    <? include_once('rules.php'); ?>
	
	<!-- menu -->
    <? include_once('menu.php'); ?>

    <!-- pagination -->
    <div class="pagination-wrp">
       <?= $pagination ? $pagination->links : ''?> 
    </div>
    
</div>

<!-- js files -->



