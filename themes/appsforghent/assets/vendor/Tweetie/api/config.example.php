<?php

    /**
     * Your Twitter App Info
     */
    
    // Consumer Key
    define('CONSUMER_KEY', 'KEY_GOES_HERE');
    define('CONSUMER_SECRET', 'SECRET_GOES_HERE');

    // User Access Token
    define('ACCESS_TOKEN', 'TOKEN_GOES_HERE');
    define('ACCESS_SECRET', 'SECRET_GOES_HERE');
	
	// Cache Settings
	define('CACHE_ENABLED', false);
	define('CACHE_LIFETIME', 90); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));