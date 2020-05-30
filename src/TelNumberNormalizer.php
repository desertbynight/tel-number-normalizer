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
        $toCSVArray = [];
        
        $row = 1;
        
        if (($handle = fopen($this->source, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000,"\n")) !== FALSE) {
                
                $num = count($data);
                
                echo "<p> $num fields in line $row: <br /></p>\n";
                
                $row++;
                
                for ($c=0; $c < $num; $c++) {
                    //echo $data[$c] . "<br />\n";
                    $fp = fopen($outputFile, 'a');
                    if($data[$c] == null) $out = "";
                    else {
                        $out = StringManipulate::toHankaku($data[$c]);
                        $out = StringManipulate::invertPlusAndDoubleZero($out);
                        $out = StringManipulate::stripMinus($out);
                        $out = StringManipulate::sanitizeNumberInt($out);
                    }
            fputcsv($fp, array($out));
            fclose($fp);
                }
            }
            fclose($handle);
        }
    }
}
