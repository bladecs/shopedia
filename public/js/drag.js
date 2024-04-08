const box = document.getElementById("box");
const cardRecent = document.getElementById("card-recent");
const cardMost = document.getElementById("card-most");
let isMouseDown = false;
let startX;
let scrollLeft;

box.addEventListener("mousedown", (e) => {
    isMouseDown = true;
    startX = e.clientX - box.getBoundingClientRect().left;
    scrollLeft = box.scrollLeft;
});

box.addEventListener("mouseleave", () => {
    isMouseDown = false;
});

box.addEventListener("mouseup", () => {
    isMouseDown = false;
});

box.addEventListener("mousemove", (e) => {
    if (!isMouseDown) return;
    e.preventDefault();
    const x = e.clientX - box.getBoundingClientRect().left;
    const walk = (x - startX) * 0.5;
    box.scrollLeft = scrollLeft - walk;
});

box.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
});


cardRecent.addEventListener("mousedown", (e) => {
    isMouseDown = true;
    startX = e.clientX - cardRecent.getBoundingClientRect().left;
    scrollLeft = cardRecent.scrollLeft;
});

cardRecent.addEventListener("mouseleave", () => {
    isMouseDown = false;
});

cardRecent.addEventListener("mouseup", () => {
    isMouseDown = false;
});

cardRecent.addEventListener("mousemove", (e) => {
    if (!isMouseDown) return;
    e.preventDefault();
    const x = e.clientX - cardRecent.getBoundingClientRect().left;
    const walk = (x - startX) * 0.5;
    cardRecent.scrollLeft = scrollLeft - walk;
});

cardRecent.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
});

cardMost.addEventListener("mousedown", (e) => {
    isMouseDown = true;
    startX = e.clientX - cardMost.getBoundingClientRect().left;
    scrollLeft = cardMost.scrollLeft;
});

cardMost.addEventListener("mouseleave", () => {
    isMouseDown = false;
});

cardMost.addEventListener("mouseup", () => {
    isMouseDown = false;
});

cardMost.addEventListener("mousemove", (e) => {
    if (!isMouseDown) return;
    e.preventDefault();
    const x = e.clientX - cardMost.getBoundingClientRect().left;
    const walk = (x - startX) * 0.5;
    cardMost.scrollLeft = scrollLeft - walk;
});

cardMost.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
});

