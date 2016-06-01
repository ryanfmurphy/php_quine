<?php
$lines = array('<?php','','$lines_stringified = array_map(','    function($line_txt) {','        return "\'"','            . str_replace(','                array(\'\\\\\', "\'"),','                array(\'\\\\\\\\\', "\\\'"),','                $line_txt','            )','            . "\'";','    },','    $lines',');','$lines[1] = \'$lines = array(\'.implode(\',\',$lines_stringified).\');\';','echo implode("\\n", $lines);','?>','');
$lines_stringified = array_map(
    function($line_txt) {
        return "'"
            . str_replace(
                array('\\', "'"),
                array('\\\\', "\'"),
                $line_txt
            )
            . "'";
    },
    $lines
);
$lines[1] = '$lines = array('.implode(',',$lines_stringified).');';
echo implode("\n", $lines);
?>
