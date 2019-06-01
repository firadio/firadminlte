<script>
vue.data.disabled = false;
vue.data.form.pagesize = 10;
vue.data.form.search = '';
var submit_after_result = function (that) {
    that.disabled = false;
    that.$nextTick(() => {
        document.getElementById("input_search").focus();
        document.getElementById("input_search").select();
    });
};
vue.methods.submit = function () {
    const that = this;
    const form = window.clone(that.form);
    that.disabled = true;
    that.ApiPost('/admin/yun/ntuser.php', form).then(function (data) {
        alert(data);
        submit_after_result(that);
    }, function (data) {
        console.log('reject:', data);
        submit_after_result(that);
    }).catch(function (reason) {
        console.log('catch:', reason);
        submit_after_result(that);
    })
};
vue.mounted = function () {
    document.getElementById("input_search").focus();
};
</script>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">远程桌面账号</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <form v-on:submit="submit" onsubmit="return false" :disabled="disabled">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="example1_length">
                                    <label>Show <select v-model="form.pagesize" class="form-control input-sm" :disabled="disabled">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="example1_filter" class="dataTables_filter">
                                    <label>{{$t("搜索")}}:<input
                                    id="input_search" type="search" class="form-control input-sm"
                                    :placeholder="$t('输入要搜索的内容')"
                                    v-model="form.search" :disabled="disabled"
                                    /></label>
                                    <button type="submit" :disabled="disabled">{{$t("搜索")}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1">Gecko</td>
                                      <td>Mozilla 1.1</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td>1.1</td>
                                      <td>A</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 11 to 20 of 57 entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous" id="example1_previous"><a href="javascript:void(0)" data-dt-idx="0" tabindex="0">Previous</a></li>
                                    <li class="paginate_button "><a href="javascript:void(0)" data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button active"><a href="javascript:void(0)" data-dt-idx="2" tabindex="0">2</a></li>
                                    <li class="paginate_button next" id="example1_next"><a href="javascript:void(0)" data-dt-idx="7" tabindex="0">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
