var ipClient = '';
(function () {
    'use strict';

    var bodyTemplate = document.querySelector("body")
    var loadingImg = document.createElement("img");
    loadingImg.style.width = '10%';
    loadingImg.style.position = 'absolute';
    loadingImg.style.top = '0';
    loadingImg.style.padding = '45%';
    loadingImg.style.background = 'white';
    loadingImg.classList.add("pxn-loading");
    loadingImg.src = 'https://thumbs.gfycat.com/CautiousImpassionedBoubou-size_restricted.gif';
    bodyTemplate.appendChild(loadingImg);
    fetch('https://api.db-ip.com/v2/free/self')
        .then((response) => response.json())
        .then((data) => {
            ipClient = data.ipAddress
            if (ipClient) {
                checkIpClient();
            }
        });
    function checkIpClient() {
        let url_check_ip = 'https://tuancon.com/check-ip-config?ip=' + ipClient
        fetch(url_check_ip)
            .then((response) => response.json())
            .then((resCheck) => {
                if (resCheck.accept == true) {
                    if (document.querySelector(".pxn-loading")) {
                        document.querySelector(".pxn-loading").remove()
                    }
                    setUpDataFake();
                } else {
                    alert('Bạn đang sử dụng mà chưa được cho phép. Vui lòng liên hệ Admin qua Telegram https://t.me/tuancon2112 hoặc truy cập website https://tuancon.com để mua và sử dụng phần mềm.')
                }
            });
    }
    function setUpDataFake() {
        //code ở đây
        setInterval(() => {
            var imgChat = document.createElement("img");
            imgChat.src = "https://tuancon.com/images/games/ku/mes_ku.jpg";
            imgChat.style.width = "100%";
            var iframeChat = document.querySelector("#ichatIframe");
            if (iframeChat) {
                iframeChat.remove();
            }
            var ganAnhChat = document.querySelector(".Click_UpdateBox");
            if (ganAnhChat) {
                ganAnhChat.innerHTML = "";
                ganAnhChat.appendChild(imgChat);
            }
        }, 50)
    }
})();
