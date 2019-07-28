<!-- css files -->
<link rel="stylesheet" href="/modules/rule/css/list.css">

<div id="content">

    <!-- message -->
    <? include_once('./views/total/message.php'); ?>
	
    <!-- exercise list -->
    <? include_once('exercise.php'); ?>
	
	<!-- menu -->
    <? include_once('menu.php'); ?>

    <!-- pagination -->
    <div class="pagination-wrp">
       <?//= $pagination ? $pagination->links : ''?> 
    </div>
    
</div>

<!-- js files -->



