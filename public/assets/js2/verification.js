/*获取span*/
function gspan(obj) {
    while (true)
        if (obj.nextSibling.nodeName != "SPAN")
            obj = obj.nextSibling;
        else
            return obj.nextSibling;
}
/*检查函数*/
function check(obj, info, fun, stat) {
    var spanNode = gspan(obj);
    obj.onfocus = function () {
        spanNode.innerHTML = info;
        spanNode.style.color = "black";
    }
    obj.onblur = function () {
        if (fun(this.value)) {
            spanNode.style.color = "green";
            spanNode.innerHTML = "正确";
        } else {
            spanNode.innerHTML = info;
            spanNode.style.color = "red";
        }
    }
    if (stat == "click") {
        obj.onblur();
    }
}
onload = c;

function c(stat) {
    var status = true;
    var user = document.getElementsByName("username")[0];
    var pass = document.getElementsByName("password")[0];
    var repass = document.getElementsByName("repassword")[0];
    var email = document.getElementsByName("email")[0];
    var birthday = document.getElementsByName("birthday")[0];
    /*调用检查函数检查用户名*/
    check(user, "用户名长度在3-20之间", function (va) {
        if (va.match(/^\S+$/) && va.length >= 3 && va.length <= 20)
            return true;
        else {
            status = false;
            return false;
        }
    }, stat);
    /*调用检查函数检查用密码*/
    check(pass, "密码6-20个字符", function (va) {
        if (va.match(/^\S+$/) && va.length >= 6 && va.length <= 20)
            return true;
        else {
            status = false;
            return false;
        }
    }, stat);
    /*调用检查函数检查密码确认*/
    check(repass, "密码要和上面一样", function (va) {
        if (va.match(/^\S+$/) && va.length >= 6 && va.length <= 20 && va == pass.value)
            return true;
        else {
            status = false;
            return false;
        }
    }, stat);
    /*调用检查函数检查邮箱*/
    check(email, "请输入正确的邮箱", function (va) {
        if (va.match(/\w+@\w+.\w/))
            return true;
        else {
            status = false;
            return false;
        }
    }, stat);
    check(birthday, "请填写生日", function (va) {
        if (va == "") {
            return false;
            status = false;
        } else {
            return true;
        }
    });
    return status;
}