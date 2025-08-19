document.querySelectorAll('.dropdown-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            alert(`Você clicou em: ${this.textContent}`);
        });
    });

    document.querySelector('.add-btn').addEventListener('click', function() {
        const newBtn = document.createElement('button');
        newBtn.className = 'dropdown-btn';
        newBtn.textContent = 'Nova Conta';
        newBtn.addEventListener('click', function() {
            alert(`Você clicou em: ${this.textContent}`);
        });
        document.querySelector('.dropdown').appendChild(newBtn);
    });