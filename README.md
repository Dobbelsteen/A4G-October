## Getting started

### Step 0: clone repository

After cloning or downloading the repository, you can get started. 

### Step 1: Run composer

First, you’ll want to update the composer requirements. Fetch the repository, and navigate to the directory that contains the repository

`composer install`

### Step 2: Install dependencies

`npm install`

`bower install`


### Step 2: Configure database settings

For your local development server, you’ll want to change the config/database file to your connection information.

`config/database.php`

### Step 3: Migrate the database

`php artisan october:up`

### Step 4

You can now access your webpage from the root of your project, and the backend via `root/backend`

Default credentials are:  
Username: admin  
Password: admin  

It is advised you change these ASAP.

### Step 5: Twitterwall

To configure your Twitterwall, go to `themes/appsforghent/assets/vendor/Tweetie/api/config.example.php`

There, fill out your Twitter developer details: consumer_key, consumer_secret, access_token, access_secret

Finally, rename the file to `config.php`

## Dev notes: Events, Sessions, Speakers

This build contains Event, Session and Speaker functionality.

The templates of these plugins can be found in the folder `plugins/teamswag/components`

**Events**: Listview of all events. An event is for example Hackathon 2016, all sessions of that particular hackathon are linked to this event.  (as seen in `themes/appsforghent/pages/events.htm` )

**Sessions**: Listview of all sessions, independent of events. (as seen in `themes/appsforghent/pages/programme.htm` )

**Sevent**: View of a single Event, with all the sessions linked to that particular event. (as seen in `themes/appsforghent/pages/event.htm` )

**Speakers**: Listview of all speakers in the system. (as seen in `themes/appsforghent/pages/speakers.htm` )

**Ssession**: View of a single Session, with all the Speakers that are linked to it. (as seen in `themes/appsforghent/pages/session.htm` )

**Location**: A session can be in a particular location (for example Room A, Room B, Room C), this is optional though.