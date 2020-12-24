<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>資料來源</h3>
            <hr>
        </div>
        <div class="col-12">
            <h6>
                網頁設計技術
            </h6>
            <el-table
                    :data="reference_source"
                    style="width: 100%">
                <el-table-column
                        label="#"
                        type="index">
                </el-table-column>
                <el-table-column
                        prop="title"
                        label="名稱"
                        width="240">
                </el-table-column>
                <el-table-column
                        prop="description"
                        label="描述">
                </el-table-column>
                <el-table-column
                        prop="source"
                        label="來源/ISBN">
                </el-table-column>
            </el-table>
        </div>
        <div class="col-12">
            <div class="h30"></div>
            <div class="h30"></div>
            <div class="h30"></div>
        </div>
    </div>
</div>