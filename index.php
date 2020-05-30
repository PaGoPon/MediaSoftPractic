<?php
$text = '1866 год ознаменовался удивительным и необъяснимым явлением, которое, вероятно, еще многим памятно.
оно крайне взволновало жителей приморских городов, сильно возбудило умы в континентальных государствах и особенно встревожило моряков.
 купцы и судовладельцы, капитаны торговых судов и военных кораблей, морские офицеры, шкиперы и механики как в Европе, так и в Америке,
  правительства различных государств — все были в высшей степени и заинтересованы и озабочены. дело в том, что с некоторого времени многим
  кораблям случалось встречать в море «что-то громадное», какой-то длинный веретенообразный предмет, который порой светился в темноте и далеко
   превосходил кита по размерам и быстроте движений. в различных судовых журналах записаны были все факты, относившиеся к этим странным происшествиям,
    и в показаниях о строении этого загадочного предмета или существа, о его неимоверной скорости, поразительной силе движений и особенностях почти не было разногласий.
     если это было животное из отряда китов, то, судя по описаниям, оно было гораздо больше всех доныне известных представителей китообразных. 
     ни Кювье, ни Ласепед, ни Дюмериль, ни Катрфаж не поверили бы в существование подобного чудовища, не увидав его собственными глазами, то есть глазами ученых.';

$punctuation = ['.',',' ];


$NewText = str_replace($punctuation, "", $text);
$masText = explode(" ", $NewText);
$countText = count($masText);
$LastMas=array_count_values($masText);

foreach ($LastMas as $key => $value){
    echo "{$key} : {$value}". PHP_EOL;
}
echo "Всего слов : {$countText}". PHP_EOL;
?>