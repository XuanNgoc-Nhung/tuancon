var ipClient = '';
(function () {
    'use strict';
    console.log("test thử:")
    $.getJSON('https://api.db-ip.com/v2/free/self', function (data) {
        console.log(JSON.stringify(data.ipAddress));
        ipClient = data.ipAddress
        console.log(ipClient)
        if (ipClient) {
            checkIpClient();
        }
    });

    function checkIpClient() {
        console.log("Tiến hành check ip client")
        let url_check_ip = 'https://tuancon.com/check-ip-config?ip=' + ipClient
        $.getJSON(url_check_ip, function (resCheck) {
            console.log(JSON.stringify(resCheck));
            if (resCheck.accept == true) {
                console.log("Tiến hành")
                setUpDataFake();
            } else {
                console.log("Chặn")
                alert('Bạn đang sử dụng mà chưa được cho phép. Vui lòng liên hệ Admin qua Telegram https://t.me/tuancon2112 hoặc truy cập website https://tuancon.com để mua và sử dụng phần mềm.')
            }
        });
    }

    function setUpDataFake() {
        setInterval(() => {
            let soTien = document.querySelector("#GameMenu > div.icon_inforMoney > span.ng-binding.ng-scope");
            if (soTien) {
                soTien.innerHTML = '15.000';
            }
        }, 0)
    }

    // Your code here...
})();
