<?php

namespace Empathy;

const CORE_DIR = __DIR__;

chdir (CORE_DIR);

foreach (glob ('ext/php_*.dll') as $ext)
	if (!extension_loaded (substr (basename ($ext), 4, -4)))
		load_extension ($ext);

if (file_exists ($app = '../../app/start.php'))
	require $app;
