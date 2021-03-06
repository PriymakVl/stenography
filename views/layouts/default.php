<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
    <link rel="stylesheet" href="/web/css/total/reset.css">
    <link rel="stylesheet" href="/web/css/total/table.css">
    <link rel="stylesheet" href="/web/css/total/template.css">
    <link rel="stylesheet" href="/web/css/total/main_menu.css">
    <link rel="stylesheet" href="/web/css/total/menu_outside.css">
    <link rel="stylesheet" href="/web/css/total/pagination.css">
    <link rel="stylesheet" href="/web/css/total/jquery-ui.css">
    <script src="/web/js/jquery-3.3.1.min.js"></script>
    <script src="/web/js/jquery-ui.js"></script>
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36891583-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36891583-2');
</script>

    <div id="container">
        <!-- main menu -->
        <? include_once('./views/total/main_menu.php'); ?>

        <!-- content -->
        <div id="content-wrp">
            <? include_once($content) ;?>
        </div>

        <!-- footer -->
        <? include_once('./views/total/footer.php'); ?>
    </div>
    <div id="fade" style="display: none;" class="black-overlay"></div>
</body>
</html>