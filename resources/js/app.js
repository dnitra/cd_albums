const titles = document.querySelector(".cd-albums__list");
const listOfTitles = titles.querySelectorAll("li");

listOfTitles.forEach((title) =>
    title.addEventListener("mouseover", (e) => {
        e.target.classList.add("scale");
    })
);

listOfTitles.forEach((title) =>
    title.addEventListener("mouseleave", (e) => {
        e.target.classList.remove("scale");
    })
);

console.log(listOfTitles);
