<?php

$file = __DIR__ . D . 'index' . (defined('TEST') && TEST ? '.' : '.min.') . 'js';
Asset::set(Asset::URL($file) . To::query(array_replace(['v' => filemtime($file)], [
    'of' => $state->x->f3h->of ?? 'body',
    'state' => s(a($state->x->f3h->state ?? false))
])), 10);