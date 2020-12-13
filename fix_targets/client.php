<?php
    $target_images = [];
    for($i = 1; $i <= 5; $i ++)
        $target_images[] = $file_dir_prefix["mcd-app-web"] . "0" .$i . ".png";
?>
<div class="col-12">
    <h4><strong>用戶端</strong></h4>
</div>
<div class="col-12">
    <div class="demo-image">
        <div v-for="(main, index) in ['<?=  join("','", $target_images) ?>']" class="block" style="width: calc((1140px - 30px) / 5); box-sizing: border-box">
            <el-image fit="cover" :src="main" style="width: 150px; height: 210px" :preview-src-list="['<?=  join("','", $target_images) ?>']">
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
</div>