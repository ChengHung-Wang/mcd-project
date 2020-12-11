<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>感謝</h3>
            <span>依照字典排序規則排序</span>
            <hr>
        </div>
        <div class="col-3 thanks_card shadow-sm" v-for="(main, index) in thanks" :key="index">
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