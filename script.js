const changeColorBtn = document.getElementById('changeColorBtn');
const colorValue = document.getElementById('colorValue');

function getRandomColor() {
    // Generate a random hex color
    const randomColor = Math.floor(Math.random() * 16777215).toString(16);
    return `#${randomColor.padStart(6, '0')}`;
}

changeColorBtn.addEventListener('click', () => {
    const newColor = getRandomColor();
    document.body.style.backgroundColor = newColor;
    colorValue.textContent = `Current Color: ${newColor}`;
});