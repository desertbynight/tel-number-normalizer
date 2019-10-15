<?php

namespace desertbynight\telnumbernormalizer;

use \desertbynight\telnumbernormalizer\StringManipulate;

class TelNumberNormalizer
{
    public $source;

    public function __construct(string $source)
    {
        $this->source = $source;
    }


    public function filterItTo(string $outputFile)
    {

        // Get the file into an array.
        $lines = file($this->source);

        // Output Array init
        $toCSVArray = [];

        // Loop through our array
        foreach ($lines as $line_num => $line) {
            $line = StringManipulate::toHankaku($line);
            $line = StringManipulate::invertPlusAndDoubleZero($line);
            $line = StringManipulate::stripMinus($line);
            $line = StringManipulate::sanitizeNumberInt($line);
            $toCSVArray[] = $line;
        }

        $fp = fopen($outputFile, 'w');
        fputcsv($fp, $toCSVArray);
        fclose($fp);

    }
}
