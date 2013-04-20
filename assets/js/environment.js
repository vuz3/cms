$(document).ready(function() {

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
                        var action = "http://localhost/cms/index.php/application/article/show";
                        $.ajax({
                            type: 'POST',
                            url: 'http://localhost/cms/index.php/application/article/before',
                            timeout: 6000,
                            dataType: "text", // expected format for response
                            contentType: "application/json", // send as JSON
                            data: dane,
                            error: function(request, error) {
                                if (error == "timeout") {
                                    alert("timeout");
                                }
                                alert('blad');
                                jQuery.each(request, function(ab, ac) {
                                    alert(ac);
                                });
                            },
                            success: function(data) {
                                
                                alert('ok');
                            }
                        });
                    },
                    'Cancel': function() {
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