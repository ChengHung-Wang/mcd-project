function crawler(photocategory){
    for (var i = 1; i <= 1000; i++) {
        var k = "" + i; //toString();
        var url = "https://mcdapp1.azureedge.net/P_";
        if (i < 10) {
            k = "00" + k;
        } else if (i < 100) {
            k = "0" + k;
        }
        for(j = 0;j <= 3;j++){
            let sub_num = "";
            if(j != 0){
                sub_num = "0" + j;
            }
            $(".main_img").append(
                '<a target="_blank" style="margin-bottom: 30px;" class="col-lg-4 col-md-6" href="' +
                url +
                photocategory +
                k + sub_num +
                '.jpg"><img src="' +
                url +
                photocategory +
                k + sub_num +
                '.jpg" title="' +
                photocategory +
                k +
                '" onerror="$(this).parent().hide()" style="width: 100%" /></a>'
            );
        }
    }
}
