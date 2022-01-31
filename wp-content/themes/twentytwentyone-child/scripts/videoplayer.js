function on1() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("video1").style.display = "block";
  }

  function on2() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("video2").style.display = "block";
  }

  function on3() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("video3").style.display = "block";
  }
  
  function off() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("video1").style.display = "none";
    document.getElementById("video2").style.display = "none";
    document.getElementById("video3").style.display = "none";
    document.getElementById("video1").pause();
    document.getElementById("video2").pause();
    document.getElementById("video3").pause();
    document.getElementById("video1").currentTime = 0;
    document.getElementById("video2").currentTime = 0;
    document.getElementById("video3").currentTime = 0;
  }