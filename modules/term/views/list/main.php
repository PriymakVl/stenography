<?php 
    $type = $this->session->type ? $this->session->type : Term::TYPE_WORD;
    $hide = $this->session->hide ? $this->session->hide : Term::HIDE_IMG;
?>
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
    <? if ($type == Term::TYPE_WORD) include_once('words.php'); ?>
	
	<!-- menu -->
    <? include_once('menu.php'); ?>

    <!-- pagination -->
    <div class="pagination-wrp">
       <?= $pagination ? $pagination->links : ''?> 
    </div>
    
</div>

<!-- js files -->
<script src="/modules/term/js/show_term.js"></script>
<script src="/modules/term/js/set_options.js"></script>


