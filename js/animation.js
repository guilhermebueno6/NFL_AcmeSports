
const odd = document.querySelectorAll(".team-container:nth-child(odd)");
const even = document.querySelectorAll(".team-container:nth-child(even)");


const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const slideLeft = (element) => {
  element.classList.add("slideLeft");
};


const hideLeft = (element) => {
  element.classList.remove("slideLeft");
};



const handleScrollAnimation = () => {

  odd.forEach((tm) => {
    if(elementInView(tm, 1.25)){
      slideLeft(tm);
    } else if (elementOutofView(tm)) {
      hideLeft(tm)
    }
  });
  
}
const handleScrollAnimation2 = () => {

    even.forEach((tm) => {
      if(elementInView(tm, 1.5)){
        slideLeft(tm);
      } else if (elementOutofView(tm)) {
        hideLeft(tm)
      }
    });
    
  }

window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});
window.addEventListener("scroll", () => { 
    handleScrollAnimation2();
  });