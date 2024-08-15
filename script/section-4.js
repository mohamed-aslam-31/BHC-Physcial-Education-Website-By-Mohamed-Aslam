let total = document.getElementById("hd-to-s3-height");

let prevScrollPos = window.pageYOffset || document.documentElement.scrollTop;
const speedfootball = 2;
let animeNum = document.getElementById("number-anime");
let animeNum2 = document.getElementById("number-anime-2");
let animeNum3 = document.getElementById("number-anime-3");
let animeNum4 = document.getElementById("number-anime-4");
let ftspval = 1.2;
let speedDivValFootball = 1.2;
let maxNum4FontSize = 70;
let initNum4FontSize = 10;
// let totalstaffanimationheight = document.getElementById("staff-animation-height");
document.onscroll = function () {
  // console.log("value w2 : ", window.scrollY);
  // console.log("ttttt :",totalstaffanimationheight.clientHeight);
  
  // console.log("aslam:",(totalstaffanimationheight.clientHeight-window.scrollY));
  // if((totalstaffanimationheight.clientHeight-window.scrollY)>-330){
  //   document.getElementById("animation-staff-item").style.marginLeft = "3000px";
  //   console.log("cryp",document.getElementById("animation-staff-item").marginLeft);
  // }
  // if((totalstaffanimationheight.clientHeight-window.scrollY)<=-330){
  //   console.log("ddsddssd");
  //   document.getElementById("animation-staff-item").style.animationDelay = "10s";
  //   document.getElementById("animation-staff-item").style.marginLeft = "0px";
  // }
  
  // if(document.getElementById("animation-staff-item").marginLeft==0)
   console.log("value W : ", window.scrollY);
   console.log("value T : ", total.clientHeight);
   console.log("value : ", window.scrollY - total.clientHeight);
   if (window.scrollY - total.clientHeight >= 0) {
      let mq2 = window.matchMedia("(max-width: 1050px)");
      let mq3 = window.matchMedia("(max-width: 570px)");
      if (mq2.matches) {
         ftspval = 0.15;
      }

      if (mq3.matches) {
         speedDivValFootball = 7;
      }

      animeNum.classList.add("footbal-num-anim-1");
      animeNum2.classList.add("footbal-num-anim-2");
      animeNum3.classList.add("footbal-num-anim-3");
      animeNum4.classList.add("footbal-num-anim-4");
      document.querySelectorAll(".left-to-right-football").forEach((item) => {
         let leftValue =
            Math.max((window.scrollY - total.clientHeight) / speedDivValFootball) +
            "px";

         item.style.transform = `translateX(${leftValue})`;
      });
      document.querySelectorAll(".right-to-left-football").forEach((item) => {
         let rightValue =
            Math.max(-(window.scrollY - total.clientHeight) / speedDivValFootball) +
            "px";

         item.style.transform = `translateX(${rightValue})`;
      });


      document.querySelectorAll("#ball-image").forEach((item) => {
         console.log(item);
         let rightValue =
            Math.max((window.scrollY - total.clientHeight) / 5) + "px";
         let upValue = -Math.max((window.scrollY - total.clientHeight) / 5) + "px";
         item.style.transform = `translate(${rightValue},${upValue})`;
      });
   } else {
      animeNum.classList.remove("footbal-num-anim-1");
      animeNum2.classList.remove("footbal-num-anim-2");
      animeNum3.classList.remove("footbal-num-anim-3");
      animeNum4.classList.remove("footbal-num-anim-4");
   }
};


  
