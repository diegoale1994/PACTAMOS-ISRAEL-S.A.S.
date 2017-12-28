function decode_html(encoded) {
    encoded = replaceAll("&amp;gt;", ">", encoded);
    encoded = replaceAll("&amp;lt;", "<", encoded);
    encoded = replaceAll("\\\'", "\'", encoded);
    encoded = replaceAll("&quot;", "\"", encoded);
    encoded = replaceAll("&lt;br /&gt;", "\n", encoded);
    encoded = replaceAll("&amp;", "&", encoded);
    encoded = replaceAll("\\\\", "\\", encoded);
    return encoded;
}

function replaceAll(find, replace, str) {
    return str.replace(new RegExp(find, 'g'), replace);
}

function br(text) {

    var brRegex = new RegExp("(<br\\s\/>|<br>)", "g");
    var str = text
        .replace(/&gt;/g, ">")
        .replace(/&lt;/g, "<")
        .replace(/&amp;/g, "&")
        .replace(/&quot;/g, "\"")
        .replace(/&gt;/g, ">")
        .replace(/&lt;/g, "<")
        .replace(/&amp;/g, "&")
        .replace(/&quot;/g, "\"")
        .replace(/\r/g, "")
        .replace(/\n/g, "")
        .replace(brRegex, "<br>");

    return str;
}

function hoverbutton_imHeader_pluginAppObj_03() {
    
        var container = $('#imHeader_pluginAppObj_03');
        var button = $('#imHeader_pluginAppObj_03 .imHeader_pluginAppObj_03-button');
    
    x5engine.boot.push(function(){
        if("¿Quienes Somos?" != ""){
            $("#imHeader_pluginAppObj_03 .div-txt").html(br("¿Quienes Somos?"));
        }
  
        var eff = "shutter-out-vertical";
        switch(eff) {
            case "fade":
                fade();
                break;
            case "sweep-top":
            case "sweep-bottom":
            case "sweep-right":
            case "sweep-left":
                sweep();
                break;
            case "shutter-out-vertical":
            case "shutter-out-horizontal":
            case "shutter-radial-out":
                shutter();
                break;
            case "rotate-over":
                rotate_over();
                break;
            case "rotate-under":
                rotate_under();
                break;
        }  
    });
    
    function fade(){
        
        var timeout = 0;
        container.on('mouseenter', function() {
            clearTimeout(timeout);
            var overElem = $('#imHeader_pluginAppObj_03 .button-wrapper-over');
            if (overElem.length == 0) overElem = button.clone().addClass('button-wrapper-over fade').appendTo(container);
            setTimeout(function() {
                overElem.addClass('animated');
            }, 10);
        }).on('mouseleave', function() {
            var overElem = $('#imHeader_pluginAppObj_03 .button-wrapper-over');
            overElem.removeClass('animated');
            timeout = setTimeout(function() {
                overElem.remove();
            }, 300);
        });   
    }    
    
    function sweep(){
        
        var timeout = 0;
        container.on('mouseenter', function() {
            clearTimeout(timeout);
            var overElem = container.children('.sweeper');
            if (overElem.length == 0) overElem = button.clone().appendTo(container).wrap('<div class="sweeper"></div>').addClass('button-wrapper-over sweep').parent();
            setTimeout(function() {
                overElem.addClass('animated');
            }, 10);
        }).on('mouseleave', function() {
            var overElem = container.children('.sweeper');
            overElem.removeClass('animated');
            timeout = setTimeout(function() {
                overElem.remove();
            }, 300);
        });
    }

    function shutter(){
        
        var timeout = 0;
        container.on('mouseenter', function() {
            clearTimeout(timeout);
            var overElem = container.children('.shutter');
            if (overElem.length == 0) overElem = button.clone().appendTo(container).wrap('<div class="shutter"></div>').addClass('button-wrapper-over').parent();
            setTimeout(function() {
                overElem.addClass('animated');
            }, 10);
        }).on('mouseleave', function() {
            var overElem = container.children('.shutter');
            overElem.removeClass('animated');
            timeout = setTimeout(function() {
                overElem.remove();
            }, 300);
        });
    }

    function rotate_under(){ 
        
        var timeout = 0;
        button.addClass('rotate-u');
        container.on('mouseenter', function() {
            clearTimeout(timeout);  
            var overElem = container.children('.rotate-under');
            if (overElem.length == 0) button.clone().addClass('button-wrapper-over rotate-under').appendTo(container);
            setTimeout(function() {
                button.addClass('animated');
            }, 10);
        }).on('mouseleave', function() {
            var overElem = container.children('.rotate-under');
            button.removeClass('animated');
            timeout = setTimeout(function() {
                overElem.remove();
            }, 300);
        });
    }

    function rotate_over(){  

        var timeout = 0;
        container.on('mouseenter', function() {
            clearTimeout(timeout);
            var overElem = container.children('.rotate-over');
            if (overElem.length == 0) button.clone().addClass('button-wrapper-over rotate-over').appendTo(container);
            setTimeout(function() {
                container.children('.rotate-over').addClass('animated');
            }, 10);
        }).on('mouseleave', function() {
            var overElem = container.children('.rotate-over');
            overElem.removeClass('animated');
            timeout = setTimeout(function() {
                overElem.remove();
            }, 300);
        });   
    }
}
