$(".newsOn").click(function (e) {

    if (this.click) {
        $(this).next().toggleClass("showOnFlex");
    }
})