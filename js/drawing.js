// DRAWING
const canvas = document.getElementById("canvas");
const body = document.querySelector('body');
var theColor = '';
var lineW = 2;
let prevX = null;
let prevY = null;
let draw = false;

let drawingStartTime = null;
let drawingPauseTime = null;
let durasiMenggambar = 0;
let durasiPause = 0;

let saveClicked = false;
let dataSent = false;

let mouseMoveTimeout;

body.style.backgroundColor = "#EEE2DE";
var theInput = document.getElementById("favcolor");

theInput.addEventListener("input", function () {
    startDrawingTime();
    theColor = theInput.value;
    body.style.backgroundColor = theColor;
}, false);

const ctx = canvas.getContext("2d");
ctx.lineWidth = lineW;

document.getElementById("ageInputId").oninput = function () {
    startDrawingTime();
    draw = null;
    lineW = document.getElementById("ageInputId").value;
    document.getElementById("ageOutputId").innerHTML = lineW;
    ctx.lineWidth = lineW;
};

let clrs = document.querySelectorAll(".clr");
clrs = Array.from(clrs);
clrs.forEach(clr => {
    clr.addEventListener("click", () => {
        ctx.strokeStyle = clr.dataset.clr;
    });
});

let clearBtn = document.querySelector(".clear");
clearBtn.addEventListener("click", () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
});

let saveBtn = document.querySelector(".save");
saveBtn.addEventListener("click", () => {
    ctx.beginPath();
    ctx.arc(canvas.width / 2, canvas.height / 2, canvas.width / 2, 0, 2 * Math.PI);
    ctx.stroke();

    let data = canvas.toDataURL("image/jpg");
    let a = document.createElement("a");
    a.href = data;
    a.download = "sketch.jpg";
    a.click();
});

document.querySelector(".save").addEventListener("click", () => {
    if (!dataSent) {
        saveClicked = true;
        stopDrawingTime();
        // Konversi ke bilangan bulat
        const durasiPauseInt = parseInt(durasiPause);
        const durasiMenggambarInt = parseInt(durasiMenggambar);

        // Kirim data ke file PHP menggunakan fetch
        fetch('proses_data.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `durasiPause=${durasiPauseInt}&durasiMenggambar=${durasiMenggambarInt}`,
        })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                dataSent = true;
            })
            .catch(error => {
                console.error('Error:', error);
            });

        console.log("Total waktu menggambar: " + durasiMenggambarInt + " detik");
        console.log("Total Waktu Pause: " + durasiPauseInt + " detik");
        durasiPause = 0;
    }
});

canvas.addEventListener("mousedown", (e) => {
    saveClicked = false;
    mouseDown();
    console.log("Durasi pause: " + durasiPause.toFixed(2) + " detik");
    startDrawingTime();
    draw = true;
    updatePrevCoords(e);
    clearTimeout(mouseMoveTimeout);
    dataSent = false;
});

canvas.addEventListener("mouseup", () => {
    mouseMoveTimeout = setTimeout(() => {
        mouseUp();
    }, 10000);
    draw = false;
    resetPrevCoords();
});

window.addEventListener('load', () => {

});

window.addEventListener("mousemove", (e) => {
    if (draw) {
        let { x, y } = getCanvasCoords(e);
        ctx.beginPath();
        ctx.moveTo(prevX, prevY);
        ctx.lineTo(x, y);
        ctx.stroke();
        updatePrevCoords(e);
    }
});

window.addEventListener("mouseup", () => {
    draw = false;
    resetPrevCoords();
});

canvas.addEventListener("touchstart", (e) => {
    e.preventDefault(); // Mencegah scrolling saat menggambar
    saveClicked = false;
    mouseDown();
    console.log("Durasi pause: " + durasiPause.toFixed(2) + " detik");
    startDrawingTime();
    draw = true;
    updatePrevCoords(e.touches[0]);
    clearTimeout(mouseMoveTimeout);

    dataSent = false;
});

