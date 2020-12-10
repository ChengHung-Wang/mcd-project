<div class="h30"></div>
<div class="h30"></div>
<div class="h30"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section_title">
                <div class="section_subtitle">序</div>
                <!-- About Title -->
                <h3 class="section_main_title">強大威力<strong> 改寫一切</strong></h3>
            </div>
        </div>
        <div class="col-sm-12">
            很感謝這一路上幫助這份專案的人，這不是我一個人或是任何一個人能完成的，謝謝你們，使它完整
            這是一份有關於麥當勞報報本身App與Server端的研究報告，請勿用於其他非法用途<br>
            -- Since 2019-02-14 --
        </div>
    </div>
</div>
<div class="h30"></div>
<div class="h30"></div>
<div class="h30"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section_title">
                <div class="section_subtitle">研發動機</div>
                <!-- About Title -->
                <h3 class="section_main_title">當隻長頸鹿<strong> 發現奧妙</strong></h3>
            </div>
        </div>
        <div class="col-sm-12">
            <p>每天看著麥當勞報報的獎品出來，總覺得那些獎品出來的方式很與眾不同，應該是API發一張圖片來表示抽到的東西，實質在兌換的過程中似乎也沒有驗證
也許這就是個漏洞，曾經經歷過網頁設計、網路安全的我，決定來試試看我的推理是不是真的那樣</p>
        </div>
    </div>
</div>


<section class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-bottom: 15px;">
                <div class="section_title">
                    <div class="section_subtitle">組員介紹</div>
                    <!-- About Title -->
                    <h3 class="section_main_title">一切<strong> 皆Pro</strong></h3>
                    <hr>
                </div>
            </div>
            <?php
                $data = f("SELECT * FROM `profiles` WHERE `type` = 1");
                foreach($data as $main){
            ?>
            <div class="col-lg-4 col-md-6">
                <figure class="snip1447">
                    <img src="img/profile_card/<?= $main['bg_img'] ?>" alt="sample87" style="width: 100%;height: 300px;object-fit: cover;min-height: 300px;">
                    <figcaption><img src="img/profile_card/<?= $main['profile_img'] ?>" alt="profile-sample4" class="profile snip1447_profile_img">
                    <h2><?= $main['name'] ?><span><?= $main['work_on'] ?></span></h2>
                    </figcaption>
                </figure>
            </div>
            <?php
                }
            ?>
            <div class="col-sm-4 profile_frame">
                <div class="profile" style="height: 100px;">
                    <img src="img/profile_card/c5716eb9f1fcde5161935e7b35ee003f.jpeg" alt="">
                    <h4>
                        <span class="badge badge-secondary text-white">指導老師</span>
                        <br>
                        李宏傑
                        <br>
                        <p style="color: gray;font-size: 15px;">
                            電子學、程式設計
                        </p>
                    </h4>
                </div>
            </div>
            <div class="col-sm-4 profile_frame">
                <div class="profile" style="height: 100px;">
                    <img src="img/profile_card/11111.jpg" alt="">
                    <h4>
                        <span class="badge badge-secondary text-white">指導老師</span>
                        <br>
                        黃仁伸
                        <br>
                        <p style="color: gray;font-size: 15px;">
                            電子學、程式設計
                        </p>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="h30"></div>
<div class="h30"></div>