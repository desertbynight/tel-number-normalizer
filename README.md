# TelNumberNormalizer
Accepts csv files populated with tel numbers and returns csv with just integers
Use it like:

$changeMe = new TelNumberNormalizer('original_file.csv');

$changeMe->filterItTo('output_file.csv');

The original file needs to be populated for every line with something
