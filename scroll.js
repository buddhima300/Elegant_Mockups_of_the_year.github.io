const row=document.querySelector(".row");

const dragging = () => {
    row.scrollLeft = e.pageX;
}

row.addEventListener("mousemove", dragging);