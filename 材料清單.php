<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>材料清單</h2>
            <hr>
        </div>
        <?php
            $data = f("SELECT * FROM `stuff_lists` ORDER BY `type`");
            foreach($data as $main){
        ?>
            <div class="col-sm-4 profile_frame">
                <div class="profile" style="height: 115px;">
                    <img src="img/stuff_list/<?= $main['img_url'] ?>" alt="" style='border-radius: 0;box-shadow: unset;'>
                    <h4>
                        <span class="badge badge-secondary text-white"><?= $main['type'] == 1 ? "軟件":"硬件 or 材料" ?></span>
                        <br>
                        <?= $main['title'] ?>
                        <br>
                        <p style="color: gray;font-size: 15px;">
                            <?= $main['description'] ?>
                        </p>
                    </h4>
                </div>
            </div> 
        <?php
            }
        ?>
    </div>
</div>