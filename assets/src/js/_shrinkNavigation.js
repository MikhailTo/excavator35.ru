class shrinkNav {
    constructor() {

        this.header = document.getElementById("masthead");
        this.nav = document.getElementById("site-navigation");
        this.logo = document.getElementById("logo");
        this.change();


    }

    change() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            this.header.style.height = "40px";
            if (this.nav.className === "main-navigation responsive") {
                this.nav.style.top = "40px";
            }

            this.logo.style.fontSize = "2rem";


        } else {
            this.header.style.height = "72px";
            if (this.nav.className === "main-navigation responsive") {
                this.nav.style.top = "72px";
            }
            this.logo.style.fontSize = "3rem";
        }
    }
}


export default shrinkNav;