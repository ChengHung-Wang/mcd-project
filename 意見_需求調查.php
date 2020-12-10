<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>意見/需求度調查</h3>
            <hr>
            <p>為了確認真的會有人想要用這種東西，特別在網站中加入了假的購買方案來試看看會不會真的有人點進去</p>
            <el-alert
                title="溫馨提示"
                type="warning"
                description="為確保能做到盡可能不損害和德昌公司利益，該網站並未透露漏洞問題。僅單存想要測試會有多少人有這種想法，單純實驗用途，並且在網站下方有說明"
                :closable="false"
                show-icon>
            </el-alert>
        </div>
        <div class="col-6">
            <br>
            <el-image src="img/fake_plan/plan_list.png" class="shadow-sm" :preview-src-list="fake_plan_images">
                <div slot="placeholder" class="image-slot">
                    Loading<span class="dot">...</span>
                </div>
            </el-image>
            <br>
            <div class="profile_frame ml-0 mr-0 mt-2 p-0" onclick="location.href='https://mcd-app.blogspot.com/'">
                <div class="profile shadow" style="background-image: none;">
                    <img src="img/stuff_list/mcd_app.png" alt="" style="border-radius: 15px;">
                    <h4>
                        <span class="badge badge-secondary text-white"><i class="el-icon-paperclip"></i>網站連結</span>
                        <br>
                        麥當勞報報Web版
                        <br>
                        <p style="color: gray;font-size: 15px;">
                            https://mcd-app.blogspot.com/
                        </p>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <br>
            <el-image src="img/fake_plan/IMG_7192.png" class="shadow-sm" :preview-src-list="fake_plan_images">
                <div slot="placeholder" class="image-slot">
                    Loading<span class="dot">...</span>
                </div>
            </el-image>
        </div>
        <div class="col-3">
            <br>
            <el-image src="img/fake_plan/IMG_7977.png" class="shadow-sm" :preview-src-list="fake_plan_images">
                <div slot="placeholder" class="image-slot">
                    Loading<span class="dot">...</span>
                </div>
            </el-image>
        </div>
        <div class="col-12">
            <div class="h30"></div>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
    </div>
</div>