function checkPaid() {
    $.ajax({
        url: checkUrl,
        type: 'GET',
        success: function (response) {
            if (response == 1) {
                window.location.reload();
            }
        }
    });

    setTimeout(checkPaid, 10000);
}

$(document).ready(function () {

    $("#btn-copy-acoount").click(function(){
        var copyText = document.getElementById("myInput");
        copyText.select();
        document.execCommand("copy");

        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Url copied";
    });

    $("#btn-copy-acoount").mouseout(function(){
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
    });


    (function () {
        var oInterval = setInterval(function () {
            if (typeof window.$ !== 'undefined') {
                clearInterval(oInterval);

                $(document).ready(function ($) {

                    $('.js-TimeCircles').TimeCircles({
                        "animation": "smooth",
                        "bg_width": 1.1,
                        "fg_width": 0.05,
                        "circle_bg_color": "#653e4e",
                        "number_size": 0.2,
                        "time": {
                            "Days": {
                                "text": "Days",
                                "color": "#ec8155 ",
                                "show": false
                            },
                            "Hours": {
                                "text": "Hours",
                                "color": "#ec8155 ",
                                "show": false
                            },
                            "Minutes": {
                                "text": "Minutes",
                                "color": "#ec8155 ",
                                "show": true
                            },
                            "Seconds": {
                                "text": "Seconds",
                                "color": "#ec8155 ",
                                "show": true
                            }
                        }
                    });
                });
            }
        }, 500);
    })();

});
if (typeof checkUrl !== "undefined") {
    checkPaid();
}