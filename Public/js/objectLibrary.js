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