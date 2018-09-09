<?php
$animals = [
"Africa" => ["Loxodonta africana",
             "Loxodonta cyclotis",
             "Rhinocerotidae",
             "Giraffa camelopardalis",
             "Panthera leo spelaea"],

"Australia" => ["Ornithorhynchus anatinus",
                 "Macropus",
                 "Tachyglossus aculeatus",
                 "Sarcophilus harrisii",
                 "Canis lupus dingo"]
  ];

 $two_words = [];
 $first_word = [];
 $second_word = [];
 $unreal = [];

foreach ($animals as $key => $value) {
foreach ($value as $key1 => $animal) {
        if (str_word_count($animal)==2){
				$two_words[$key][] = $animal;
        $array = explode(' ',$animal);
       	$first_word[$key][] = $array[0];
				$second_word[$key][] = $array[1];
}
}
}
shuffle($second_word);
foreach ($second_word as $key3 => $last) {
$unreal = implode($last, $first_word);
}
?>
