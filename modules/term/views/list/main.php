<!-- css files -->
<link rel="stylesheet" href="/modules/term/css/list.css">

<div id="content">

    <!-- filters of term -->
    <? include_once('filters.php'); ?>

    <!-- term form search -->
    <? include_once('search.php'); ?>

    <!-- message -->
    <? include_once('./views/total/message.php'); ?>
	
    <!-- term list -->
    <? if ($this->get->type == Term::TYPE_WORD) include_once('words.php'); ?>


</div>

<!-- js files -->


