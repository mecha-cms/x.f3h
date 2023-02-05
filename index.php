<?php

Asset::set(__DIR__ . D . 'index' . (defined('TEST') && TEST ? '.' : '.min.') . 'js', 10);
Asset::set('data:text/js;base64,' . To::base64("window.F3H && window.F3H.query && window.F3H.query(" . To::JSON($state->x->f3h->sources ?? 'body') . ", " . To::JSON($state->x->f3h->state ?? []) . ");"), 10);