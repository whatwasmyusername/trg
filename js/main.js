jQuery(function($){
    // $(".bells img").mouseover(function(){
    //     $(this).addClass("swing");
    // }).mouseout(function(){
    //     $(this).removeClass("swing");
    // });
    
    $(".bells").click(function(e){
       e.preventDefault();
       var link = $(this);
       var img = link.find("img");
       if (img .hasClass("swing")){
           return;
       }
       var html = "<audio autoplay>";
       var exts = ["mp3", "ogg"];
       for(var i=0;i<exts.length;i++){
           var data = link.data(exts[i]); 
           html+="<source src=\""+data+"\" type=\"audio/"+exts[i]+"\"/>";
       }
       html+="<embed hidden=\"true\" autostart=\"true\" loop=\"false\" src=\""+link.data(exts[0])+"\"/></audio>";
       $("body").append(html);
       img.addClass("swing");
       $.get("track.php", function(response, status, xhr){
          $(".counter").replaceWith(response); 
       });
       img.attr("src", "images/bells.gif");
       setTimeout(function(){
           img.attr("src", "images/bells.png");
       }, 1000 * 3);
    });
});

jQuery(function($){
    $("a[data-dialog-width],a[data-dialog-height]").click(function(e){
        e.preventDefault();
        var l = $(this);
        var url = l.attr("href");
        var data = l.data();
        data.dialogWidth = data.dialogWidth || 640;
        data.dialogHeight = data.dialogHeight || 480;
        window.open(url, '_blank', 'width=' + data.dialogWidth + ',height=' + data.dialogHeight);
    });
});