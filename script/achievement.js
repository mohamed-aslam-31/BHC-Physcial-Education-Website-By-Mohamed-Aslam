
// For bharathidasan Achievementconst sportsOption = document.getElementById("sports");
const sportsOption = document.getElementById("sports");

const yearOption = document.getElementById("year-opt");
let sports = sportsOption.value,
  year = yearOption.value;
console.log("lg2", sports, year);
const updateCardDisplay = () => {
  const rpc = document.querySelectorAll(".bharathidasan-card");
  rpc.forEach((card) => {
    const cardSport = card.getAttribute("data-sport");
    const cardYear = card.getAttribute("data-year");

    const sportMatch = sports === "all" || cardSport === sports;
    const yearMatch = year === "all" || cardYear === year;
    console.log("Looking for", sportMatch, yearMatch);
    if (sportMatch && yearMatch) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    } 
  });

  // Perform your desired effect when both options are selected here
};

sportsOption.onchange = (e) => {
  sports = e.target.value;
  if (e.target.value != "all") {
    document
      .getElementById("cards-holder")
      .classList.remove("replace-container");
    document.querySelectorAll(".will-hide").forEach((E) => {
      E.classList.add("rem-pad");
    });
  } else {
    document
      .getElementById("cards-holder")
      .classList.add("replace-container");
    document.querySelectorAll(".will-hide").forEach((E) => {
      E.classList.remove("rem-pad");
    });
  }
  updateCardDisplay();
};

yearOption.onchange = (e) => {
  year = e.target.value;
  updateCardDisplay();
};

//--------------------------------------------------------------------------------------------------------------------------------
// For Inrernational Achievement


const sportsOption2 = document.getElementById("sports2");
const yearOption2 = document.getElementById("year-opt2");
let sports2 = sportsOption2.value,
  year2 = yearOption2.value;
console.log("lg3", sports2, year2);
const updateCardDisplay2 = () => {
  const rpc = document.querySelectorAll(".international-remove-card");
  console.log("lg3", sports2, year2);
  rpc.forEach((card) => {
    const cardSport = card.getAttribute("data-sport");
    const cardYear = card.getAttribute("data-year");

    const sportMatch = sports2 === "all" || cardSport === sports2;
    const yearMatch = year2 === "all" || cardYear === year2;
    console.log("Looking for", sportMatch, yearMatch);
    if (sportMatch && yearMatch) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });

  
};

sportsOption2.onchange = (e) => {
  sports2 = e.target.value;
  if (e.target.value != "all") {
    document
      .getElementById("cards-holder2")
      .classList.remove("replace-container");
    document.querySelectorAll(".will-hide2").forEach((E) => {
      E.classList.add("rem-pad");
    });
  } else {
    document
      .getElementById("cards-holder2")
      .classList.add("replace-container");
    document.querySelectorAll(".will-hide2").forEach((E) => {
      E.classList.remove("rem-pad");
    });
  }
  updateCardDisplay2();
};

yearOption2.onchange = (e) => {
  year2 = e.target.value;
  updateCardDisplay2();
};

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// National Achievement

const sportsOption3 = document.getElementById("sports3");
const yearOption3 = document.getElementById("year-opt3");
let sports3 = sportsOption3.value,
  year3 = yearOption3.value;
console.log("lg3", sports2, year2);
const updateCardDisplay3 = () => {
  const rpc = document.querySelectorAll(".national-remove-card");
  console.log("lg3", sports3, year3);
  rpc.forEach((card) => {
    const cardSport = card.getAttribute("data-sport");
    const cardYear = card.getAttribute("data-year");

    const sportMatch = sports3 === "all" || cardSport === sports3;
    const yearMatch = year3 === "all" || cardYear === year3;
    console.log("Looking for", sportMatch, yearMatch);
    if (sportMatch && yearMatch) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });

  
};

sportsOption3.onchange = (e) => {
  sports3 = e.target.value;
  if (e.target.value != "all") {
    document
      .getElementById("cards-holder3")
      .classList.remove("replace-container");
    document.querySelectorAll(".will-hide3").forEach((E) => {
      E.classList.add("rem-pad");
    });
  } else {
    document
      .getElementById("cards-holder3")
      .classList.add("replace-container");
    document.querySelectorAll(".will-hide3").forEach((E) => {
      E.classList.remove("rem-pad");
    });
  }
  updateCardDisplay3();
};

yearOption3.onchange = (e) => {
  year3 = e.target.value;
  updateCardDisplay3();
};


// ----------------------------------------------------------------
// Golden Jublie 


const sportsOption4 = document.getElementById("sports4");
const yearOption4 = document.getElementById("year-opt4");
let sports4 = sportsOption4.value,
  year4 = yearOption4.value;
console.log("lg4", sports2, year2);
const updateCardDisplay4 = () => {
  const rpc = document.querySelectorAll(".gold-remove-card");
  console.log("lg4", sports4, year4);
  rpc.forEach((card) => {
    const cardSport = card.getAttribute("data-sport");
    const cardYear = card.getAttribute("data-year");

    const sportMatch = sports4 === "all" || cardSport === sports4;
    const yearMatch = year4 === "all" || cardYear === year4;
    console.log("Looking for", sportMatch, yearMatch);
    if (sportMatch && yearMatch) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });

  
};

sportsOption4.onchange = (e) => {
  sports4 = e.target.value;
  if (e.target.value != "all") {
    document
      .getElementById("cards-holder4")
      .classList.remove("replace-container");
    document.querySelectorAll(".will-hide4").forEach((E) => {
      E.classList.add("rem-pad");
    });
  } else {
    document
      .getElementById("cards-holder4")
      .classList.add("replace-container");
    document.querySelectorAll(".will-hide4").forEach((E) => {
      E.classList.remove("rem-pad");
    });
  }
  updateCardDisplay4();
};

yearOption4.onchange = (e) => {
  year4 = e.target.value;
  updateCardDisplay4();
};


//----------------------------------------------------------------
// Other Events 

const sportsOption5 = document.getElementById("sports5");
const yearOption5 = document.getElementById("year-opt5");
let sports5 = sportsOption5.value,
  year5 = yearOption5.value;
console.log("lg5", sports2, year2);
const updateCardDisplay5 = () => {
  const rpc = document.querySelectorAll(".other-remove-card");
  console.log("lg5", sports5, year5);
  rpc.forEach((card) => {
    const cardSport = card.getAttribute("data-sport");
    const cardYear = card.getAttribute("data-year");

    const sportMatch = sports5 === "all" || cardSport === sports5;
    const yearMatch = year5 === "all" || cardYear === year5;
    console.log("Looking for", sportMatch, yearMatch);
    if (sportMatch && yearMatch) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });

  
};

sportsOption5.onchange = (e) => {
  sports5 = e.target.value;
  if (e.target.value != "all") {
    document
      .getElementById("cards-holder5")
      .classList.remove("replace-container");
    document.querySelectorAll(".will-hide5").forEach((E) => {
      E.classList.add("rem-pad");
    });
  } else {
    document
      .getElementById("cards-holder5")
      .classList.add("replace-container");
    document.querySelectorAll(".will-hide5").forEach((E) => {
      E.classList.remove("rem-pad");
    });
  }
  updateCardDisplay5();
};

yearOption5.onchange = (e) => {
  year5 = e.target.value;
  updateCardDisplay5();
};