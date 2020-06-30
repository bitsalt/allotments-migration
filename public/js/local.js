function makeVisible(divID) {
    const div = document.getElementById(divID);
    if (div.classList.contains('invisible')) {
        div.classList.remove('invisible');
        //div.scrollIntoView();
        //div.scroll(0, 800);
    }
}

function rolloverSteps(stepNum) {

    if (undefined === stepNum) {
        stepNum = 1;
    }
    $('#spinner').show();

    truncateYear = 0;
    if ($('#truncateYear').prop('checked') && stepNum == 1) {
        truncateYear = 1;
    }

    urlString = 'rollover/' + stepNum;
    $.ajax(urlString, {
        type: 'POST',
        data: {
            'year': $('#yearSelect').val(),
            'truncateYear': truncateYear,
        },
        dataType: 'json',
        success: function(returnData) {
            resultText = '<div class="row"><h4>' + returnData.msg + '</h4>';
            msg = resultText.concat('<p><strong>Metric</strong>: ' + returnData.metric +
                '<br><strong>Expected</strong>: ' + returnData.expected +
                '<br><strong>Actual</strong>: ' + returnData.actual + '</p></div>');
            showRolloverStep(msg);
            $(document).scrollTop($(document).height());
            console.log(JSON.stringify(returnData, null, 4));
            if (returnData.result == 1 && returnData.nextStep > 0) {
                rolloverSteps(returnData.nextStep)
            } else {
                $('#spinner').hide();
                return true;
            }
        },
        error: function(returnData) {
            console.log('Error: ' + JSON.stringify(returnData, null, 4));
        }
    });
}

function showRolloverStep(msg) {
    const div = document.getElementById('serverResponse');
    div.innerHTML += msg;
}

