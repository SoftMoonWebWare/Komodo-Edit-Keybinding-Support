<!DOCTYPE html>
<html><!-- HTML5  -->
<head>
<meta charset='UTF-8'>
<meta name='x-generator' content="SoftMoon-WebWare's convert_keybindings_table.php">
<title>Komodo keybindings by key</title>
<style>
body {
	color: black;
	background-color: white;
	padding-top: 2em; }
header {
	margin-left: 2.618em; }
header p {
	display: none; }
header h1 {
	margin-left: 1em; }
aside {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 1.2em;
	margin: 0;
	overflow: hidden;
	color: black;
	background-color: white;
	border-bottom: 2px solid;
	z-index: 3142; }
aside:hover {
	height: auto;
	padding-bottom: .618em;
	z-index: 6180; }
aside h4 {
	margin: 0;
	padding: 0;
	text-align: center; }
aside h4 + nav {
	border-bottom: 1px dotted gray;
	padding-bottom: .382em;
	margin-bottom: .382em; }
nav li {
	display: inline;
	padding: 0 1em;
	white-space: nowrap; }
a:hover {
	color: red; }
aside + aside {
	top: 1.618em;
	width: 0;
	height: 7.618em;
	border-bottom: none;
	border-right: 2px solid;
	padding-left: 1.2em; }
aside + aside:hover {
	width: auto;
	height: auto;
	min-height: 7.618em;
	max-height: 90%;  /*for Presto*/
	max-height: calc(100% - 2.162em);
	overflow: auto;
	padding-right: .618em; }
aside + aside h4 {
	position: absolute;
	top: 3.382em;
	left: -2.82em;
	transform: rotate(270deg);
	-webkit-transform: rotate(270deg);
	-ms-transform: rotate(270deg);
	white-space: nowrap; }
aside + aside label {
	display: block;
	white-space: nowrap; }
h2 {
	margin: 1.618em 0 .618em 2.618em; }
kbd span {
	display: inline-block;
	position: static;
	border: 1px solid #8080FF;
	border-bottom: 2px solid #404080;
	border-right: 2px solid #404080;
	border-radius: 1.618em / 2em;
	color: white;
	background-color: black;
	font-weight: bold;
	text-align: center; /* ignored when in a justified <p> */
	margin: 0 .27em;
	padding: 0 .618em;  }
.tr {
	margin: 1.618em;
	border-bottom: 1px solid; }
kbd.th span {
	font-size: 2em;
	color: yellow;
	margin: 1em 0 .618em; }
.td {
	margin-right: 4em;
	position: relative;
	border-bottom: 1px dotted gray; }
.td kbd,
.td > span:first-child,
.td ul {
	display: inline-block;
	width: 13rem;
	padding: 0;
	margin: 0;
	vertical-align: middle; }
.td ul {
	width: auto;
	margin-left: 1.618em; }
.td li {
	min-height: 1.2em;
	padding: 0;
	margin: 0;
	vertical-align: text-bottom; }
.td ul kbd span {
	color: yellow; }
.td ul .cat {
	display: inline-block;
	width: 6.18em;
	margin-right: 1em; }
.td ul li.combo_clash kbd,
.td ul li.combo_clash .cat,
.double_bind .cat {
	color: white;
	background-color: darkRed; }
.file1 {background-color: lightcyan;}
.file2 {background-color: lightgreen;}
.file3 {background-color: lightyellow;}
.file4 {background-color: lightorange;}
.file5 {background-color: lightred;}
.file6 {background-color: lightviolet;}
.file7 {background-color: lightindigo;}
.file1,
.file2,
.file3,
.file4,
.file5,
.file6,
.file7 {
	color: black;
	font-weight: bold;
	border: 1px solid;
	border-radius: .618em;
	margin: 0 .162em; }

#show_cats table {
	margin: 0 1.618em;
	border: 1px solid; }
#show_cats table caption {
	padding-top: 1.618em;
	font-weight: bold;
	font-size: 1.1618em; }
#show_cats table td {
	padding: .168em 1em;
	border: 1px dotted black; }
#show_cats table td + td {
	padding-left: 0; }
#show_cats ul {
	margin: 0;
	padding: 0;
	list-style-position: inside; }
#show_cats li {
	padding: 0 0 0 .618em; }
#show_cats kbd {
	margin-left: .618em;
	padding: 0 .382em; }
#show_cats kbd:first-child {
	margin-left: 0; }
