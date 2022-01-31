/* slider mobile section 6 */
let cards = document.querySelectorAll("#section6homepage #slider-mobile .card");
let dots6mobile = document.querySelectorAll("#section6homepage #dots-mobile div");
let leftarrowmobile = document.getElementById("leftmobile");
let rightarrowmobile = document.getElementById("rightmobile");
var ncm = 0;

function seeCard1() {
    cards[0].className = "card selected";
    cards[1].className = "card noselected";
    cards[2].className = "card noselected";
    cards[3].className = "card noselected";
    cards[4].className = "card noselected";
    cards[5].className = "card noselected";

    dots6mobile[0].className = "selecteddot";
    dots6mobile[1].className = "nonselecteddot";
    dots6mobile[2].className = "nonselecteddot";
    dots6mobile[3].className = "nonselecteddot";
    dots6mobile[4].className = "nonselecteddot";
    dots6mobile[5].className = "nonselecteddot";
}

function seeCard2() {
    cards[1].className = "card selected";
    cards[2].className = "card noselected";
    cards[0].className = "card noselected";
    cards[3].className = "card noselected";
    cards[4].className = "card noselected";
    cards[5].className = "card noselected";

    dots6mobile[1].className = "selecteddot";
    dots6mobile[2].className = "nonselecteddot";
    dots6mobile[0].className = "nonselecteddot";
    dots6mobile[3].className = "nonselecteddot";
    dots6mobile[4].className = "nonselecteddot";
    dots6mobile[5].className = "nonselecteddot";
}

function seeCard3() {
    cards[2].className = "card selected";
    cards[1].className = "card noselected";
    cards[0].className = "card noselected";
    cards[3].className = "card noselected";
    cards[4].className = "card noselected";
    cards[5].className = "card noselected";

    dots6mobile[2].className = "selecteddot";
    dots6mobile[1].className = "nonselecteddot";
    dots6mobile[0].className = "nonselecteddot";
    dots6mobile[3].className = "nonselecteddot";
    dots6mobile[4].className = "nonselecteddot";
    dots6mobile[5].className = "nonselecteddot";
}

function seeCard4() {
    cards[3].className = "card selected";
    cards[1].className = "card noselected";
    cards[2].className = "card noselected";
    cards[0].className = "card noselected";
    cards[4].className = "card noselected";
    cards[5].className = "card noselected";

    dots6mobile[3].className = "selecteddot";
    dots6mobile[1].className = "nonselecteddot";
    dots6mobile[2].className = "nonselecteddot";
    dots6mobile[0].className = "nonselecteddot";
    dots6mobile[4].className = "nonselecteddot";
    dots6mobile[5].className = "nonselecteddot";
}

function seeCard5() {
    cards[4].className = "card selected";
    cards[1].className = "card noselected";
    cards[2].className = "card noselected";
    cards[3].className = "card noselected";
    cards[0].className = "card noselected";
    cards[5].className = "card noselected";

    dots6mobile[4].className = "selecteddot";
    dots6mobile[1].className = "nonselecteddot";
    dots6mobile[2].className = "nonselecteddot";
    dots6mobile[3].className = "nonselecteddot";
    dots6mobile[0].className = "nonselecteddot";
    dots6mobile[5].className = "nonselecteddot";
}

function seeCard6() {
    cards[5].className = "card selected";
    cards[1].className = "card noselected";
    cards[2].className = "card noselected";
    cards[3].className = "card noselected";
    cards[4].className = "card noselected";
    cards[0].className = "card noselected";

    dots6mobile[5].className = "selecteddot";
    dots6mobile[1].className = "nonselecteddot";
    dots6mobile[2].className = "nonselecteddot";
    dots6mobile[3].className = "nonselecteddot";
    dots6mobile[4].className = "nonselecteddot";
    dots6mobile[0].className = "nonselecteddot";
}

