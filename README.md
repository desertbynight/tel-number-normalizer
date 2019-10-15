# TelNumberNormalizer
Accepts text files populated with tel numbers and returns csv with just integers
Use it like:

$record = new TelNumberNormalizer('original_file.txt');

$record->filterItTo('output_file.csv');
