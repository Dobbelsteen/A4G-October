<?php
    /**
     * Your Twitter App Info
     */
    
    // Consumer Key
    define('CONSUMER_KEY', 'KEY_GOES_HERE');
    define('CONSUMER_SECRET', 'SECRET_GOES_HERE');

    // User Access Token
    define('ACCESS_TOKEN', 'ACCESS_TOKEN_GOES_HERE');
    define('ACCESS_SECRET', 'ACCESS_SECRET_GOES_HERE');
	
	// Cache Settings
	define('CACHE_ENABLED', true);
	define('CACHE_LIFETIME', 90); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));