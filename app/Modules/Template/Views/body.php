<?php
$targetView = (isset($view_file) && strpos($view_file, '\\') !== false) 
    ? $view_file 
    : ('Modules\\' . ucfirst($module ?? '') . '\\Views\\' . ($view_file ?? ''));
?>
<main>
    <?= view($targetView, $data ?? get_defined_vars()) ?>
</main>

