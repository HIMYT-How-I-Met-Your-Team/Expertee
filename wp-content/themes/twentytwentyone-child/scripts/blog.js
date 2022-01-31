function seeMore() {
    document.getElementById("seeMore").style.display = "none";
    let news = document.getElementsByClassName("container");

    for (i = 2; i <= news.length; i++) {
      news[i].style.display = "flex";
    }
  }