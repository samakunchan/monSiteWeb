var Scroll = {
    appear : function () {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            document.getElementById("rolTop").style.display = "block";
        } else {
            document.getElementById("rolTop").style.display = "none";
        }
    },
    parameter : {
        block: "start",
        behavior: "smooth"
    },
    smooth : function () {
        document.getElementById("main").scrollIntoView(Scroll.parameter);
    }
};
var Alert = {
    render: function (dialog) {
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH + "px";
        dialogbox.style.left = (winW / 2) - (550 * .5) + "px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Bicycle in Paris";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button id="boutonOk">OK</button>';
        document.getElementById("boutonOk").addEventListener("click", Alert.ok);
    },
    ok: function () {
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
        window.open("http://autre-test.samakunchan.fr/", "_blank");
    },
    popup : function () {
        Alert.render("Ce site ne fonctionne plus. La license de l'exploitant a expiré, vous ne pouvez plus voir les infos de l'API." +
            " Cepandant, j'ai fait un autre site avec l'API de lyon, avec un nouvea design au passage.\nCliquer sur OK pour voir le site de Lyon")
    }
};
var Certificat = {
    inserDiv : function (param, id) {
        var div = document.createElement("div");
        div.id = "certif" + param.id;
        div.classList.add('cards', 'col-lg-4');
        document.getElementById(id).appendChild(div);
        return div;
    },
    inserImg : function (param) {
        var img = document.createElement("img");
        img.src = "certificat/" + param.img;
        return img;
    },
    loopListImg :function (param) {
        div = this.inserDiv(param, param.mark);
        img = this.inserImg(param);
        div.appendChild(img);
    }
};

var Ajax = {
    ajaxGetFile: function (url, callback) {
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.addEventListener("load", function () {
            if (req.status >= 200 && req.status < 400) {
                // Appelle la fonction callback en lui passant la réponse de la requête
                callback(req.responseText);
            } else {
                console.error(req.status + " " + req.statusText + " " + url);
            }
        });
        req.addEventListener("error", function () {
            console.error("Erreur réseau avec l'URL " + url);
        });
        req.send(null);
    }
};