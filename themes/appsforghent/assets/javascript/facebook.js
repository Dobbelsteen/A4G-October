var fb = function (LandId) {
  
   var url = window.location.href;
   var facebookImage = $('#facebook-share').html();


   fbsharetext = '<a id="facebook" title="Test" href="https://www.facebook.com/dialog/feed?app_id=975217692558021&display=page&caption=Dit is de caption&name=Dit is de naam&picture=https://i.ytimg.com/vi/ReF6iQ7M5_A/maxresdefault.jpg&link=http://test.openbelgium.be" target="_blank">' + facebookImage + '</a>';

   $('#facebook-share').replaceWith(fbsharetext);

   console.log(url);
   console.log(facebookImage);
   console.log(fbsharetext);
}

$(window).load(function() {
   //fb();
});
