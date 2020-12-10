<div class="h30"></div>
<div class="h30"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>開始研究</h3>
            <hr>
        </div>
    </div>
    
    <!-- 監控流量、封包 -->
    <?php include "research_targets/http_fetch.php" ?>
    <!-- 將抓包所獲得的資料轉至API測試工具中繼續深入研究 -->
    <?php include "research_targets/http_request_research.php" ?>
</div>