function toTheLeftMobile() {   
    ncm--;

    cards[5].className = "card noselected";
    cards[1].className = "card noselected";
    cards[2].className = "card noselected";
    cards[3].className = "card noselected";
    cards[4].className = "card noselected";
    cards[0].className = "card noselected";

    dots6mobile[5].className = "nonselecteddot";
    dots6mobile[1].className = "nonselecteddot";
    dots6mobile[2].className = "nonselecteddot";
    dots6mobile[3].className = "nonselecteddot";
    dots6mobile[4].className = "nonselecteddot";
    dots6mobile[0].className = "nonselecteddot";

    cards[ncm].className = "card selected";
    dots6mobile[ncm].className = "selecteddot";

    if (ncm == 0) {
        leftarrowmobile.style.visibility = "hidden";
    } else if (ncm == 4) {
        rightarrowmobile.style.visibility = "visible";
    }
}

function toTheRightMobile() {
    ncm++;

    cards[5].className = "card noselected";
    cards[1].className = "card noselected";
    cards[2].className = "card noselected";
    cards[3].className = "card noselected";
    cards[4].className = "card noselected";
    cards[0].className = "card noselected";

    dots6mobile[5].className = "nonselecteddot";
    dots6mobile[1].className = "nonselecteddot";
    dots6mobile[2].className = "nonselecteddot";
    dots6mobile[3].className = "nonselecteddot";
    dots6mobile[4].className = "nonselecteddot";
    dots6mobile[0].className = "nonselecteddot";

    cards[ncm].className = "card selected";
    dots6mobile[ncm].className = "selecteddot";

    if (ncm == 5) {
        rightarrowmobile.style.visibility = "hidden";
    } else if (ncm == 1) {
        leftarrowmobile.style.visibility = "visible";
    }
}

dots6mobile[0].addEventListener("click", seeCard1);
dots6mobile[1].addEventListener("click", seeCard2);
dots6mobile[2].addEventListener("click", seeCard3);
dots6mobile[3].addEventListener("click", seeCard4);
dots6mobile[4].addEventListener("click", seeCard5);
dots6mobile[5].addEventListener("click", seeCard6);
leftarrowmobile.addEventListener("click", toTheLeftMobile);
rightarrowmobile.addEventListener("click", toTheRightMobile);

/* slider desktop section 6 */
let threecards = document.querySelectorAll("#section6homepage #slider-desktop .threecard");
let dots6desktop = document.querySelectorAll("#section6homepage #dots-desktop div");
let leftarrowdesktop = document.getElementById("leftdesktop");
let rightarrowdesktop = document.getElementById("rightdesktop");

function seethreeCard1() {
    threecards[0].className = "threecard selected";
    threecards[1].className = "threecard noselected";

    dots6desktop[0].className = "selecteddot";
    dots6desktop[1].className = "nonselecteddot";

    leftarrowdesktop.style.visibility = "hidden";
    rightarrowdesktop.style.visibility = "visible";
}

function seethreeCard2() {
    threecards[1].className = "threecard selected";
    threecards[0].className = "threecard noselected";

    dots6desktop[1].className = "selecteddot";
    dots6desktop[0].className = "nonselecteddot";

    rightarrowdesktop.style.visibility = "hidden";
    leftarrowdesktop.style.visibility = "visible";
}

dots6desktop[0].addEventListener("click", seethreeCard1);
dots6desktop[1].addEventListener("click", seethreeCard2);
leftarrowdesktop.addEventListener("click", seethreeCard1);
rightarrowdesktop.addEventListener("click", seethreeCard2);

/* slider section 7 */
let company = document.querySelectorAll("#section7homepage #slider .card");
let dots7 = document.querySelectorAll("#section7homepage .dots div");
let leftarrowagency = document.getElementById("leftagency");
let rightarrowagency = document.getElementById("rightagency");
var na = 0;

