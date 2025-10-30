document.querySelectorAll('.dropdown-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        alert(`Você clicou em: ${this.textContent}`);
    });
});

document.querySelector('.add-btn').addEventListener('click', function () {
    const newBtn = document.createElement('button');
    newBtn.className = 'dropdown-btn';
    const accountName = prompt("Digite o nome da nova conta:", "Nova Conta") 
    const accountValue = parseFloat(prompt("Digite o valor da conta:", "100.00"));
    const accountDate = prompt("Digite a data de vencimento da conta:", "DD/MM/AAAA");
    newBtn.textContent = `${accountName} - R$ ${accountValue.toFixed(2)} - Vencimento: ${accountDate}`;
    newBtn.addEventListener('click', function () {  
        alert(`${this.textContent}`);
    });
    document.querySelector('.dropdown').appendChild(newBtn);

});