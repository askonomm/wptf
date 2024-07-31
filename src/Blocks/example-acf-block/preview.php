<?php

use Wptf\Core\View;

/** @var array $block */

echo (new View(__DIR__))->make('preview', [
	'block' => $block
]);

