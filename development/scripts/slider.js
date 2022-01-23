/* slider section 6 */
let cards = document.querySelectorAll("#section6homepage .card");
let dots6 = document.querySelectorAll("#section6homepage #dots div");

function seeCard1() {
    cards[0].className = "card selected";
    cards[1].className = "card noselected";
    cards[2].className = "card noselected";

    dots6[0].className = "selecteddot";
    dots6[1].className = "nonselecteddot";
    dots6[2].className = "nonselecteddot";
}

function seeCard2() {
    cards[1].className = "card selected";
    cards[2].className = "card noselected";
    cards[0].className = "card noselected";

    dots6[1].className = "selecteddot";
    dots6[2].className = "nonselecteddot";
    dots6[0].className = "nonselecteddot";
}

function seeCard3() {
    cards[2].className = "card selected";
    cards[1].className = "card noselected";
    cards[0].className = "card noselected";

    dots6[2].className = "selecteddot";
    dots6[1].className = "nonselecteddot";
    dots6[0].className = "nonselecteddot";
}

dots6[0].addEventListener("click", seeCard1);
dots6[1].addEventListener("click", seeCard2);
dots6[2].addEventListener("click", seeCard3);


/* slider section 7 */
let company = document.querySelectorAll("#section7homepage .card");
let dots7 = document.querySelectorAll("#section7homepage #dots div");

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