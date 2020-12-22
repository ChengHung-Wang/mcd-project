<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>感謝</h3>
            <span>依照字典排序規則排序</span>
            <hr>
        </div>
        <div class="col-3 thanks_card shadow-sm" @click="main.description_modal = true" v-for="(main, index) in thanks" :key="index">
            <img :src="'img/thanks/' + main.img" class="w-100" alt="">
            <h2 class="mt-3 mb-0" style="font-size: 26px">
                <strong>{{ main.name }}</strong>
            </h2>
            <span class="badge badge-gold-outline">{{ main.help }}</span><br><br>
            <span
                    class="text-secondary text-sm description mb-3"
                    v-html="main.history.map(e => e.description).join('<br>')">
            </span>
        </div>
        <div class="col-12">
            <div class="h30"></div>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
    </div>
</div>
<el-dialog
        v-for="(main, index) in thanks" :key="index"
        :title="main.name"
        :visible.sync="main.description_modal"
        width="70%">
    <div class="container">
        <div class="row">
            <div class="col-4 p-0 text-center">
                <el-avatar :src="'img/thanks/' + main.img" style="width: 250px; height: 250px"></el-avatar>
                <h2 class="mt-3 mb-0" style="font-size: 26px">
                    <strong>{{ main.name }}</strong>
                </h2>
                <span class="badge badge-gold-outline">{{ main.help }}</span><br><br>
            </div>
            <div class="col-8" style="max-height: 500px; overflow-y: auto">
                <el-timeline>
                    <el-timeline-item
                            v-for="(timestamp_main, timestamp_index) in main.history"
                            :key="timestamp_index"
                            :timestamp="timestamp_main.timestamp">
                        {{timestamp_main.description}}
                    </el-timeline-item>
                </el-timeline>
            </div>
        </div>
    </div>
    <span slot="footer" class="dialog-footer">
    <el-button @click="main.description_modal = false">取 消</el-button>
    <el-button type="primary" @click="main.description_modal = false">确 定</el-button>
  </span>
</el-dialog>
