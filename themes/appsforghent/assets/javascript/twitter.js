$(function() { 
    
    twitterWall();
    
    setInterval(twitterWall, 90000);
    
    function twitterWall() {
        $('#twitter-wall').twittie({
            'apiPath':'themes/appsforghent/assets/vendor/Tweetie/api/tweet.php',
            'hashtag': 'mappsforghent OR appsforghent',
            'count': 15,
            'dateFormat': '%d %b.',
            'temp': '<div>{{user_name}}<br>{{screen_name}}<br>{{tweet}}<br>{{favorites}}</div>',
            'template': '<div clas="row">' + 
                            '<div class="col-xs-12 col-md-2 twitter-left">' +
                                '{{user_name}}<br>' +
                                '<span class="light">{{screen_name}}</span><br>' + 
                                '<span class="light">{{date}}</span><br>' + 
                                '<span class="bottom-spacer"></span>' +
                            '</div>' +
                            '<div class="col-xs-12 col-md-7 twitter-center">' +
                                '{{tweet}}' +
                                '<br>{{image}}' +
                                '<span class="bottom-spacer"></span>' +
                            '</div>' +
                            '<div class="col-xs-12 col-md-3 twitter-right">' +
                                '{{retweets}} retweets<br>' +
                                '{{favorites}} likes<br>' +
                                '<span class="bottom-spacer"></span>' +
                            '</div>' +
                        '</div>'
        });
    }
    
});