<?php

require_once __DIR__.'/lib/contrastcolor.php';

Kirby::plugin('xuchris/contrastcolor', [
    'fieldMethods' => [
        'toContrastColor' => function($field) {
            return Colorcontrast::toContrastColor($field->value);
        }
    ]
]);