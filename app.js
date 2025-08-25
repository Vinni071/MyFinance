document.querySelectorAll('.dropdown-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        alert(`Você clicou em: ${this.textContent}`);
    });
});

document.querySelector('.add-btn').addEventListener('click', function () {
    const newBtn = document.createElement('button');
    newBtn.className = 'dropdown-btn';
    const accountName = prompt("Digite o nome da nova conta:", "Nova Conta");
    newBtn.textContent = accountName
    newBtn.addEventListener('click', function () {
        alert(`Você clicou em: ${this.textContent}`);
    });
    document.querySelector('.dropdown').appendChild(newBtn);

    
});