canvas.addEventListener("touchend", () => {
    mouseMoveTimeout = setTimeout(() => {
        mouseUp();
    }, 10000);
    draw = false;
    resetPrevCoords();
});

canvas.addEventListener("touchmove", (e) => {
    e.preventDefault(); // Mencegah scrolling saat menggambar
    if (draw) {
        let { x, y } = getCanvasCoords(e.touches[0]);
        ctx.beginPath();
        ctx.moveTo(prevX, prevY);
        ctx.lineTo(x, y);
        ctx.stroke();
        updatePrevCoords(e.touches[0]);
    }
});

function mouseUp() {
    if (drawingPauseTime === null && !saveClicked) {
        drawingPauseTime = new Date().getTime();
        console.log("Waktu mulai pause: " + new Date().toLocaleTimeString());
    }
}

function mouseDown() {
    if (drawingPauseTime !== null && !saveClicked) {
        const currentPause = new Date().getTime();
        durasiPause += (currentPause - drawingPauseTime) / 1000;
        drawingPauseTime = null;
    }
}

function startDrawingTime() {
    if (drawingStartTime === null) {
        drawingStartTime = new Date().getTime();
        console.log("Waktu mulai menggambar: " + new Date().toLocaleTimeString());
    }
}

function stopDrawingTime() {
    if (drawingStartTime !== null) {
        const currentTime = new Date().getTime();
        durasiMenggambar += (currentTime - drawingStartTime) / 1000;
        drawingStartTime = null;
    } else {
        console.log("User belum memulai menggambar.");
    }
}

function getCanvasCoords(e) {
    const rect = canvas.getBoundingClientRect();
    return {
        x: e.clientX - rect.left,
        y: e.clientY - rect.top
    };
}

function updatePrevCoords(e) {
    let { x, y } = getCanvasCoords(e);
    prevX = x;
    prevY = y;
}

function resetPrevCoords() {
    prevX = null;
    prevY = null;
}

function saveCanvasState() {
    return canvas.toDataURL();
}

function restoreCanvasState(dataURL) {
    let img = new Image();
    img.src = dataURL;
    img.onload = function () {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0);
    };
}

function setCanvasSize() {
    const screenWidth = window.innerWidth;
    const savedState = saveCanvasState(); // Save the current state of the canvas

    if (screenWidth < 1078) {
        canvas.width = 0.8 * screenWidth;
        canvas.height = 0.8 * screenWidth;
    } else {
        canvas.width = 0.4 * screenWidth;
        canvas.height = 0.4 * screenWidth;
        canvas.style.borderRadius = "50%";
    }

    // Set the background color and fill the canvas
    ctx.fillStyle = "#FFFFFF"; // Background color
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.beginPath();
    ctx.arc(canvas.width / 2, canvas.height / 2, canvas.width / 2, 0, 2 * Math.PI);
    ctx.stroke();
    ctx.fill();

    restoreCanvasState(savedState); // Restore the saved state of the canvas
}




// function setCanvasSize() {
//     const screenWidth = window.innerWidth;

//     if (screenWidth < 1078) {
//         canvas.width = 0.8 * screenWidth;
//         canvas.height = 0.8 * screenWidth;
//     } else {
//         canvas.width = 0.4 * screenWidth;
//         canvas.height = 0.4 * screenWidth;
//         canvas.style.borderRadius = "50%";
//     }
//     ctx.beginPath();
//     ctx.arc(canvas.width / 2, canvas.height / 2, canvas.width / 2, 0, 2 * Math.PI);
//     ctx.stroke();
//     ctx.fillStyle = "#FFFFFF"; // Ganti dengan warna latar belakang yang diinginkan
//     ctx.fill();
// }




window.addEventListener('load', setCanvasSize);
window.addEventListener('resize', setCanvasSize);
