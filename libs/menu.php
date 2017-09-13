<?php


$MENU = array(
    'prg3' => array(
        'name' => 'PROG - 3',
        'dir' => 'prg3',
        'desc_head' => 'Basics of PHP and SQL.',
        'desc_text' => 'Slides for lectures <b>PROG - 3</b>',
        'links' => array(
            'lecture1' => 'Lecture 1',
            'lecture2' => 'Lecture 2',

        ),
    ),
    'prg4' => array(
        'name' => 'PROG - 4',
        'dir' => 'prg4',
        'desc_head' => 'Basics of PHP and SQL.',
        'desc_text' => 'Slides for lectures <b>PROG - 4</b>',
        'links' => array(
            'lecture1' => 'Lecture 1',

        ),
    ),
    'sql' => array(
        'name' => 'SQL Basics',
        'dir' => 'sql',
        'desc_head' => 'Basics of SQL language.',
        'desc_text' => 'Slides for lectures <b>Z3104 - Geodatabáze</b>',
        'links' => array(
            'lecture1' => 'Lecture 1',
            'lecture2' => 'Lecture 2',
            'lecture3' => 'Lecture 3',
            'lecture4' => 'Lecture 4',
            'lecture5' => 'Lecture 5',
            'lecture6' => 'Lecture 6',
            'lecture7' => 'Lecture 7',
            'lecture8' => 'Lecture 8',
            'lecture9' => 'Lecture 9',
            'lecture10' => 'Lecture 10',
        ),
    ),
);

/* HERE BE DRAGONS AND SHIT */

function get_head($page)
{
    global $MENU;
    return $MENU[$page]['desc_head'];
}

function get_text($page)
{
    global $MENU;
    return $MENU[$page]['desc_text'];
}

function get_dir($page)
{
    global $MENU;
    return $MENU[$page]['dir'];
}

function render_single_item($menu_item, $active)
{
    $retval = '';
    $retval .= '<li class="dropdown ' . $active . '">';
    $retval .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $menu_item['name'] . ' <span class="caret"></span></a>';
    $retval .= '<ul class="dropdown-menu" role="menu">';
    $retval .= '<li><a href="/' . $menu_item['dir'] . '">Info</a></li>';

    if (count($menu_item['links'])) {
        $retval .= '<li class="divider"></li>';
        foreach ($menu_item['links'] as $key => $value) {
            $retval .= '<li><a href="/' . $menu_item['dir'] . '/' . $key . '.html">' . $value . '</a></li>';
        }
    }
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
    $retval .= '</div>';
    return $retval;
}

function render_js()
{
    $retval = '';
    $retval .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
    $retval .= '<script src="/js/bootstrap.min.js"></script>';
    return $retval;
}

function render_css()
{
    $retval = '';
    $retval .= '<link href="/css/bootstrap.dark.min.css" rel="stylesheet">';
    $retval .= '<link href="/css/bootstrap.theme.css" rel="stylesheet">';

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
