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