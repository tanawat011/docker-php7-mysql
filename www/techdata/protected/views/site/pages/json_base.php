<? header('Access-Control-Allow-Origin:*');
$this->layout = "noThemes";
header('Content-Type: application/json'); ?>{"BKK":<?=Phone::model()->count(" base = 'BKK' ")?>,"NST":<?=Phone::model()->count(" base = 'NST' ")?>,"UTP":<?=Phone::model()->count(" base = 'UTP' ")?>}
