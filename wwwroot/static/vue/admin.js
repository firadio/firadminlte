vue.created = function () {
    // alert('vue.created');
    this.loadmenu();
    jQuery('.sidebar-menu').show();
};
vue.data.pathparts = window.parseURL().pathparts
// console.log(vue.data.pathparts)
function load_menu (menu) {
    // 把从数据库里读取到的二维表转换成树形结构
    const out = {};
    for (var i in menu) {
        const row = menu[i];
        if (!out.hasOwnProperty(row['parent_id'])) {
            out[row['parent_id']] = [];
        }
        const r = {};
        r.name = row['name'];
        r.title = row['title'];
        r.fa = row['fa'];
        r.child = (function(){
            if (!out.hasOwnProperty(row['id'])) {
                out[row['id']] = [];
            }
            return out[row['id']];
        })();
        out[row['parent_id']].push(r);
        // alert(row['name']);
    }
    // alert(JSON.stringify(out['0']));
    return out['0'];
}
vue.data.menu = [];
vue.watch = {};
vue.watch.menu = function () {
    this.$nextTick(function(){
        console.log('watch.menu>$nextTick');
        jQuery(window).trigger('load');
    })
};
vue.methods.loadmenu = function () {
    const that = this;
    this.ApiPost('/admin.php', {}).then(function (data) {
        that.menu = load_menu(data.menu);
    }, function (data) {
        location.href = '/login.html'
    }).catch(function (reason) {
        console.log('catch11:', reason);
    })
};
