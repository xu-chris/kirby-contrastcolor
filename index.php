<?php

require_once __DIR__.'/lib/colorcontrast.php';

Kirby::plugin('xuchris/colorcontrast', [
    'fieldMethods' => [
        'toContrastColor' => function($field) {
            return Colorcontrast::toColorContrast($field->value);
        }
    ]
]);