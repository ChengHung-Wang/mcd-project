<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>後續</h3>
            <hr>
        </div>
        <div class="col-12">
            <el-tabs tab-position="right" style="height: 280px;">
                <el-tab-pane label="序">
                    <h5 class="text-danger"><strong>Dcard事件</strong></h5>
                    <span>
                        這個學術研究用途的實驗網站因為公開於網路中，被大家誤解為我有意要破解麥當勞報報來販售 <br>
                        甚至還有人在下面描述關於我的事情，對此我澄清，<br>
                        <strong class="text-danger">
                            我不會拿這個網站去麥當勞兌換任何商品，我所兌換的麥當勞報報皆是從AppStore下載的正版App。<br>
                        </strong>
                        多開是可以做到的，我想這對於有基本資訊素養的人都知道。<br>
                        也謝謝身旁的友人願意讓我使用他的帳戶來讓我有更多抽獎機會
                    </span><br>
                    <span class="badge badge-secondary text-white mt-2" onclick="location.href='https://www.dcard.tw/f/trending/p/234727030'">
                        <i class="el-icon-paperclip"></i>
                        網站連結
                    </span>

                </el-tab-pane>
                <el-tab-pane label="相關截圖">
                    <div class="col-12">
                        <div class="demo-image">
                            <div v-for="(main, index) in public_fuck_screen" class="block">
                                <span class="demonstration">{{ main.title }}</span>
                                <el-image fit="cover" :src="main.img_src" style="width: 150px; height: 150px" :preview-src-list="public_fuck_screen.map(e => e.img_src)">
                                    <div slot="placeholder" class="image-slot">
                                        Loading<span class="dot">...</span>
                                    </div>
                                </el-image>
                            </div>
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="Google搜尋">
                    <h6 class="text-secondary"><strong>我的網站直接衝到搜尋排名第二</strong></h6>
                    <el-image
                            style="height: 90%"
                            src="img/public_fuck/google_search.jpg"
                            :preview-src-list="['img/public_fuck/google_search.jpg']" fit="cover">
                    </el-image>
                </el-tab-pane>
                <el-tab-pane label="網站發生了...">
                    <el-image
                            src="./img/public_fuck/viewer_count.png"
                            :preview-src-list="['./img/public_fuck/viewer_count.png']" fit="cover">
                    </el-image>
                </el-tab-pane>
            </el-tabs>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
        <div class="col-12">
            <h5 class="text-danger"><strong>通報台灣金拱門相關負責公司</strong></h5>
            <span>漏洞報告準備得差不多的時候，我將該問題回報給廠商，請他們多留意。他們也在下午回電，表示會再通知相關部門</span>
        </div>
        <div class="col-12">
            <div class="demo-image__placeholder w-100 mt-2 d-flex">
                <div class="block w-50 p-5">
                    <span class="demonstration">填寫表單</span>
                    <el-image src="img/bug_response/write.png" :preview-src-list="['img/bug_response/write.png', 'img/bug_response/after_submit.png']">
                        <div slot="placeholder" class="image-slot">
                            Loading<span class="dot">...</span>
                        </div>
                    </el-image>
                </div>
                <div class="block w-50 p-5">
                    <span class="demonstration">送出</span>
                    <el-image src="img/bug_response/after_submit.png" :preview-src-list="['img/bug_response/write.png', 'img/bug_response/after_submit.png']">
                        <div slot="placeholder" class="image-slot">
                            Loading<span class="dot">...</span>
                        </div>
                    </el-image>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="h30"></div>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
    </div>
</div>