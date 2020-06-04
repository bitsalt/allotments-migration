const getFileList = function(case_id) {
    $.ajax({
        type: 'POST',
        url: "/casefiles",
        data: {
            caseId: case_id
        },
        cache: false,
        success: function (data) {
            $("#fileList").html(data);
            $(".filelink").unbind().bind('click', getfile);
            $(".dellink").unbind().bind('click', delfile);

        },
        error: function(xhr, status, err) {
            //console.error(this.props.url, status. err.toString());
            var retstr = 'js error...<br />';
            retstr+= 'status: ' + status + ' error: ' + err.toString();
            retstr+= '<br />' + xhr.responseText;
            $("#debug_panel").html(retstr);
        }
    });
}

const getfile = function() {
    var filename = $(this).attr('data-filename');
    var file_id = $(this).attr('data-fileid');
    var transfer_method = $(this).attr('data-trmethod');
    //alert(filename);

    var fileform = $('<form>', {
        'action': "/getfile",
        'method': 'post',
        'target': '_blank'
    }).append($('<input>', {
        'name': 'filename',
        'value': filename,
        'type': 'hidden'
    }).append($('<input>', {
        'name': 'file_id',
        'value': file_id,
        'type': 'hidden'
    }).append($('<input>', {
        'name': 'transfer_method',
        'value': transfer_method,
        'type': 'hidden'
    }).append($('<input>', {
        'name': '_token',
        'value':  $("#crsf").val(),
        'type': 'hidden'
    })))));


    fileform.appendTo('body').submit().remove();
}

const delfile = function(case_obj) {
    if(confirm("Are you sure you want to delete this file?"))
    {
        const caseId = $(this).attr("data-fileid");
        $.ajax({
            type: 'POST',
            url: "/cases/deletefile",
            data: {
                case_id: caseId,
                file_name: $(this).attr("data-filename")
            },
            dataType: "json",
            //async: false,
            cache: false,
            success: function (data) {
                //alert(JSON.stringify(data));
                getFileList(caseId);
            },
            error: function(xhr, status, err) {
                //console.error(this.props.url, status. err.toString());
                var retstr = 'js error...<br />';
                retstr+= 'status: ' + status + ' error: ' + err.toString();
                retstr+= '<br />' + xhr.responseText;
                $("#debug_panel").html(retstr);
            }
        });
    }
}

