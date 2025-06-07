



$(document).ready(function() {
    // عند إرسال رسالة من المستخدم
    $('#sendMessageBtn').on('click', function() {
        var userMessage = $('#userMessage').val();

        if (userMessage) {
            // إظهار الرسالة في صندوق الدردشة
            $('#chatbox').append('<div class="user-msg">' + userMessage + '</div>');
            $('#userMessage').val(''); // مسح الحقل بعد الإرسال

            // إرسال الرسالة إلى البوت عبر API Laravel
            $.ajax({
                url: '/send-to-bot',
                method: 'POST',
                data: {
                    message: userMessage,
                    _token: $('meta[name="csrf-token"]').attr('content')  // تأكد من أنك تستخدم CSRF token في Laravel
                },
                success: function(response) {
                    // إضافة رد البوت في صندوق الدردشة
                    $('#chatbox').append('<div class="bot-msg">' + response.reply + '</div>');
                }
            });
        }
    });
});