function seeCompany1() {
    company[0].className = "card selected";
    company[1].className = "card noselected";
    company[2].className = "card noselected";
    company[3].className = "card noselected";
    company[4].className = "card noselected";

    dots7[0].className = "selecteddot";
    dots7[1].className = "nonselecteddot";
    dots7[2].className = "nonselecteddot";
    dots7[3].className = "nonselecteddot";
    dots7[4].className = "nonselecteddot";
}

function seeCompany2() {
    company[0].className = "card noselected";
    company[1].className = "card selected";
    company[2].className = "card noselected";
    company[3].className = "card noselected";
    company[4].className = "card noselected";

    dots7[0].className = "nonselecteddot";
    dots7[1].className = "selecteddot";
    dots7[2].className = "nonselecteddot";
    dots7[3].className = "nonselecteddot";
    dots7[4].className = "nonselecteddot";
}

function seeCompany3() {
    company[0].className = "card noselected";
    company[1].className = "card noselected";
    company[2].className = "card selected";
    company[3].className = "card noselected";
    company[4].className = "card noselected";

    dots7[0].className = "nonselecteddot";
    dots7[1].className = "nonselecteddot";
    dots7[2].className = "selecteddot";
    dots7[3].className = "nonselecteddot";
    dots7[4].className = "nonselecteddot";
}

function seeCompany4() {
    company[0].className = "card noselected";
    company[1].className = "card noselected";
    company[2].className = "card noselected";
    company[3].className = "card selected";
    company[4].className = "card noselected";

    dots7[0].className = "nonselecteddot";
    dots7[1].className = "nonselecteddot";
    dots7[2].className = "nonselecteddot";
    dots7[3].className = "selecteddot";
    dots7[4].className = "nonselecteddot";
}

function seeCompany5() {
    company[0].className = "card noselected";
    company[1].className = "card noselected";
    company[2].className = "card noselected";
    company[3].className = "card noselected";
    company[4].className = "card selected";

    dots7[0].className = "nonselecteddot";
    dots7[1].className = "nonselecteddot";
    dots7[2].className = "nonselecteddot";
    dots7[3].className = "nonselecteddot";
    dots7[4].className = "selecteddot";
}

function toTheLeftAgency() {   
    na--;

    company[1].className = "card noselected";
    company[2].className = "card noselected";
    company[3].className = "card noselected";
    company[4].className = "card noselected";
    company[0].className = "card noselected";

    dots7[1].className = "nonselecteddot";
    dots7[2].className = "nonselecteddot";
    dots7[3].className = "nonselecteddot";
    dots7[4].className = "nonselecteddot";
    dots7[0].className = "nonselecteddot";

    company[na].className = "card selected";
    dots7[na].className = "selecteddot";

    if (na == 0) {
        leftarrowagency.style.visibility = "hidden";
    } else if (na == 3) {
        rightarrowagency.style.visibility = "visible";
    }
}

function toTheRightAgency() {
    na++;

    company[1].className = "card noselected";
    company[2].className = "card noselected";
    company[3].className = "card noselected";
    company[4].className = "card noselected";
    company[0].className = "card noselected";

    dots7[1].className = "nonselecteddot";
    dots7[2].className = "nonselecteddot";
    dots7[3].className = "nonselecteddot";
    dots7[4].className = "nonselecteddot";
    dots7[0].className = "nonselecteddot";

    company[na].className = "card selected";
    dots7[na].className = "selecteddot";

    if (na == 4) {
        rightarrowagency.style.visibility = "hidden";
    } else if (na == 1) {
        leftarrowagency.style.visibility = "visible";
    }
}

dots7[0].addEventListener("click", seeCompany1);
dots7[1].addEventListener("click", seeCompany2);
dots7[2].addEventListener("click", seeCompany3);
dots7[3].addEventListener("click", seeCompany4);
dots7[4].addEventListener("click", seeCompany5);
leftarrowagency.addEventListener("click", toTheLeftAgency);
rightarrowagency.addEventListener("click", toTheRightAgency);