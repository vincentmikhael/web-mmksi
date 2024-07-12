var root = window.location.origin + "/static/chatbot";
var channel_id = 124938;
var app_id = "hin-buv34qj3bfpkja3uc";

var params = {
    options: {
        widgetCustomCSS: `
@font-face {
    font-family: mmc-regular;
    src: url(` + root + `/mmc-regular.ttf);
}

@font-face {
    font-family: mmc-bold;
    src: url(` + root + `/mmc-bold.ttf);
    font-weight: bold;
}

.qcw-container {
    font-family: mmc-regular !important;
}

.qcw-cs-container, .qismo-extra, .qcw-container, .qcw-cs-container input, .qcw-comment-form textarea, .qcw-cs-container button {
    font-family: mmc-regular !important;
}

.qismo-input {
    margin-left: 48px !important;
}

.qcw-comment__content {
	font-size: 12px !important;
    line-height: 1.3 !important;
    font-family: mmc-regular !important;
}

.qcw-comment__message {
	max-width: 250px;
	font-size: 12px !important;
    line-height: 1.3 !important;
    font-family: mmc-regular !important;
}

.qcw-comment__message .button-message {
	width: 250px;
}

.qcw-comment__message .comment-text:empty{
	display:none;
}

.qcw-comment__content:empty {
    margin-top:-20px !important;
}

.carousel-container .qcw-carousel__item .comment__card--container {
    width:153px;
	border-radius: 10px;
}

.comment__card--container .comment__card--image {
	height: 80px;
	border-bottom: 0;
}

.comment__card--container .comment__card--image .qcw-image-container {
    background-size: 153px 100px !important;
	width: 153px !important;
	height: 80px !important;
	border-radius: 10px 10px 0 0;
    background-repeat: no-repeat;
}
.comment__card--container .comment__card--image .image-loader {
	width: 153px !important;
}

.comment__card--container .comment__card--title {
	font-size: 12px;
    font-family: mmc-regular !important;
    font-weight: 700;
	line-height: 22px;
	padding: 10px 14px 5px;
    color: #000;
}

.comment__card--container .comment__card--description {
	font-size: 10px;
    font-family: mmc-regular !important;
	line-height: 18px;
	color: #707070;
	padding: 0 14px;
	margin-bottom: 20px;
    min-height: 50px !important;
    max-height: 50px !important;
    overflow:auto !important;
}

.qcw-comment .qcw-comment__time {
    top: -5px !important;
}

.qcw-comment__buttons {
	margin: 10px -90px -20px -60px;
	padding-top: 10px;
	background: #f9f9f9;
	min-width: 350px;
}

.qcw-comment__buttons .action_buttons {
	display: inline-block;
	vertical-align: top;
	width: 33.33333333%;
	padding-right: 5px;
	padding-left: 5px;
	margin-bottom: 10px !important;
	background-color: transparent;
	border-top: 0px !important;
}

.qcw-comment__buttons .action_buttons button {
	background-color: #fff;
	border: 1px solid #b7b7b7;
	border-radius: 6px;
	font-size: 10px;
    font-family: mmc-regular !important;
	background-size: 25px 20px;
	background-position: left;
	background-color: #fff;
	height: 45px;
    padding: 5px;
}

.qcw-comment__buttons .action_buttons a {
	display: inline-block;
	line-height: 40px;
	background-color: #fff;
	border: 1px solid #b7b7b7;
	border-radius: 8px !important;
	font-size: 10px;
    font-family: mmc-regular !important;
	background-size: 25px 20px;
	background-position: left;
	background-color: #fff;
	height: 45px;
}

.qcw-icon{
    display: none !important;
}

.qcw-carousel__item .comment__card--container .qcw-comment__buttons {
	background: #fff;
	text-align: right;
	padding-top: 0px;
	padding-right: 0px;
	min-width: auto;
}

.qcw-carousel__item .comment__card--container .qcw-comment__buttons .action_buttons {
	background-color: #fff;
	width: auto;
}

.qcw-carousel__item .comment__card--container .qcw-comment__buttons button {
	background: none;
	background-color: #fff;
	padding-left: inherit;
	height: 30px;
}
.qcw-comment__message.message__bot{
    background: #e1e1e1 !important;
}

.qcw-comment--carousel .qcw-comment__message.message__bot{
    background: none !important;
}
.bot__indicator{
    display:none !important;
}

.qcw-comment .qcw-comment__username, .qcw-comment--system-event {
    display: none;
}
                          `,
        channel_id: channel_id,
        loginFormUrl: root + '/login.html',
        extra_fields: [
            {
                label: "Phone",
                name: "phone",
                placeholder: "Type your phone number",
                type: "input",
                icon: "",
                visible: true
            }
        ]
    },
    onRoomChanged(data) {
        if (data.comments.length < 1) {
            SendInitialMessage();
        } else if (data.comments[0].message == "Hi") {
            HideInitialMessage(data.comments[0].id);
        }
    },
    onNewMessages(data) { //only available on V4
        if (data[0].comment_before_id == 0 && data[0].message == 'Hi') {
            HideInitialMessage(data[0].id);
        }
    }
};

document.addEventListener('DOMContentLoaded', function () {
    var s, t;

    s = document.createElement('script');
    s.type = 'text/javascript';
    s.src = 'https://s3-ap-southeast-1.amazonaws.com/qiscus-sdk/public/qismo/qismo-v4.js';
    s.async = true;
    s.onload = s.onreadystatechange = function () {
        window.QismoApp = new Qismo(app_id, params);
        ExecuteTimerFunction();
    }

    t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(s, t);
});
async function SendInitialMessage() {
    QismoApp.sendMessage({
        event_name: "send-message",
        text: "Hi"
    });
}
async function HideInitialMessage(id) {
    //hide initial message, still have permission issue (can't access property inside iframe)
}
async function ExecuteTimerFunction() {
    setTimeout(function () {
        InjectMiraText();
        HideButtonIfChatWidgetActive();
        ExecuteTimerFunction();
    }, 100);
}
async function InjectMiraText() {
    var button = $('.qcw-trigger-btn');
    button.hover(function () {
        if (button.length > 0) {
            if ($('#popup_text').length == 0) {
                if ($(button[0]).find('div').length > 0) {
                    $(button[0]).find('div').remove();
                }
                $(button[0]).append('<div id="popup_text" class="svelte-noomlu" style="font-family:mmc-regular"> Hi, saya MIRA! Mau explore kemana hari ini?</div>');
            } else {
                if ($(button[0]).find('div').length > 1) {
                    $(button[0]).find('div').remove();
                    $(button[0]).append('<div id="popup_text" class="svelte-noomlu" style="font-family:mmc-regular"> Hi, saya MIRA! Mau explore kemana hari ini?</div>');
                }
            }
        }
    }, function () {
        $('#popup_text').remove();
    })
}
async function HideButtonIfChatWidgetActive() {
    var widgets = $('iframe');
    var button = $('.qcw-trigger-btn');
    if (widgets.length > 0 && button.length > 0) {
        let isVisible = false;
        for (let i = 0; i < widgets.length; i++) {
            if (widgets[i].id == 'qcw-iframe' || widgets[i].id == 'qcw-login-form-iframe') {
                isVisible = $(widgets[i]).is(":visible");
                if (isVisible)
                    break;
            }
        }
        if (isVisible) {
            $(button[0]).attr("style", "display: none !important;");
        } else {
            $(button[0]).attr("style", "display: block !important;");
        }
    }
}