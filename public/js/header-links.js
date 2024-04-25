$(document).ready(function () {
    let path = window.location.pathname;
    let currentPage = path.split("/").pop();

    const allHeaderLinks = $("li.header__item a");

    allHeaderLinks.each(function () {
        const link = $(this);
        let linkHref = link.attr("href").split("/").pop();

        if (currentPage.includes("games")) {
            let gamesButton = $("li.sub-games .opener");
            if (gamesButton.length) {
                gamesButton.addClass("active");
            }
            return;
        }
        if (currentPage === linkHref) {
            $(this).addClass("active");
            return;
        }
    });
});