#show_cats kbd:first-child span {
	color: yellow; }
#show_cats .double_bind,
#show_cats .combo_clash kbd {
	color: white;
	background-color: darkred; }
#show_cats .combo_clash kbd:first-child {
	color: inherit;
	background-color: inherit; }


body.flow .window_pane {
	position: static;
	width: 100%;
	height: auto; }
body.sideby .window_pane { /*can confuse MSIE*/
	position: fixed;
	top: 1.2em;
	left: 50%;
	right: auto;
	bottom: 0;
	width: 50%;
	overflow: auto; }
body.sideby aside + .window_pane {
	left: 0;
	border-right: 2px double; }
body.stack .window_pane { /*can confuse MSIE*/
	position: fixed;
	top: 50%; /*for Presto*/
	top: calc(50% + .6em);
	left: 0;
	right: auto;
	bottom: 0;
	width: 100%;
	overflow: auto; }
body.stack aside + .window_pane {
	top: 1.2em;
	bottom: 50%; /*for Presto*/
	bottom: calc(50% - .6em);
	border-bottom: 2px double; }
body.sideby header,
body.stack header {
	position: fixed;
	top: 10.618em;
	left: 0;
	margin: 0;
	padding: .6rem;
	width: 0;
	height: 4em;
	overflow: hidden;
	color: black;
	background-color: white;
	border-right: 2px double;
	z-index: 6180; }
body.sideby header p,
body.stack header p {
	display: block;
	position: absolute;
	top: .382em;
	left: -1.382em;
	transform: rotate(270deg);
	-webkit-transform: rotate(270deg);
	-ms-transform: rotate(270deg);
	white-space: nowrap;
	font-weight: bold; }
body.sideby header:hover,
body.stack header:hover {
	width: auto;
	height: auto;
	border: 2px double; }
</style>
<script>
function setPageLayout(layout)  {
	document.body.className=layout;  }
function show(inp)  {
	var sel, cat_specimens=document.getElementsByClassName(inp.name);
	for (var i=0, c=cat_specimens.length;  i<c;  i++)  {
		switch (inp.value)  {
		case 'hide': cat_specimens[i].style.display="none";  break;
		case 'show':
			cat_specimens[i].style.display="";
			cat_specimens[i].style.color="";
			cat_specimens[i].style.backgroundColor="";
			break;
		case 'highlight':
			cat_specimens[i].style.display="";
			sel=inp.parentNode.parentNode.getElementsByTagName('input');
			cat_specimens[i].style.color=sel[3].value;
			cat_specimens[i].style.backgroundColor=sel[4].value;
			break;  }  }  }
</script>
</head>
<body class='flow'>
<?php ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
			mb_internal_encoding('UTF-8');

