<?php

$MENU = array(
    'prg3' => array(
        'name' => 'PROG - 3',
        'dir' => 'prg3',
        'desc_head' => 'PROG 3.A',
        'desc_text' => 'Prezentace pro 3.A'),
    'prg4' => array(
        'name' => 'PROG - 4',
        'dir' => 'prg4',
        'desc_head' => 'PROG 4.A',
        'desc_text' => 'Prezentace pro 4.A'),
    'sql' => array(
        'name' => 'SQL Basics',
        'dir' => 'sql',
        'desc_head' => 'SQL',
        'desc_text' => 'SQL Basics')
);

/* HERE BE DRAGONS AND SHIT */

function get_formated_file_list($dir_name) {
    $retval = "";

    $files = scandir('./'.$dir_name);
    natsort($files);

    if (count($files) > 2) {
        foreach ($files as $file) {
            if (preg_match("/.*.html/", $file)){
                $file_text = file_get_contents($dir_name.'/'.$file, 'r');
                preg_match("/<title>.*</", $file_text, $title);

                $retval .= '<li><a href="./' . $dir_name . '/' . $file . '" >' . strip_tags($title[0]). '</a></li>';
            }

        }
    }

    return $retval;
}

function render_single_item($menu_item, $active)
{
    $retval = '';
    $retval .= '<li class="dropdown ' . $active . '">';
    $retval .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $menu_item['name'] . ' <span class="caret"></span></a>';
    $retval .= '<ul class="dropdown-menu" role="menu">';
    $retval .= '<li><a href="./' . $menu_item['dir'] . '">Info</a></li>';
    $retval .= '<li class="divider"></li>';



    $retval .= get_formated_file_list($menu_item['dir']);

    $retval .= '</ul>';
    $retval .= '</li>';
    return $retval;
}

function render_menu($page)
{
    global $MENU;
    $retval = '';
    $retval .= '
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Slides</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">';
    foreach ($MENU as $key => $menu_item) {
        $active = '';
        if ($key == $page)
            $active = 'active';
        $retval .= render_single_item($menu_item, $active);
    }

    $retval .= '</ul>
  </div><!--/.nav-collapse -->
  </div>
  </div>';
    return $retval;
}

function render_jumbotron($name)
{
    global $MENU;
    $retval = '';
    $retval .= '<div class="jumbotron">';
    $retval .= '<h1>' . $MENU[$name]['desc_head'] . '</h1>';
    $retval .= '<p class="leading">' . $MENU[$name]['desc_text'] . '</p>';
    $retval .= '<ul>';
    $retval .=  get_formated_file_list('../'.$MENU[$name]['dir']);
    $retval .= '</div>';
    return $retval;
}

function render_js()
{
    $retval = '';
    $retval .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
    $retval .= '<script src="./js/bootstrap.min.js"></script>';
    return $retval;
}

function render_css()
{
    $retval = '';
    $retval .= '<link href="./css/bootstrap.dark.min.css" rel="stylesheet">';
    $retval .= '<link href="./css/bootstrap.theme.css" rel="stylesheet">';

    $retval .= '
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->';

    return $retval;
}

function render_meta()
{
    $retval = '';
    $retval .= '<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Pavel Grochal">';

    return $retval;
}

function render_footer(){
    $retval = "";
    $retval .= '<div class="pull-right navbar-fixed-bottom">
        <div class="pull-right" style="margin: 5px">
        Credits to: Pavel Grochal
    </div>
    </div>';

    return $retval;
}
