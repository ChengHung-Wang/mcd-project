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
                        nav_items: <?php include "navbar_item.json" ?>,
                        modal_explode: {
                            cache_bug: false,
                            request_bug: false
                        },
                        fake_plan_images: [
                            'img/fake_plan/plan_list.png',
                            'img/fake_plan/IMG_7192.png',
                            'img/fake_plan/IMG_7977.png'
                        ],
                        code_core_ver2: [
                            {
                                title: "js載入影像",
                                img_src: "img/coding_ver2/img_road_js.png"
                            },
                            {
                                title: "ajax送回後端處理",
                                img_src: "img/coding_ver2/find_url().png"
                            },
                            {
                                title: "後端處理方式",
                                img_src: "img/coding_ver2/write_to_sql.png"
                            },
                            {
                                title: "php auto_insert函式",
                                img_src: "img/coding_ver2/auto_insert().png"
                            }
                        ],
                        public_fuck_screen: [
                            {
                                title: "Google滿江遍野",
                                img_src: "img/public_fuck/google_search_result.png"
                            },
                            {
                                title: "原來2020還有人不知道多開",
                                img_src: "img/public_fuck/important_fuck.png"
                            },
                            {
                                title: "部分快照",
                                img_src: "img/public_fuck/screen_shot2.png"
                            },
                            {
                                title: "幸好有人知道狀況",
                                img_src: "img/public_fuck/true.png"
                            }
                        ]
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="background: url('img/banner.png')">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption">
                <h2 class="display-4">麥當勞報報深層滲透研究探討</h2>
                    <p class="lead">Life is McDonald's</p>
                    <span class="badge badge-pill badge-light" style="padding: 5px 15px;font-weight: 500;">團隊型專題 X 新北高工資訊科</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="app">
        <div class="row">
            <nav class="col-2 p-0">
                <el-menu
                        mode="vertical"
                        default-active="1"
                        class="sticky-top side_bar"
                        @open=""
                        @close=""
                >
                    <el-submenu
                            v-for="(main, index) in nav_items"
                            :key="index"
                            :index="(index + 1).toString()"
                            v-if="main.items.length >= 1"
                    >
                        <template slot="title">
                            <i :class="main.icon"></i>
                            <span v-html="main.title"></span>
                        </template>

                        <el-menu-item-group>
<!--                            <template slot="title">我還沒想好的複選單架構</template>-->
                            <el-menu-item
                                v-for="(main_item, index_item) in main.items"
                                :key="index_item"
                                :index="(index + 1).toString() + `-` + (index_item + 1).toString()"
                                v-html="main_item"
                            >
                            </el-menu-item>
                        </el-menu-item-group>
                    </el-submenu>

                    <el-menu-item v-else>
                        <i :class="main.icon"></i>
                        <span slot="title" v-html="main.title"></span>
                    </el-menu-item>
                </el-menu>
            </nav>
            <div class="col-10 float-left">
                <?php include "persons.php" ?>
                <?php include "材料清單.php" ?>
                <?php include "技術.php" ?>
                <?php include "發現過程.php" ?>
                <?php include "開始研究.php" ?>
                <?php include "程式.php" ?>
                <?php include "意見_需求調查.php" ?>
                <?php include "後續.php" ?>
                <?php include "檢討.php" ?>
                <?php include "footer.php" ?>
            </div>
        </div>
    </div>
</body>
</html>