<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>
                改良
            </h3>
            <hr>
        </div>
        <div class="col-12">
            <el-alert
                title="目的"
                type="success"
                description="將上述發現的問題進行修復的實際操作，並針對該修復進行測試"
                show-icon
                :closable=false
            >
            </el-alert>
            <div class="h30"></div>
        </div>
        <!--    Program Thinks Section    -->
        <?php include "fix_targets/program_think.php" ?>
        <!--    API Section (dir = fix_targets)    -->
        <?php include "fix_targets/api/api_list.php" ?>
        <!--    Client Section    -->
        <?php include "fix_targets/client.php" ?>
        <div class="col-12">
            <div class="h30"></div>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
    </div>
</div>