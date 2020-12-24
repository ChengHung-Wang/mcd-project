<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>時間軸/貢獻度</h3>
            <hr>
        </div>
        <div class="col-4">
            <h2 class="mb-3"><strong>2019</strong></h2>
            <el-timeline>
                <el-timeline-item
                        v-for="(timestamp_main, timestamp_index) in project_timestamp"
                        :key="timestamp_index"
                        :timestamp="timestamp_main.date"
                        v-if="timestamp_main.date.indexOf('2019') != -1">
                    {{ timestamp_main.description }}
                </el-timeline-item>
            </el-timeline>
        </div>
        <div class="col-4">
            <h2 class="mb-3"><strong>2020</strong></h2>
            <el-timeline>
                <el-timeline-item
                        v-for="(timestamp_main, timestamp_index) in project_timestamp"
                        :key="timestamp_index"
                        :timestamp="timestamp_main.date"
                        v-if="timestamp_main.date.indexOf('2020') != -1">
                    {{ timestamp_main.description }}
                </el-timeline-item>
            </el-timeline>
        </div>
        <div class="col-4">
            <h2 class="mb-3"><strong>2021</strong></h2>
            <el-timeline>
                <el-timeline-item
                        v-for="(timestamp_main, timestamp_index) in project_timestamp"
                        :key="timestamp_index"
                        :timestamp="timestamp_main.date"
                        :color="timestamp_main.date == '2021-01-08' ? '#dc3545' : ''"
                        v-if="timestamp_main.date.indexOf('2021') != -1">
                    {{ timestamp_main.description }}
                </el-timeline-item>
            </el-timeline>
        </div>
        <div class="col-12">
            <div class="h30"></div>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
    </div>
</div>