<?php

namespace RectorPrefix20210731;

if (\class_exists('t3lib_cache_backend_AbstractBackend')) {
    return;
}
class t3lib_cache_backend_AbstractBackend
{
}
\class_alias('t3lib_cache_backend_AbstractBackend', 't3lib_cache_backend_AbstractBackend', \false);
