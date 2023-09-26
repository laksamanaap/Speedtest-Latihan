document.getElementById("splitButton").addEventListener("click", function () {
    const x = parseInt(document.getElementById('xInput').value);
    const y = parseInt(document.getElementById('yInput').value);
    const gridContainer = document.getElementById('grid-container');

    if (isNaN(x) || isNaN(y)) {
        alert("Inputan Tidak Boleh kosong!");
    } else if (x <= 0 || y <= 0) {
        alert("Inputan Tidak Boleh minus!");
    }

    gridContainer.innerHTML = '';
    gridContainer.style.setProperty('--x', x);
    gridContainer.style.setProperty('--y', y);

    for (let i = 0; i < x * y; i++) {
        let cell = document.createElement('div');
        cell.className = `grid-cell grid-cell--${i}`;
        
        gridContainer.appendChild(cell);

        cell.addEventListener("click", () => {
            cell.classList.add("grid-cell-animated");
        })
    }





})