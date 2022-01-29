/* slider mobile section 6 */
let cards = document.querySelectorAll("#section6homepage #slider-mobile .card");
let dots6mobile = document.querySelectorAll("#section6homepage #dots-mobile div");

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

dots6mobile[0].addEventListener("click", seeCard1);
dots6mobile[1].addEventListener("click", seeCard2);
dots6mobile[2].addEventListener("click", seeCard3);
dots6mobile[3].addEventListener("click", seeCard4);
dots6mobile[4].addEventListener("click", seeCard5);
dots6mobile[5].addEventListener("click", seeCard6);

/* slider mobile section 6 */
let threecards = document.querySelectorAll("#section6homepage #slider-desktop .threecard");
let dots6desktop = document.querySelectorAll("#section6homepage #dots-desktop div");

function seethreeCard1() {
    threecards[0].className = "threecard selected";
    threecards[1].className = "threecard noselected";

    dots6desktop[0].className = "selecteddot";
    dots6desktop[1].className = "nonselecteddot";
}

function seethreeCard2() {
    threecards[1].className = "threecard selected";
    threecards[0].className = "threecard noselected";

    dots6desktop[1].className = "selecteddot";
    dots6desktop[0].className = "nonselecteddot";
}

dots6desktop[0].addEventListener("click", seethreeCard1);
dots6desktop[1].addEventListener("click", seethreeCard2);

/* slider section 7 */
let company = document.querySelectorAll("#section7homepage #slider .card");
let dots7 = document.querySelectorAll("#section7homepage .dots div");

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

dots7[0].addEventListener("click", seeCompany1);
dots7[1].addEventListener("click", seeCompany2);
dots7[2].addEventListener("click", seeCompany3);
dots7[3].addEventListener("click", seeCompany4);
dots7[4].addEventListener("click", seeCompany5);

company[0].addEventListener("swipeleft", seeCompany2);