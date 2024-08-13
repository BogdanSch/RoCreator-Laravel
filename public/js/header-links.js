(function ($) {
    const path = window.location.pathname;
    const currentPage = path.split("/").pop() || "home";

    const setActiveClass = (element) => {
        element.addClass("active");
    };

    const activateLink = (selector, hrefCondition) => {
        $(selector).each(function () {
            const link = $(this);
            const linkHref = link.attr("href").split("/").pop();
            if (hrefCondition(linkHref)) {
                setActiveClass(link);
                return false;
            }
        });
    };

    const allHeaderLinks = $("li.header__item a");

    if (path.includes("games")) {
        const gamesSubList = $(".header__item.sub-list");
        setActiveClass(gamesSubList.find(".opener"));
        activateLink(
            gamesSubList.find(".header__lower__item a"),
            (linkHref) => currentPage === linkHref
        );
    } else {
        activateLink(allHeaderLinks, (linkHref) => currentPage === linkHref);
    }

    if (currentPage === "home") {
        setActiveClass(allHeaderLinks.first());
    }
})(jQuery);
