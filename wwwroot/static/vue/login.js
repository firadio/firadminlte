vue.data.disabled = false;
vue.data.form.email = '';
vue.data.form.password = '';
vue.methods.submit = function () {
    const that = this;
    const form = window.clone(that.form);
    form.password = md5(form.password);
    that.disabled = true;
    that.ApiPost('/public/email/login.php', form).then(function (data) {
        that.disabled = false;
        if (data.hasOwnProperty('flag')) {
            if (data.flag === 'logined') {
                location.href = '/admin.html'
            }
            return;
        }
        alert(data);
    }, function (data) {
        that.disabled = false;
        console.log('reject:', data);
    }).catch(function (reason) {
        that.disabled = false;
        console.log('catch:', reason);
    })
};
