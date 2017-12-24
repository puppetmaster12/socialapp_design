$(document).ready(function(){
    var maxLength = 100;
    $(".update-content").each(function(){
      console.log('test');
        var text = $(this).text();
        if($.trim(text).length > maxLength)
        {
            var newText = text.substring(0,maxLength);
            //var removedText = text.substring(maxLength, $.trim(text).length);
            $(this).empty().html($.trim(newText));
            $(this).append('<a href="#" class="read-more">...read more</a>');
            //$(this).append('<span class="more-text">'+removedText+'</span>');
        }
    });
    /*$(".read-more").click(function(){
        $(this).siblings('.more-text').contents().unwrap();
        $(this).remove();
    });*/
});
