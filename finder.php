<?php

return \StubsGenerator\Finder::create()
    ->in('wp-content/plugins/advanced-custom-fields')
    ->notPath('assets')
    ->notPath('lang')
    // ->notPath('wp-includes/spl-autoload-compat.php')
    ->sortByName()
;
