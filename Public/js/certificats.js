var analyseFile = Object.create(Ajax);
var certificat = Object.create(Certificat);
analyseFile.ajaxGetFile("certificats.json", function (rep) {
    var file = JSON.parse(rep);
    file[0].javacript.forEach(function (t) {certificat.loopListImg(t);});
    file[1].html.forEach(function (t) {certificat.loopListImg(t);});
    file[2].web.forEach(function (t) {certificat.loopListImg(t);});
    file[3].php.forEach(function (t) {certificat.loopListImg(t);});
    file[4].wordpress.forEach(function (t) {certificat.loopListImg(t);});
    file[5].versionning.forEach(function (t) {certificat.loopListImg(t);});
    file[6].api.forEach(function (t) {certificat.loopListImg(t);});
    var totals = file[0].javacript.length + file[1].html.length + file[2].web.length + file[3].php.length + file[4].wordpress.length +
        file[5].versionning.length + file[6].api.length;
    document.getElementById("total").textContent = totals;
});
