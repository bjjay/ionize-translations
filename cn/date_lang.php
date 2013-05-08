<?php
/*
|--------------------------------------------------------------------------
| Ionize Date Language file
|
| To use with the a date field through tags
| This format uses days and months translation like defined in this file, if the PHP date format code is used.
|
| Example of usage :
|  		$lang['dateformat_short'] = 'd m Y';	View call : <ion:date format="short" />		Output : 15 01 2011
| 		$lang['dateformat_medium'] = 'd M Y'; 	View call : <ion:date format="medium" />	Output : 15 jan 2011
|  		$lang['dateformat_long'] = 'l F d Y';	View call : <ion:date format="long" />		Output : saturday january 15 2011
|
| You can create your own format and call it in views :
| 		$lang['dateformat_complete'] = 'l F d Y H:i:s';		View call : <ion:date format="complete" />		Output : saturday january 15 2011 20:54:21
|
|--------------------------------------------------------------------------
*/

$lang['dateformat_short'] = 'm d Y';
$lang['dateformat_medium'] = 'M d Y';
$lang['dateformat_long'] = 'F d Y';

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';

/*
|--------------------------------------------------------------------------
| PHP day date format 'D' translations
| Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
| Ex : <articles:date format="D" manip="ucase" />
|--------------------------------------------------------------------------
*/
$lang['mon'] = '一';
$lang['tue'] = '二';
$lang['wed'] = '三';
$lang['thu'] = '四';
$lang['fri'] = '五';
$lang['sat'] = '六';
$lang['sun'] = '日';

/*
|--------------------------------------------------------------------------
| PHP day date format 'l' translations
|--------------------------------------------------------------------------
*/
$lang['monday'] = '星期一';
$lang['tuesday'] = '星期二';
$lang['wednesday'] = '星期三';
$lang['thursday'] = '星期四';
$lang['friday'] = '星期五';
$lang['saturday'] = '星期六';
$lang['sunday'] = '星期日';

/*
|--------------------------------------------------------------------------
| PHP month date format 'M' translations
|--------------------------------------------------------------------------
*/
$lang['jan'] = '一';
$lang['feb'] = '二';
$lang['mar'] = '三';
$lang['apr'] = '四';
$lang['may'] = '五';
$lang['jun'] = '六';
$lang['jul'] = '七';
$lang['aug'] = '八';
$lang['sep'] = '九';
$lang['oct'] = '十';
$lang['nov'] = '十一';
$lang['dec'] = '十二';

/*
|--------------------------------------------------------------------------
| PHP month date format 'F' translations
|--------------------------------------------------------------------------
*/
$lang['january'] = '一月';
$lang['february'] = '二月';
$lang['march'] = '三月';
$lang['april'] = '四月';
$lang['may_f'] = '五月';
$lang['june'] = '六月';
$lang['july'] = '七月';
$lang['august'] = '八月';
$lang['september'] = '九月';
$lang['october'] = '十月';
$lang['november'] = '十一月';
$lang['december'] = '十二月';

