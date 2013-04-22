$(document).ready(function() {


    $("a").click(function() {
        $("#contener").fadeToggle("slide");
        
       //alert($(this).attr("href"));
    });
    
   // $('#contener').fadeIn("normal");

    /*$('#next, #prev').on('click', function(event) {
        event.preventDefault();
        var adres = $(this).prop('href');
        $('#content').stop(true, true).slideUp(1000, function() {
            window.location.href(adres);
        });
    });*/

    $("#footer_help").click(function() {
        $("#help").dialog({
            height: 140,
            modal: true,
            hide: "explode",
            show: "fold"
        });
    });

    var trash_array = jQuery.makeArray(trash);
    var edit_array = jQuery.makeArray(edit);

    jQuery.each(trash_array, function(i, k) {
        $(k).click(function() {
            $("#dialog-confirm").dialog({
                modal: true,
                buttons: {
                    'Delete': function() {
                        var dane = $(k).attr('values');
                        $(this).dialog("close");
                        var action = "/cms/application/article/delete";
                        jQuery.post(action,
                                {
                                    what: dane,
                                },
                                function(response) {
                                    if (response != 'ok') {
                                        $("#center").load("/cms/application/article/show");
                                    } else {
                                        $("#center").load("/cms/application/show");
                                    }
                                }).done(function() {
                            window.location.reload();
                        });
                    },
                    'Cancel'
                            : function() {
                        $(this).dialog("close");
                    }
                }
            });
        });
    });

    jQuery.each(edit_array, function(i, k) {
        $(k).click(function() {
            alert('edit ' + $(k).attr('values'));
        });
    });

});