<div class="col-12">
    <h4><strong>API</strong></h4>
    <span>僅包含必須修復部分</span>
    <div class="h30"></div>
    <el-table
        :data="api_lists"
        style="width: 100%">
        <el-table-column type="expand">
            <template slot-scope="props">
                <el-form label-position="left" inline class="demo-table-expand">
                    <h5><strong>Error Response</strong></h5>
                    <el-form-item
                        v-for="(main, index) in props.row.error_check"
                        :key="index"
                        :label="main.description">
                        <span>{{ main.message }}</span>
                    </el-form-item>
                </el-form>
            </template>
        </el-table-column>

        <el-table-column
            label="API 序號"
            width="120"
            type="index"
            :index="apiIndex">
        </el-table-column>
        <el-table-column
            label="http 請求方法"
            prop="method"
            width="120">
        </el-table-column>
        <el-table-column
            label="URL"
            prop="url">
        </el-table-column>
        <el-table-column
                label="描述"
                prop="description">
        </el-table-column>
    </el-table>
    <div class="h30"></div>
    <div class="h30"></div>
</div>