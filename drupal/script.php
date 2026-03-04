<?php
// 1. Force a rebuild of the class registry (finds 'Organization' and 'EntityAPIController')
registry_rebuild();

// 2. Clear the entity-specific information cache
entity_info_cache_clear();

// 3. Clear general caches just to be safe
cache_clear_all('*', 'cache', TRUE);