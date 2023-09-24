        document.getElementById('splitButton').addEventListener('click', function () {
            const x = parseInt(document.getElementById('xInput').value);
            const y = parseInt(document.getElementById('yInput').value);
            // console.log(x);
            // console.log(y);
            const gridContainer = document.getElementById('grid-container');

            if (isNaN(x) || isNaN(y) || x <= 0 || y <= 0) { // Validate
                alert('Input X dan Y harus angka positif.');
                return;
            }

            gridContainer.innerHTML = ''; 
            gridContainer.style.setProperty('--x', x);
            gridContainer.style.setProperty('--y', y);

            for (let i = 0; i < x * y; i++) {
                const cell = document.createElement('div');
                cell.className = 'grid-cell';
                gridContainer.appendChild(cell);
            }
        });