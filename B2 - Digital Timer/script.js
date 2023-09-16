let intervalId;
let centiseconds = 0;
let seconds = 0;

function updateTimerDisplay() {
    const centisecondStr = centiseconds.toString().padStart(2, '0');
    const secondStr = seconds.toString().padStart(3, '0');
    document.getElementById("timer-display").textContent = `${secondStr}:${centisecondStr}`;
}

document.getElementById("start-btn").addEventListener("click", function () {
    clearInterval(intervalId);
    intervalId = setInterval(() => {
        centiseconds++;
        if (centiseconds >= 100) {
            seconds++;
            centiseconds = 0;
        }
        if (seconds >= 999) {
            clearInterval(intervalId);
        }
        updateTimerDisplay();
    }, 10);
});

document.getElementById("stop-btn").addEventListener("click", function () {
    clearInterval(intervalId);
});

document.getElementById("reset-btn").addEventListener("click", function () {
    clearInterval(intervalId);
    centiseconds = 0;
    seconds = 0;
    updateTimerDisplay();
});