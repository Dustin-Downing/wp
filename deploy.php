<?php
    echo shell_exec('whoami');
    $output = shell_exec('git pull origin master 2>&1');
    echo "<pre>$output</pre>";
?>
