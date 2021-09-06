<?php

return [
    // Set the name that will be sent as X-Served-By. Default: hostname
    'identifier-string' => env('SERVED_BY_IDENTIFIER', gethostname()),
];