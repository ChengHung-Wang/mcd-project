<?php
    include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "file_include.php" ?>
    <script>
        let app = null;
        let sideBarHeight = null;
        $(function(){
            sideBarHeight = $('.side_bar').offset().top;
            $(window).scroll(() => {
                if($(window).scrollTop() > $("#carouselExampleSlidesOnly").height()){
                    $('.side_bar').css("position", "fixed")

                }else{
                    $('.side_bar').css("position", "static")

                }
            })
            app = new Vue({
                el: '#app',
                data() {
                    return {
                        nav_items: <?php include $file_dir_prefix["json"] . "navbar_item.json" ?>,
                        thanks: <?php include $file_dir_prefix["json"] . "thanks.json" ?>,
                        modal_explode: {
                            cache_bug: false,
                            request_bug: false
                        },
                        fake_plan_images: <?php include $file_dir_prefix["json"] . "fake_plan_images.json" ?>,
                        code_core_ver2: <?php include $file_dir_prefix["json"] . "code_core_ver2.json" ?>,
                        public_fuck_screen: <?php include $file_dir_prefix["json"] . "public_fuck_screen.json" ?>,
                        api_lists: <?php include $file_dir_prefix["json"] . "mcd-api-fix-list.json" ?>
                    }
                },
                created() {
                    this.thanks.sort((x, y) => new Intl.Collator('zh-Hang-CN').compare(x.name.slice(0, 1), y.name.slice(0, 1)));
                },
                methods: {
                    apiIndex(index) {
                        return "API " + ((index + 1).toString().padStart(2, "00"))
                    }
                }
            })
        })

    </script>
    <style>
        nav> .el-menu {
            overflow-y: auto;
            padding: 40px 0 0;
            position: sticky;
            top: 0;
            bottom: 0;
            transition: transform .25s ease-out;
            width: 300px;
            z-index: 20;
        }
    </style>
</head>
<body>
    <?php include "banner.php" ?>
    <div class="container-fluid" id="app">
        <div class="row">
            <nav class="col-2 p-0">
                <?php include "navbar.php" ?>
            </nav>
            <div class="col-10 float-left">
                <?php include "persons.php" ?>
                <?php include "技術.php" ?>
                <?php include "發現過程.php" ?>
                <?php include "開始研究.php" ?>
                <?php include "程式.php" ?>
                <?php include "意見_需求調查.php" ?>
                <?php include "後續.php" ?>
                <?php include "檢討.php" ?>
                <?php include "改良.php" ?>
                <?php include "感謝.php" ?>
                <?php include "材料清單.php" ?>
                <?php include "時間軸_貢獻度.php" ?>
                <?php include "資料來源.php" ?>
                <?php include "footer.php" ?>
            </div>
        </div>
    </div>
</body>
</html>