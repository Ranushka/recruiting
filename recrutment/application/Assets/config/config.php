<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Compile
	|--------------------------------------------------------------------------
	|
	| Should we event compile the assets or just display the tags
	|
	*/
	'compile' => true,

	/*
	|--------------------------------------------------------------------------
	| Cache Path
	|--------------------------------------------------------------------------
	|
	| All assets will be cached (compiled) to this path, relative to the
	| public path.
	|
	*/
	'cache_path' => 'admin/cache',

	/*
	|--------------------------------------------------------------------------
	| Cache Info File
	|--------------------------------------------------------------------------
	|
	| Info on cached files will be written here
	|
	*/
	'cache_info_file' => 'info.cache',

	/*
	|--------------------------------------------------------------------------
	| Freeze Option
	|--------------------------------------------------------------------------
	|
	| When this option is set to true there will be no comparison of modified
	| times for original files to cached files
	|
	*/
	'freeze' => false,

);