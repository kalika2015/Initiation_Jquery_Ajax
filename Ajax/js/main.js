



$(document).ready(function () {
    $('#firstname').keyup(function () {
        $.get("traitement.php", {firstname: $(this).val()}, function (data) {
            $("datalist").empty();
            $("datalist").html(data);
        });
    });
});