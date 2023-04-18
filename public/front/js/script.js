//@ts-nocheck
const canvas = document.querySelector("canvas"),
    toolBtns = document.querySelectorAll(".tool"),
    fillColor = document.querySelector("#fill-color"),
    sizeSlider = document.querySelector("#size-slider"),
    colorBtns = document.querySelectorAll(".colors .option"),
    colorPicker = document.querySelector("#color-picker"),
    clearCanvas = document.querySelector(".clear-canvas"),
    saveImg = document.querySelector(".save-img"),
    ctx = canvas.getContext("2d");

// global variables with default value
let prevMouseX, prevMouseY, snapshot,
    isDrawing = false,
    selectedTool = "brush",
    brushWidth = 5,
    selectedColor = "#000";
let rectLeft = canvas.getBoundingClientRect().left;
let rectTop = canvas.getBoundingClientRect().top;
let mouseX = 0;
let mouseY = 0;
//Detect touch device
const is_touch_device = () => {
    try {
        //We try to create TouchEvent (it would fail for desktops and throw error)
        document.createEvent("TouchEvent");
        return true;
    } catch (e) {
        return false;
    }
};
const getXY = (e) => {
    mouseX = (!is_touch_device() ? e.pageX : e.touches?.[0].pageX) - rectLeft;
    mouseY = (!is_touch_device() ? e.pageY : e.touches?.[0].pageY) - rectTop;
};
const setCanvasBackground = () => {
    // setting whole canvas background to white, so the downloaded img background will be white
    ctx.fillStyle = "#fff";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = selectedColor; // setting fillstyle back to the selectedColor, it'll be the brush color
}

window.addEventListener("load", () => {
    // setting canvas width/height.. offsetwidth/height returns viewable width/height of an element
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;
    setCanvasBackground();
});
const stopDrawing = () => {
    ctx.beginPath();
    isDrawing = false;
};

const drawRect = (e) => {
    getXY(e);
    // if fillColor isn't checked draw a rect with border else draw rect with background
    if (!fillColor.checked) {
        // creating circle according to the mouse pointer
        return ctx.strokeRect(mouseX, mouseY, prevMouseX - mouseX, prevMouseY - mouseY);
    }
    ctx.fillRect(mouseX, mouseY, prevMouseX - mouseX, prevMouseY - mouseY);
}

const drawCircle = (e) => {
    ctx.beginPath(); // creating new path to draw circle
    getXY(e);
    // getting radius for circle according to the mouse pointer
    let radius = Math.sqrt(Math.pow((prevMouseX - mouseX), 2) + Math.pow((prevMouseY - mouseY), 2));
    ctx.arc(prevMouseX, prevMouseY, radius, 0, 2 * Math.PI); // creating circle according to the mouse pointer
    fillColor.checked ? ctx.fill() : ctx.stroke(); // if fillColor is checked fill circle else draw border circle
}

const drawTriangle = (e) => {
    getXY(e);
    ctx.beginPath(); // creating new path to draw circle
    ctx.moveTo(prevMouseX, prevMouseY); // moving triangle to the mouse pointer
    ctx.lineTo(mouseX, mouseY); // creating first line according to the mouse pointer
    ctx.lineTo(prevMouseX * 2 - mouseX, mouseY); // creating bottom line of triangle
    ctx.closePath(); // closing path of a triangle so the third line draw automatically
    fillColor.checked ? ctx.fill() : ctx.stroke(); // if fillColor is checked fill triangle else draw border
}

const startDraw = (e) => {
    isDrawing = true;
    getXY(e);
    prevMouseX = mouseX; // passing current mouseX position as prevMouseX value
    prevMouseY = mouseY; // passing current mouseY position as prevMouseY value
    ctx.beginPath(); // creating new path to draw
    ctx.lineWidth = brushWidth; // passing brushSize as line width
    ctx.strokeStyle = selectedColor; // passing selectedColor as stroke style
    ctx.fillStyle = selectedColor; // passing selectedColor as fill style
    // copying canvas data & passing as snapshot value.. this avoids dragging the image
    ctx.moveTo(mouseX, mouseY);
    snapshot = ctx.getImageData(0, 0, canvas.width, canvas.height);
}

const drawing = (e) => {
    if (!is_touch_device()) {
        e.preventDefault();
    }
    if (!isDrawing) return; // if isDrawing is false return from here
    getXY(e);
    ctx.putImageData(snapshot, 0, 0); // adding copied canvas data on to this canvas

    if (selectedTool === "brush" || selectedTool === "eraser") {
        // if selected tool is eraser then set strokeStyle to white 
        // to paint white color on to the existing canvas content else set the stroke color to selected color
        ctx.strokeStyle = selectedTool === "eraser" ? "#fff" : selectedColor;
        ctx.lineTo(mouseX, mouseY); // creating line according to the mouse pointer
        ctx.stroke(); // drawing/filling line with color
    } else if (selectedTool === "rectangle") {
        drawRect(e);
    } else if (selectedTool === "circle") {
        drawCircle(e);
    } else {
        drawTriangle(e);
    }
}

toolBtns.forEach(btn => {
    btn.addEventListener("click", () => { // adding click event to all tool option
        // removing active class from the previous option and adding on current clicked option
        document.querySelector(".options .active").classList.remove("active");
        btn.classList.add("active");
        selectedTool = btn.id;
    });
});

sizeSlider.addEventListener("change", () => brushWidth = sizeSlider.value); // passing slider value as brushSize

colorBtns.forEach(btn => {
    btn.addEventListener("click", () => { // adding click event to all color button
        // removing selected class from the previous option and adding on current clicked option
        document.querySelector(".options .selected").classList.remove("selected");
        btn.classList.add("selected");
        // passing selected btn background color as selectedColor value
        selectedColor = window.getComputedStyle(btn).getPropertyValue("background-color");
    });
});

colorPicker.addEventListener("change", () => {
    // passing picked color value from color picker to last color btn background
    colorPicker.parentElement.style.background = colorPicker.value;
    colorPicker.parentElement.click();
});

clearCanvas.addEventListener("click", () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // clearing whole canvas
    setCanvasBackground();
});

saveImg.addEventListener("click", () => {
    const link = document.createElement("a"); // creating <a> element
    link.download = `${Date.now()}.jpg`; // passing current date as link download value
    link.href = canvas.toDataURL(); // passing canvasData as link href value
    link.click(); // clicking link to download image
});

// canvas.addEventListener("mousedown", startDraw);
// canvas.addEventListener("mousemove", drawing);
// canvas.addEventListener("mouseup", () => isDrawing = false);

canvas.addEventListener("mousedown", startDraw);
canvas.addEventListener("touchstart", startDraw);

//Start drawing when mouse.touch moves
canvas.addEventListener("mousemove", drawing);
canvas.addEventListener("touchmove", drawing);

//when mouse click stops/touch stops stop drawing and begin a new path

canvas.addEventListener("mouseup", stopDrawing);
canvas.addEventListener("touchend", stopDrawing);

//When mouse leaves the canvas
canvas.addEventListener("mouseleave", stopDrawing);
