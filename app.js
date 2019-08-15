'use strict';

function setOdkFormId() {
    const odkFormId = document.getElementById("odkFormId").value;

// Returns successful data submission message when the entered information is stored in database.
    if (odkFormId === '') {
        alert("Please Fill All Fields");
    } else {
// AJAX code to submit form.
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "crud/setOdkSession.php",
            data: {
                'odkFormId': odkFormId
            },
            cache: false,
            success: function (html) {
                alert(html);
            }
        });
    }
    return false;
}