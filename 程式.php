<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>程式</h2>
            <hr>
        </div>
        <div class="col-sm-12">
            <el-alert
                    title="本程式的目標"
                    type="info"
                    description="進入麥當勞報報的服務器主機當中，利用訪問漏洞撈出主機中所有的圖片檔案"
                    :show-icon="true"
                    :closable="false"
            >
            </el-alert>
            <div class="h30"></div>
        </div>
        <div class="col-sm-2 ccenter">
            <h4>嘗試過程</h4>
            <p>ver 1</p>
        </div>
        <div class="col-sm-10" style="min-height: 250px;">
            <el-tabs tab-position="left" style="height: 250px;">
                <el-tab-pane label="思維">
                    <div class="row">
                        <div class="col-6 ccenter">
                            <p>利用圖片是流水好的特點，跑個迴圈，逐一訪問每個有可能出現的圖片</p>
                        </div>
                        <div class="col-6">
                            <el-image
                                    src="./img/think_code_1.png"
                                    :preview-src-list="['./img/think_code_1.png']" fit="cover">
                            </el-image>
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="程式預覽">
                    <div class="row">
                        <div class="col-12">
                            <img src="img/coding/fetch_js_ver_1.png" alt="" class="w-100" style="height: 380px; object-fit: cover">
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="問題">
                    <div class="row">
                        <div class="col-6 ccenter">大量的迴圈，網頁崩潰機率高、甚至會有死機的情況</div>
                        <div class="col-6">
                            <img src="img/Chrome_err.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="解決＆發現">
                    <div class="row">
                        <div class="col-12">
                            <el-collapse accordion value="1">
                                <el-collapse-item title="因為這次實驗發現的漏洞" name="1">
                                    <p>=> 訪問真的不需要token就可以訪問到這些核心內容</p>
                                    <p>
                                        => 回傳的http state code 要不200 要不 404，沒有出現例如：401, 403, 429之類的
                                        <strong class="text-danger">
                                            <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;這表示該API沒有權限驗證也沒有訪問次數限制，表示我們可以無限制的刷洗他們的API來得到主機中的資料。<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目錄爆破將可成為下一步的手法
                                        </strong>
                                    </p>
                                </el-collapse-item>
                                <el-collapse-item title="問題解決方案" name="2">
                                    <p>
                                        A1: 使用資料庫作為快取，若嘗試到的連結有返回資料，那麼就將這筆資料的連結寫進資料庫，下次就可以不必花費很多時間再重新抓取曾經抓過的東西 <br>
                                        A2: 使用Server端語言（如php）抓取資料，將處理大型迴圈的程式交給Server端處理，以減輕用戶端的負擔。後端抓取到資料後再以API的形式傳給前端顯示、處理
                                    </p>
                                </el-collapse-item>
                            </el-collapse>

                        </div>
                    </div>
                </el-tab-pane>
            </el-tabs>
        </div>
        <div class="col-12">
            <div class="h30"></div>
        </div>
        <div class="col-sm-2 ccenter">
            <h4>嘗試過程</h4>
            <p>ver 2</p>
        </div>
        <div class="col-sm-10" style="min-height: 250px;">
            <el-tabs tab-position="left" style="height: 250px;">
                <el-tab-pane label="思維">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                最終決定採用寫入資料庫的方式，來解決這樣的問題。<br>
                                如果這張照片存在，使用無刷新技術將找到的照片連結存入資料庫
                            </p>
                        </div>
                        <div class="col-2 fsc">
                            <span class="badge badge-warning">Request API</span>
                            <i class="el-icon-right ml-2"></i>

                        </div>
                        <div class="col-6 fsc flex-wrap">
                            <div class="w-100 fsc m-2">
                                <span class="badge badge-success">img onload</span>
                                <i class="el-icon-right ml-2 mr-2"></i>
                                <span class="badge badge-dark">{ajax} save photo url to SQL</span>
                            </div>
                            <div class="w-100 fsc m-2">
                                <span class="badge badge-danger">Request API</span>
                                <i class="el-icon-right ml-2 mr-2"></i>
                                <div class="badge badge-dark">$(this).hide()</div>
                            </div>
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="關鍵程式">
                    <div class="row">
                        <div class="col-12">
                            <div class="demo-image">
                                <div v-for="(main, index) in code_core_ver2" class="block">
                                    <span class="demonstration">{{ main.title }}</span>
                                    <el-image fit="cover" :src="main.img_src" style="width: 150px; height: 150px" :preview-src-list="code_core_ver2.map(e => e.img_src)">
                                        <div slot="placeholder" class="image-slot">
                                            Loading<span class="dot">...</span>
                                        </div>
                                    </el-image>
                                </div>
                            </div>
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="得到的結局">
                    <div class="row">
                        <div class="col-4 ccenter">
                            <h2>
                                我撈到了 <br><strong class="text-danger">370+ <br></strong>張照片
                            </h2>
                        </div>
                        <div class="col-6">
                            <el-image fit="cover" src="img/coding_ver2/sql.png" style="width: 100%" :preview-src-list="['img/coding_ver2/sql.png']">
                                <div slot="placeholder" class="image-slot">
                                    Loading<span class="dot">...</span>
                                </div>
                            </el-image>
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="意外發現">
                    <div class="row">

                    </div>
                </el-tab-pane>
            </el-tabs>
            <div class="h30"></div>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
    </div>
</div>