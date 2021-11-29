function isMobile() {

    if (sessionStorage.desktop)
        return false;
    else if (localStorage.mobile)
        return true;

    var mobile = ['iphone', 'ipad', 'android'];
    for (var i in mobile)
        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;

    return false;
}
