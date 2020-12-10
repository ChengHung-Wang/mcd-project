<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>檢討</h3>
            <hr>
        </div>
        <div class="col-12">
            <h5>漏洞與建議</h5>
            <p>

                <strong class="text-danger fsc">
                    問題：API重要資料存取時沒有驗證用戶權限
                    <span @click="modal_explode.request_bug = true" class="badge badge-pill badge-danger ml-2"><i class="el-icon-paperclip"></i></span>
                    <br>
                </strong>
                建議解決方案：訪問該API時，應將token加上，以確保用戶權限並記錄存取時間
            </p>
            <p>
                <strong class="text-danger">
                    問題：API 無訪問次數限制
                </strong>
                建議解決方案：以MVC架構的Laravel 建構之 API 來說，
                可以使用中介層(Middleware)限制該用戶在存取資料的次數，
                若發生不當存取行為可以對請求回傳 error 429 <br>
                現在主流的API如facebook, instagram皆有防止爬蟲大量請求資源的機制
            </p>
            <p>
                <strong class="text-danger">
                    問題：App 快取機制bug
                    <span @click="modal_explode.cache_bug = true" class="badge badge-pill badge-danger ml-2"><i class="el-icon-paperclip"></i></span>
                    <br>
                </strong>
                建議解決方案：此bug產生主要有3個原因 <br>
                1. App端的重要資料未加密 <br>
                2. 讀取的資料並沒有事先經過驗證，導致被替換也能夠正常使用 <br>
                3. 要兌換餐點時，雖然Server端會記錄我換的東西但POS機端無法得知內容，僅能依據手機中的圖片出餐 <br>
            </p>
            <p>
                <strong class="text-danger">
                    問題：重要檔案（兌換圖資）的檔名易於猜測，加上API沒有訪問次數限制，黑客將可能使用目錄爆破的方式竊取主機中的檔案（如尚未上架的商品資料）<br>
                </strong>
                建議解決方案：API連結應該採用動態產生方式，例如：<br>https://{api-url}/{user-token(hash)}/{event_id}<br>
                存取後連結即失效，若在一段時間沒有請求該資源，連結也應作廢
            </p>
            <br>

            <h5>收穫</h5>

        </div>
    </div>
</div>

<el-dialog
    title="Cache Bug"
    :visible.sync="modal_explode.cache_bug"
    width="20%"
    top="0"
    custom-class="center"
>
    <video controls class="w-100">
        <source src="target_files/cache_bug/!important-app_cache_bug.mov">
    </video>
    <span slot="footer" class="dialog-footer">
    <el-button @click="modal_explode.cache_bug = false">取 消</el-button>
    <el-button type="primary" @click="modal_explode.cache_bug = false">確 定</el-button>
  </span>
</el-dialog>

<el-dialog
    title="http request Bug"
    :visible.sync="modal_explode.request_bug"
    width="60%"
    top="0"
    custom-class="center"
>
    <img src="target_files/request_bug/request_bug.png"  alt="" class="w-100">
    <span slot="footer" class="dialog-footer">
    <el-button @click="modal_explode.request_bug = false">取 消</el-button>
    <el-button type="primary" @click="modal_explode.request_bug = false">確 定</el-button>
  </span>
</el-dialog>