# TelNumberNormalizer
Accepts text files populated with tel numbers and returns csv with just integers
Use it like:

$changeMe = new TelNumberNormalizer('original_file.txt');

$changeMe->filterItTo('output_file.csv');
