class LinkTop {
    constructor() {
        //Get the button:
        this.buttonLinkTop = document.getElementById("linkTop");
        this.init();
    }
    // When the user scrolls down 20px from the top of the document, show the button
    init() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            this.buttonLinkTop.style.display = "block";
        } else {
            this.buttonLinkTop.style.display = "none";
        }
    }
}

export default LinkTop;