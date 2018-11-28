$(document).ready(function () {
    var roomid = $('#id').val();
    
    $.ajax({
        type: 'POST',
        url: 'ajax/features.php',
        dataType: "json",
        data: {
            id: roomid,
            option: 'GETFEATURES'
        },
        success: function (room_features) {
console.log(room_features);
            $.each(room_features, function (key, room_feature) {
                
                $('#feature-' + room_feature).attr("checked", "checked");
                
            });
        }
    });
});