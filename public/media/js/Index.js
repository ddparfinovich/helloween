$(function(){
    $('#nav a').click(function(){
        var title = $(this).attr('data-title');        
var content = $(this).attr('data-body');
var img = $(this).attr('data-image');
$('#title').text(title);
$('#content').html(content);
$('#picture').attr('src', 'media/img/'+img);
    });
});