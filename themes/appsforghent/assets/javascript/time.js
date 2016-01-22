$('#time').countdown('2016/02/29 08:30:00', function(event) {
    $(this).html(event.strftime('<span>%D</span> days     <span>%H</span> hours     <span>%M</span> minutes'));
});