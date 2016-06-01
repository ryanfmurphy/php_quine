<?php
# used for building the quine source code
# not needed for running the actual quine

$code = file_get_contents('quine.php');
$lines = explode("\n", $code);
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
echo 'array('
    . implode(',',$lines_stringified)
    . ");\n"
;
?>