// character encoding: UTF-8 UNIX   tab-spacing: 2   word-wrap: no   standard-line-length: 120   max-line-length: 1000
/*
<meta name='author' content='Joe Golembieski, SoftMoon-WebWare' />
<meta name='contact' content='http://softmoon-webware.com/Komodo/' />
<meta name='copyright' content='Copyright © 2014 Joe Golembieski, SoftMoon-WebWare' />
<meta name='license' content='free to use, distribute, modify; original author and copyright must remain intact' />
<meta name='last_update' content='March 2, 2014' />

	Komodo Edit >> help >> list key bindings  (this will open a browser window showing key bindings by category)
	Generally, right-click on the page >> “save as file” |or| “view source” >> copy&paste to a text-editor and save
	 ==!! If you save the resulting HTML file via a text-editor,
	 ==   BE SURE to save it in =ITS= NATIVE CHARSET ENCODING (windows-1252 on my system at the time of this writing) !!==
	Save the resulting HTML file, named as shown below, in the same folder as this PHP file, then run this file.
	Note that Komodo Edit processes and generates the output for the resulting HTML file, and in doing so pays no
	attention to charset encoding (it should be UTF-8, Komodo’s internal encoding);
	many (but not all) extended Unicode characters are then unfortunately output as a ? by Komodo in
	this “keybindings by category” HTML-based output-dump-file when using MS-Windows, (and thus in this program’s output)
	but they will work properly when using them within the editor and the files you create with it
	(as long as you keep YOUR files’ character encoding correct).
	http://localhost/convert_keybindings_table.php                              ←no filename given defaults to “keybindings_by_category.htm”
	http://localhost/convert_keybindings_table.php?filename=myFavoriteKBs.htm
	http://localhost/convert_keybindings_table.php?filename=myFavoriteKBs       ←will try to load “Komodo Keybindings [myFavoriteKBs].htm”
	http://localhost/convert_keybindings_table.php?compare=true                 ←compares default filename (above) to “Komodo Keybindings [Default].htm”
	http://localhost/convert_keybindings_table.php?compare=my_other_keybindings.htm
	http://localhost/convert_keybindings_table.php?compare=my_other_keybindings  ←will try to compare “Komodo Keybindings [my_other_keybindings].htm”
	http://localhost/convert_keybindings_table.php?filename=myFavoriteKBs.htm&compare=my_other_keybindings.htm
	http://localhost/convert_keybindings_table.php?filter=snippets,macros  ← shows only the filtered categories (all categories possible)
	http://localhost/convert_keybindings_table.php?filter=!snippets,!macros  ← shows only the filtered categories not included
	http://localhost/convert_keybindings_table.php?filename=JuliesKBs&compare=TomsKBs&filter=snippets,macros
	http://localhost/convert_keybindings_table.php?filename=JuliesKBs&compare=TomsKBs&filter=!snippets,!macros,!editor,snippets1,editor2
	http://localhost/convert_keybindings_table.php?filename=JuliesKBs&compare=TomsKBs&filter=!snippets2,!macros,!editor1  ←same as line above, but if there is more than two files, inclusion/exclusion becomes more specific. As noted below, more than two requires a different browser-script interface.
	http://localhost/convert_keybindings_table.php?groomcats=true   ←shows keybindings by category listed after keybindings by key
	http://localhost/convert_keybindings_table.php?groomcats=first  ←shows keybindings by category listed before keybindings by key
	http://localhost/convert_keybindings_table.php?filename=JuliesKBsnippets&compare=TomsKBmacros&filter=snippets1,macros2&groomcats=first
*/
//  ¡! DO NOT PUT THIS ON A PUBLIC SERVER !¡  ($_GET requests need to be filtered first!)  \\
if (isset($_GET['filename']))  {
	if (is_file("Komodo Keybindings [".$_GET['filename']."].htm"))
		$_GET['filename']="Komodo Keybindings [".$_GET['filename']."].htm";  }
else  $_GET['filename']='keybindings_by_category.htm';
$myKeybindings=new KomodoKeybindingSupport($_GET['filename']);  //filename of saved HTML generated by Komodo
$myKeybindings->parse_cat_file($_GET['filter'], isset($_GET['groomcats']));
if (isset($_GET['compare']))  {
	if (is_file("Komodo Keybindings [".$_GET['compare']."].htm"))
		$_GET['compare']="Komodo Keybindings [".$_GET['compare']."].htm";
	else if (strtolower(substr($_GET['compare'], -3, 3))!=='htm')
		$_GET['compare']='Komodo Keybindings [Default].htm';
	//NOTE we can compare as many cat_files as you like by repeating this method below…
	// …but $_GET format herein only allows one compare and CSS given above only handles up to 7…
	$myKeybindings->cat_file=file_get_contents($_GET['compare']);
	$myKeybindings->parse_cat_file($_GET['filter'], isset($_GET['groomcats']));  }
$myKeybindings->sort();
$myKeybindings->build_HTML();
if (isset($_GET['groomcats']))  $myKeybindings->groom_cats();
$myKeybindings->echo_HTML(strToLower($_GET['groomcats'])==='first');



