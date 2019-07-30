<?php 
    $type = $this->session->type ? $this->session->type : Term::TYPE_WORD;
    $hide = $this->session->hide ? $this->session->hide : Term::HIDE_IMG;
?>
<!-- css files -->
<link rel="stylesheet" href="/modules/term/css/list.css">
<link rel="stylesheet" href="/modules/term/css/search.css">

<div id="content">

    <!-- filters of term -->
    <? include_once('filters.php'); ?>

    <!-- term form search -->
    <? include_once('search.php'); ?>

    <!-- message -->
    <? include_once('./views/total/message.php'); ?>
	
    <!-- term list -->
    <? if ($type == Term::TYPE_WORD) include_once('words.php'); ?>
    <? if ($type == Term::TYPE_PHRASE) include_once('fhrase.php'); ?>
	
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
<script src="/modules/term/js/pass_page.js"></script>
<script src="/modules/term/js/sounds_terms.js"></script>


