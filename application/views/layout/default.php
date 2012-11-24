<?php echo doctype('html5'); ?>
<html>
<!--[if lte IE 6]>
<script type="text/javascript" src="/assets/js/supersleight-min.js"></script>
<![endif]-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Colegio Enrique Gusman y Valle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- incluyendo los styles and shortcut icon -->
    <?
        $link = array(
           'href'   => S::url('css/normalize.css'),
           'rel'    => 'stylesheet',
           'type'   => 'text/css',
           'media'  => 'screen'
        );
        echo link_tag($link);
        $link = array(
           'href'   => S::url('css/main.css'),
           'rel'    => 'stylesheet',
           'type'   => 'text/css',
           'media'  => 'screen'
        );
        echo link_tag($link);
        $link = array(
           'href'   => S::url('css/styles.css'),
           'rel'    => 'stylesheet',
           'type'   => 'text/css',
           'media'  => 'screen'
        );
        echo link_tag($link);
        $link = array(
           'href'   => S::url('img/favicon.ico'),
           'rel'    => 'shortcut icon',
           'type'   => 'text/css',
           'media'  => 'screen'
        );
        echo link_tag($link);
        
        
    ?>
    
</head>
<body>
<!-- HEADER-->
<header class="head-general">
    <div class="cnts head-wrap">
        <div class="logo">
            <img src="<?=S::url('img/logo-egv.png')?>"/>
        </div>
        <div class="msg-logo">
            <h1 class="berlin">Colegio Particular "Enrique Guzmán y Valle"</h1>
        </div>
        <hr class="clear">
    </div>
</header>
<!-- NAV : MENU-->
<nav class="main-nav">
    <div class="cnts wrap-menu">
        <? echo $menu;?>
        <!--<div class="social-net">
            <a href="#" class="social-icon face"></a>
            <a href="#" class="social-icon twit"></a>
            <a href="#" class="social-icon goog"></a>
        </div>
    -->
    </div>    
</nav>
<!-- -->    
    {content}
<!-- FOOTER-->

<footer class="footer-egv">
    <div class="cnts">
        <div class="foot-cnt last-foot">
            <h3 class="cooper">"motivandote a alcanzar tus sueños"</h3>
            
        </div>
        <div class="foot-cnt last-foot">
            <h4 class="cooper">Educación en Perú</h4>
            <ul>
                <li><a href="#">Sistema academico</a></li>
                <li><a href="#">Sistema academico2</a></li>
                <li><a href="#">Sistema academico3</a></li>
                <li><a href="#">Sistema acad</a></li>
            </ul>
        </div>
        <div class="foot-cnt last-foot child-right">
            <h4 class="cooper">Sistemas educativos</h4>
            <ul>
                <li><a href="#">Sistema academico</a></li>
                <li><a href="#">Sistema academico2</a></li>
                <li><a href="#">Sistema academico3</a></li>
                <li><a href="#">Sistema acad</a></li>
            </ul>
        </div>
        <div class="foot-cnt last-foot child-right">
            <h4 class="cooper">Sistemas educativos</h4>
            <ul>
                <li><a href="#">Sistema academico</a></li>
                <li><a href="#">Sistema academico2</a></li>
                <li><a href="#">Sistema academico3</a></li>
                <li><a href="#">Sistema acad</a></li>
            </ul>
        </div>
    </div>
    <div class="cnts credits">
        <h6>Copyright &copy; Colegio Particular Enrique Gúzman y Valle</h6>
        <h6>Diseño y desarrollo Reina Elizabeth Condori Cayo y Alfredo Iván Palomino calli</h6>
    </div>
</footer>
  
</body>
</html>