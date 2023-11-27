"use strict";

let forms = document.querySelectorAll("form.contacts__form");
const mailStatusRoute = "/mail-status";

forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        let timeField = form.querySelector("#time");
        let currentDate = new Date();
        let options = { day: "2-digit", month: "long", year: "numeric" };
        let formattedDate = currentDate.toLocaleDateString(undefined, options);
        timeField.value = formattedDate;

        fetch(form.action, {
            method: "Post",
            body: new FormData(form),
        })
            .then((html) => {
                window.location.assign(`${mailStatusRoute}?mailStatus=success`);
            })
            .catch((error) => {
                window.location.assign(`${mailStatusRoute}?mailStatus=error`);
            });
    });
});
