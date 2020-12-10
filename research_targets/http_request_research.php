<div class="row" style="margin: 60px -15px;min-height: 600px;">
    <div class="col-sm-3">
        <h4>將抓包所獲得的資料轉至API測試工具中繼續深入研究</h4>  
        <p>這邊的API測試工具使用 Postman 作為測試工具</p>
        <p>目的在於能夠更精準的解析封包的內容、更改封包內容</p>

        <br><br>
        <span>技術關鍵</span>
        <hr style="margin: 5px 0;margin-bottom: 15px;">
        <input type="button" class="btn btn-info" value="API">
        <input type="button" class="btn btn-info" value="JSON">
        <input type="button" class="btn btn-info" value="header">
    </div>

    <div class="col-sm-9">
        <el-tabs style="height: 500px;">
            <el-tab-pane label="API丟回來的資料">
                <img src="img/postman_find1.png" alt="" style="width: 100%;">
            </el-tab-pane>
            <el-tab-pane label="分析＆推測">
                <div class="row">
                    <div class="col-12">
                        <h4>分析</h4>
                        <p>
                            回傳的資料為object，而其中的 <br> <strong>results->coupon->object_info->image->url</strong> <br> 應該為兌換項目的圖片
                        </p>
                        <br>
                        <h4>推測＆發現</h4>
                        <p>確定獎項為一張張的圖片</p>
                        <p>經由多數次的不同帳號測試(如上截圖)，推測應該是流水號</p>
                        <p>照片應該是流水號，而規則應該是「 <strong>P_GXXXXX.jpg</strong> 」</p>
                        <p>其中的XXXXX為數字，從00000 ~ 99999 都有可能</p>
                        <p>每次用戶端第一次載入這些圖片都會花些時間等待，而第二次幾乎不用等待，表示可能兌換項目有用快取機制</p>
                    </div>
                </div>
            </el-tab-pane>
            <el-tab-pane label="意外發現">
                <div class="row">
                    <div class="col-6 ccenter">
                        <h4 style="color: #333;">讚喔訪問這些圖片連token都不用</h4>
                        <p>看來非常精彩</p>
                    </div>
                    <div class="col-6">
                        <img src="img/photos_request_test.png" alt="" style="width: 100%;">
                    </div>
                </div>
            </el-tab-pane>
            <el-tab-pane label="這時我有大膽的想法">
                <div class="row">
                    <div class="col-6 ccenter">
                        <h2 style="color: #333;">ok... 百萬code飆起來</h2>
                    </div>
                    <div class="col-6">
                        <img src="img/funny/takabear.gif" alt="" style="width: 100%;">
                    </div>
                </div>
            </el-tab-pane>
        </el-tabs>
    </div>
</div>