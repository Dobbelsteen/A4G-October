<?php

    /**
     * Your Twitter App Info
     */
    
    // Consumer Key
    define('CONSUMER_KEY', 'KEY');
    define('CONSUMER_SECRET', 'SECRET');

    // User Access Token
    define('ACCESS_TOKEN', 'TOKEN');
    define('ACCESS_SECRET', 'SECRET');
	
	// Cache Settings
	define('CACHE_ENABLED', false);
	define('CACHE_LIFETIME', 90); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));