class KomodoKeybindingSupport  {

public $cat_file, $eol, $charset,
			 $headline=array(), $bound_keys=array(), $cats=array(), $cat_list=array(),
			 $snippets=0, $macros=0, $HTML=array('keys'=>"", 'cats'=>""),
			 $cat_colors=array("#202000", "#002000", "#002020", "#000020", "#200020", "#002000",
												 "#002020", "#202000", "#002000", "#002020", "#000020", "#200020", ),
			 $cat_backcolors=array("#DFDFFF", "#FFDFFF", "#FFDFDF", "#FFFFDF", "#DFFFDF", "#DFFFFF",
														 "#AFAFFF", "#FFAFFF", "#FFAFAF", "#FFFFAF", "#AFFFAF", "#AFFFFF" );
private $filecount=0, $order_marks="/α|β|γ|δ|ε|ζ|η|θ|ι|κ|λ|μ|ν/u",  //note the PHP-specific “u” modifier for UTF-8 processing
				$doubles=array('α1 !', 'α2 @', 'α3 #', 'α4 $', 'α5 %', 'α6 ^', 'α7 &', 'α8 *', 'α9 (', 'β0 )', 'γ- _', 'δ= +',
											 'ε[ {', 'ζ] }', 'η\\ |', 'θ` ~', 'ι\' "', 'κ; :', 'λ, <', 'μ. >', 'ν/ ?');
/* Notes: (1) The $doubles array above is for a standard American-style keyboard used with Windows®.
 * I am ignorant of other keyboard layouts so you may need to change it to match your keyboard.
 * The same applies to keys such as “backspace” or “page_up” etc.: code may need to be modified below.
 * (2) Notice keys are prefixed with Greek to facilitate sorting them to a specific display preference.
 * The “build_HTML” method specifically removes Greek glyphs from keys, so if you are in Greece and your
 * keyboard has greek glyphs on it (I really am ignorant, do you have that in Greece?) you will need to
 * reconfigure this code to use a different set of glyphs from another language.  As long as no key has
 * a latin character(A-Z) on your Greek keyboard, you could then just use A-Z instead of Greek α-ν for “order-marks.”
 */

public function __construct($cat_file)  {$this->cat_file=file_get_contents($cat_file);}


public function parse_cat_file($filter, $¿collect_cats)  { $this->filecount++;
	preg_match('/\n\r|\n/', $this->cat_file, $eol);
	preg_match('/<meta [^>]*charset=[\'"]?([-_a-z0-9]+)/i', $this->cat_file, $charset);
	$this->eol=$eol[0];  $this->charset=$charset[1];
	$F=explode($eol[0], iconv($charset[1], 'UTF-8', $this->cat_file));

	if ($filter)  $filter=explode(',', strToLower($filter));
	if (!$filter or count(preg_grep('/^!/',  $filter))===0)  $avoids=FALSE;
	else  {
		$avoids[0]=preg_grep("/^![^1-9]+$/", $filter);  if (count($avoids[0])===0)  $avoids[0]=FALSE;
		$avoids[1]=preg_grep("/^![^1-9]+".$this->filecount."$/", $filter);  if (count($avoids[1])===0)  $avoids[1]=FALSE;
		if (!$avoids[0]  and  !$avoids[1])  $avoids=FALSE;  }

	$¿parsing_title=TRUE;
	for ($i=0, $c=count($F);  $i<$c;  $i++)  { $o=0;
		if (preg_match('/<\/(body|html)>/u', $F[$i]))  break;
		if ($¿parsing_title)  {
			if (preg_match('/<h2>([^<]+)<\/h2>/u', $F[$i], $m, PREG_OFFSET_CAPTURE))  { $¿parsing_title=FALSE;
				array_push($this->headline, $m[1][0]);
				$o=$m[1][1]+strLen($m[1][0]);  }
			else  continue;  }
		if (preg_match('/<h2>([^<]+)<\/h2>/u', $F[$i], $m, NULL, $o))  $cat=preg_replace('/[^a-z0-9_]/iu', "", $m[1]);
		$icat=strToLower($cat);
		if ($filter  and  !in_array($icat, $filter)  and  !in_array($icat.$this->filecount, $filter)
		and ( !$avoids
				 or  ($avoids[0] and in_array('!'.$icat, $avoids[0]))
				 or  ($avoids[1] and in_array('!'.$icat.$this->filecount, $avoids[1])) ))
			continue;
		if (!in_array($cat, $this->cat_list))  array_push($this->cat_list, $cat);
		$binding=FALSE;
		while (preg_match('/<p>([^<]+)<\/p>/u', $F[$i], $m, PREG_OFFSET_CAPTURE, $o))  {
			$o=$m[1][1]+strLen($m[1][0]);
			if ($binding)  {
				if ($¿collect_cats)  $this->augment_cats($cat, $binding[0], $m[1][0]);
				$m[1][0]=array_map('trim', explode(', ', $m[1][0]));  }
			else  $binding=array();
			array_push($binding, $m[1][0]);  }
		$binding[0]=array('class'=>$cat, 'description'=>$binding[0], 'file'=>array($this->filecount));
		for ($j=1, $k=count($binding);  $j<$k;  $j++)  {
			$mod=$this->get_mod($binding[$j][0]);
			$key=$this->get_key($binding[$j][0]);
			array_shift($binding[$j]);
			$binding[0]['combo']=$binding[$j];
			if (isset($this->bound_keys[$key][$mod]))  {
				if ($this->differs($binding[0], $this->bound_keys[$key][$mod]))  {
					if (count($binding[0]['combo'])<1  or  count($this->bound_keys[$key][$mod][0]['combo'])<1)
						$this->bound_keys[$key][$mod]['double_bind']=TRUE;
					$this->check_combo_clashes($binding[0], $this->bound_keys[$key][$mod]);
					array_push($this->bound_keys[$key][$mod], $binding[0]);  }  }
			else
				$this->bound_keys[$key][$mod]=array($binding[0]);  }  }  }


private function augment_cats($cat, $description, $binding)  {
	$binding=array('keystrokes'=>$binding, 'file'=>array($this->filecount));
	$entry=array('description'=>$description, 'bound_keys'=>array($binding));
	if (!isset($this->cats[$cat]))  {$this->cats[$cat]=array($entry);  return;}
	for ($i=0, $c=count($this->cats[$cat]);  $i<$c;  $i++)  {
		if ($this->cats[$cat][$i]['description']===$description)  {
			for ($j=0, $b=count($this->cats[$cat][$i]['bound_keys']);  $j<$b;  $j++)  {
				if ($binding['keystrokes']===$this->cats[$cat][$i]['bound_keys'][$j]['keystrokes'])  {
					array_push($this->cats[$cat][$i]['bound_keys'][$j]['file'], $this->filecount);
					return;  }  }
			array_push($this->cats[$cat][$i]['bound_keys'], $binding);
			return;  }  }
	array_push($this->cats[$cat], $entry);  }


public function get_mod($keystroke)  {
	return (stripos($keystroke, 'shift+')!==FALSE ? 1 : 0)
				+(stripos($keystroke, 'ctrl+')!==FALSE ? 2 : 0)
				+(stripos($keystroke, 'alt+')!==FALSE ? 4 : 0);   }

public function get_key($keystroke)  {
	$key=html_entity_decode(preg_replace('/(shift|ctrl|alt)\+/iu', "", $keystroke));
	switch (strToLower($key))  { //group similar keys for sort
		case "up": $key="αα↑ ".$key;  break;
		case "down": $key="αβ↓ ".$key;  break;
		case "left": $key="αγ← ".$key;  break;
		case "right": $key="αδ→ ".$key;  break;
		case "page_up": $key="βα▲ ".$key;  break;
		case "page_down": $key="ββ▼ ".$key;  break;
		case "home": $key="βγ◄ ".$key;  break;
		case "end": $key="βδ► ".$key;  break;
		case "backspace":
		case "delete":
		case "insert": $key="γ".$key;  break;  }
	//Note how keys are prefixed with Greek specifically for sorting: αβγδ
	if (strLen($key)>1)  $key="α".$key;
	else if ($key==='/')  $key='γν/ ?';
	else if ($key==='\\')  $key='γη\\ |';
	else if ($key==='^')  $key='γα6 ^';
	else if (($nukey=array_merge(preg_grep("/[$key]/u", $this->doubles))) and $nukey[0])  $key="γ".$nukey[0];
	else $key="β".$key;
	return $key;  }


public function get_key_ref($key)   {
	preg_match("/^[^ ]+/u", $key, $m);  $key=$m[0];
	switch ($key)  {
		case "`": return "key_grave";
		case "-": return "key_dash";
		case "=": return "key_equals";
		case "[": return "key_lbrace";
		case "]": return "key_rbrace";
		case "\\": return "key_bslash";
		case ";": return "key_semicolin";
		case "&apos;":
		case "'": return "key_apos";
		case ",": return "key_comma";
		case ".": return "key_period";
		case "/": return "key_slash";  }
	return "key_".$key;  }


private function differs($a, &$b)  {
	for ($i=0, $c=count($b);  $i<$c;  $i++)  {
		if ( $a['combo']===$b[$i]['combo']
		and  $a['class']===$b[$i]['class']
		and  $a['description']===$b[$i]['description'] )  {
			if ($this->filecount>1  and  !in_array($this->filecount, $b[$i]['file'], TRUE))
				array_push($b[$i]['file'], $this->filecount);
			return FALSE;  }  }
	return TRUE;  }


private function check_combo_clashes(&$a, &$b)  {
	for ($i=0, $c=count($b);  $i<$c;  $i++)  {
		if (($a['combo']===$b[$i]['combo'] and ($a['class']!==$b[$i]['class'] or $a['description']!==$b[$i]['description']))
		or  $this->check_combo_keyclash($a['combo'], $b[$i]['combo']))  {
			$a['combo_clash']=TRUE;
			$b[$i]['combo_clash']=TRUE;  }  }  }

private function check_combo_keyclash($a, $b)  {
	if (count($a)===count($b)  or  0===($c=min(count($a), count($b))))  return FALSE;
	for ($i=0; $i<$c; $i++)  {if ($a[$i]!==$b[$i])  return FALSE;}
	return TRUE;  }


public function sort()  {ksort($this->bound_keys, SORT_NATURAL|SORT_FLAG_CASE);}


public function build_HTML()  {
	$mod=array('shift', 'ctrl', 'alt');  $html=&$this->HTML['keys'];
	$html.="\n<section id='show_keys' class='window_pane'><h2>Key Bindings by key:</h2>\n\n";

	foreach ($this->bound_keys as $key=>$bindings)  {
		$key=htmlSpecialChars(preg_replace($this->order_marks, "", $key));
		$html.="<div id='".$this->get_key_ref($key)."' class='tr'><kbd class='th'><span>$key</span></kbd>\n";
		for ($i=0; $i<8; $i++)  {  //8 binding mods per key: unmodified shift+ ctrl+ shift+ctrl+ alt+ shift+alt+ ctrl+alt+ shift+ctrl+alt+
			$html.="<div class='td'>";
			if ($i===0)  $html.="<span>unmodified</span>";
			else  {
				$html.="<kbd>";
				for ($j=0; $j<3; $j++)  {$html.=(($i & pow(2, $j)) ? "+<span>".$mod[$j]."</span>" : "");}
				$html.="</kbd>";  }
			$html.="<ul".($bindings[$i]['double_bind'] ? " class='double_bind'" : "").">\n";
			for ($j=0, $b=count($bindings[$i]);  $j<$b;  $j++)  {
				if (!isset($bindings[$i][$j]))  continue;
				if ($bindings[$i][$j]['class']==='Snippets')  $this->snippets++;
				if ($bindings[$i][$j]['class']==='Macros')  $this->macros++;
				$combo="";
				if ($bindings[$i][$j]['combo'])  {
					for ($k=0, $c=count($bindings[$i][$j]['combo']);  $k<$c;  $k++)  {
						$combo.=", <kbd><span>"
									 .preg_replace('/(shift|ctrl|alt)\+/iu', '$1</span>+<span>', $bindings[$i][$j]['combo'][$k])
									 ."</span></kbd> ";  }  }
				$html.="\t<li class='".$bindings[$i][$j]['class']
							.($bindings[$i][$j]['combo_clash'] ? " combo_clash" : "")
							."'>$combo<span class='cat'>".$bindings[$i][$j]['class'];
				if ( $this->filecount>1
				and  ( ($c=count($bindings[$i][$j]['file'])) < $this->filecount ) )
					for ($k=0; $k<$c; $k++)  {
						$html.="<span class='file".$bindings[$i][$j]['file'][$k]."'>".$bindings[$i][$j]['file'][$k]."</span> ";  }
				$html.="</span> ".$bindings[$i][$j]['description']."</li>\n";  }
			$html.="</ul></div>\n";  }
		$html.="</div>\n\n";  }
	$html.="</section><!--  close #show_keys  -->\n\n";  }


public function groom_cats()  {
	$html=&$this->HTML['cats'];
	$html.="\n<section id='show_cats' class='window_pane'><h2>Key Bindings by category:</h2>\n\n";
	foreach ($this->cats  as  $cat=>$bindings)  {
		$html.="<table id='$cat' class='$cat'><caption>$cat</caption>\n";
		for ($i=0, $b=count($bindings);  $i<$b;  $i++)  {
			$html.="<tr>\n\t<td>".$bindings[$i]['description']."</td>\n\t<td><ul>\n";
			for ($j=0, $c=count($bindings[$i]['bound_keys']);  $j<$c;  $j++)  {
				$keystrokes=explode(", ", $bindings[$i]['bound_keys'][$j]['keystrokes']);
				$ichi=array_shift($keystrokes);
				$key=$this->get_key($ichi);
				$mod=$this->get_mod($ichi);
				$class=array();
				if ($this->bound_keys[$key][$mod]['double_bind'])
					array_push($class, "double_bind");
				for ($k=0, $d=count($this->bound_keys[$key][$mod]);  $k<$d;  $k++)  {
					if ( $keystrokes===$this->bound_keys[$key][$mod][$k]['combo']
					and  $this->bound_keys[$key][$mod][$k]['combo_clash'] )  {
						array_push($class, "combo_clash");
						break;  }  }
				$html.="\t\t<li".(count($class) ? (" class='".implode(" ", $class)."'>") : ">");
				array_unshift($keystrokes, $ichi);
				for ($k=0, $d=count($keystrokes);  $k<$d;  $k++)  {
					$keystrokes[$k]="<kbd><span>"
						.preg_replace('/(shift|ctrl|alt)\+/iu', '$1</span>+<span>', $keystrokes[$k])
						."</span></kbd>";  }
				$html.=implode(", ", $keystrokes);
				if ($this->filecount>1
				and  ($d=count($bindings[$i]['bound_keys'][$j]['file'])) < $this->filecount)  {
					$html.="&nbsp; ‡";
					for ($k=0; $k<$d; $k++)  { $class=$bindings[$i]['bound_keys'][$j]['file'][$k];
						$html.="<span class='file$class'>$class</span>";  }  }
				$html.="</li>\n";  }
			$html.="\t</ul></td>\n</tr>\n";  }
		$html.="</table>\n\n";  }
	$html.="</section><!--  close #show_cats  -->\n\n";  }


public function echo_HTML($¿cats_first)  {
	$headline="<header>\n<p>˅ Files: ˅</p>\n";
	for ($i=1, $c=count($this->headline);  $i<=$c;  $i++)  {
		$headline.="<h1>".($this->filecount>1 ? "<span class='file$i'>$i</span>" : "")
							.$this->headline[$i-1]."</h1>\n";  }
	echo $headline,
			 $this->snippets," total snippet keybindings<br>\n",
			 $this->macros," total macro keybindings<br>\n",
			 "</header>\n<aside id='nav'><h4>▼↓ Navigation: on this page ↓▼</h4>\n<nav>\n";
	foreach ($this->bound_keys as $key=>$dummy)  {
		$key=htmlSpecialChars(preg_replace($this->order_marks, "", $key));
		$nav['key'].="<li><a href='#".$this->get_key_ref($key)."'>$key</a></li>\n";  }
	foreach ($this->cats as $cat=>$dummy)  {
		$nav['cat'].="<li><a href='#$cat'>$cat</a></li>\n";  }
	if ($¿cats_first)
		echo $nav['cat'], "</nav>\n<nav>\n", $nav['key'];
	else
		echo $nav['key'], "</nav>\n<nav>\n", $nav['cat'];
?>
</nav>
</aside>
<aside><h4>˅ Page Layout ˅</h4>
<?php if (count($this->cats)>0): ?>
<fieldset><legend>layout</legend>
	<label><input type='radio' name='layout' value='flow' onchange="setPageLayout(this.value);" checked />full-page</label>
	<label><input type='radio' name='layout' value='sideby' onchange="setPageLayout(this.value);" />side-by-side</label>
	<label><input type='radio' name='layout' value='stack' onchange="setPageLayout(this.value);" />top-over-bottom</label>
</fieldset>
<?php endif;
	for ($i=0, $c=count($this->cat_list);  $i<$c;  $i++)  { ?>
<fieldset><legend><?php echo $this->cat_list[$i]; ?></legend>
	<label><input type='radio' name='<?php echo $this->cat_list[$i]; ?>' value='hide' onchange="show(this);" />hide</label>
	<label><input type='radio' name='<?php echo $this->cat_list[$i]; ?>' value='show' onchange="show(this);" checked />show</label>
	<label><input type='radio' name='<?php echo $this->cat_list[$i]; ?>' value='highlight' onclick="show(this)" />highlight</label>
	<input type='color' value='<?php echo $this->cat_colors[$i]; ?>' />
	<input type='color' value='<?php echo $this->cat_backcolors[$i]; ?>' />
</fieldset>
<?php } //close loop ?>
</aside>
<?php
	if ($¿cats_first)
		echo $this->HTML['cats'], $this->HTML['keys'];
	else
		echo $this->HTML['keys'], $this->HTML['cats'];  }

}  // close KomodoSupport class
?>
</body></html>
