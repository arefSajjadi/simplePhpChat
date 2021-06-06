$(document).ready(function () {

    let friend_id = $('#friend_id').val();
    let text = $('#text');


    /**
     * --------------------------------------------------------------
     * send message.
     * --------------------------------------------------------------
     */
    $('#send').click(function () {
        $.post("app/controllers/chatController.php", {
            friend_id: friend_id,
            text: text.val(),
            store: true
        });
        list();
    });

    /**
     * --------------------------------------------------------------
     * show all message.
     * --------------------------------------------------------------
     */
    $('#show_message').click(function () {
        list()
    });

    /**
     * --------------------------------------------------------------
     * get all message.
     * refresh all message [1000=1s], for create dirty live chat :)
     * --------------------------------------------------------------
     */
    function list() {
        setInterval(function () {
            $.post("app/controllers/chatController.php", {
                friend_id: friend_id,
                show: true
            }, function (data) {
                $("#result").html(data);
            })
        }, 500);

        text.val('');
    }
})