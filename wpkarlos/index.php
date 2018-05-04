<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>
<body>
<div id="corpo">
    <div id="header">
        <h1>Karlos</h1>
        <h2>Aula de Design</h2>
         
        <ul id="nav">
            <li><a href="#">Página 1</a></li>
            <li><a href="#">Página 2</a></li>
            <li><a href="#">Página 3</a></li>
            <li><a href="#">Página 4</a></li>
        </ul>
    </div>
     
    <div id="conteudo">
        <div id="artigos">
            <div class="artigo">
                <h2>Titulo do artigo 1</h2>
                <p>Postado por administrador em 16/01/2012</p>
                <p>Conteudo do artigo</p>
            </div>
             
            <div class="artigo">
                <h2>Titulo do artigo 2</h2>
                <p>Postado por administrador em 16/01/2012</p>
                <p>Conteudo do artigo</p>
            </div>
        </div>
         
        <div id="sidebar">
            <ul class="widget">
                <h3>Widget</h3>
                <li><a href="#">Página 1</a></li>
                <li><a href="#">Página 2</a></li>
                <li><a href="#">Página 3</a></li>
                <li><a href="#">Página 4</a></li>
            </ul>
         
            <ul class="widget">
                <h3>Widget</h3>
                <li><a href="#">Categoria 1</a></li>
                <li><a href="#">Categoria 2</a></li>
                <li><a href="#">Categoria 3</a></li>
                <li><a href="#">Categoria 4</a></li>
            </ul>
        </div>
    </div>
     
    <div id="footer">
        <p>&copy; 2018 - Todos os Direitos Reservados</p>
    </div>
     
</div>
     
</body>
</html>