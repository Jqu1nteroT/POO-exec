<?php

class Html {

	private $css;
	private $img;
	private $link;
	private $js;

	function css ($css){
		return '<link rel="stylesheet" href='.$css.'>';
	}
	function meta ($Name,$content){
		return '<meta name='.$Name.' content='.$content.'>';
	}
	function img ($img){
		return '<img src='.$img.' alt="Nom de la image">';
	}
	function link($link){
		return '<a href='.$link.'>lian</a>';
	}
	function js($js){
		return '<script src='.$js.'></script>';
	}

}

$html = new Html();
	$html->css('/view/css/style.css');
	$html->meta('Author','Pablo');
	echo $html->img('http://imagenesparapeques.com/wp-content/uploads/2015/06/jUgoWvHSLnVhv.png');
	$html->link('wwww.example.com');
	$html->js('/view/js/scripts.js')
?>