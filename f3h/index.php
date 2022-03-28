<?php

Asset::set(__DIR__ . D . 'index' . (defined('TEST') && TEST ? '.' : '.min.') . 'js', 10);
Asset::script("window.F3H && window.F3H.init && window.F3H.init(" . To::JSON($state->x->f3h->sources ?? 'body') . ", " . To::JSON($state->x->f3h->state ?? []) . ")", 10);