//global variables
var API_KEY = '6f2f888fce8c5aab7abb5df7877f3c3c';
var SECRET = '6648f44567c8975f';
var USER_ID = '119531188@N08';
var photosetURL = 'https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=' + API_KEY + '&user_id=' + USER_ID + '&photoset_id=72157660149167969&format=json&jsoncallback=?';

var getPhotos = function() {
    $.getJSON(photosetURL, function(photoset) {
        if(photoset['stat'] == 'ok'){
            var photos = [];

            //sets all photos in same order as on Flickr in the photos array
            for(var i=0; i < photoset.photoset.photo.length; i++) {
                photos[i] = ['https://farm' + photoset.photoset.photo[i].farm + '.static.flickr.com/' + photoset.photoset.photo[i].server + '/' + photoset.photoset.photo[i].id + '_' + photoset.photoset.photo[i].secret + '.jpg', photoset.photoset.photo[i].description];                
            }

            //make the flipbook (we have all the info we need now)
            displayPhotos(photos);
        } else {
            //window.location = 'error.html';
        }
    });
}

var displayPhotos = function(photos) {
    
    $.each(photos, function(i, photoURL) {
        $('.container').append('<img src="' + photoURL[i, 0] + '" alt="' + photoURL[i, 1] + '" />');
    });
}

$(window).load(function() {
    getPhotos();
});