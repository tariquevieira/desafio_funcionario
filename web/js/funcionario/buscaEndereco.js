const desabilitarCampos = (idArray) => {
    idArray.forEach((id) => {
        document.getElementById(id).disabled = true;
    });
};

const limparCampos = (idArray) => {
    idArray.forEach((id) => {
        document.getElementById(id).value = '';
    });
};

const preencherCampos = (dados, idArray) => {
    const camposChave = {
        'funcionario-logradouro': 'logradouro',
        'funcionario-cidade': 'localidade',
        'funcionario-estado': 'uf',
    };
    idArray.forEach((id) => {
        const component = document.getElementById(id);
        component.value = dados[camposChave[id]];
        if (camposChave[id] === 'logradouro') {
            component.disabled = false;
        }
    });
};

const handleEndereco = () => {
    const buttonBuscaCep = document.querySelector('[data-button=buscar-cep]');
    buttonBuscaCep.addEventListener('click', async(event) => {
        event.preventDefault();
        let cep = document.getElementById('funcionario-cep').value;
        if (!cep) {
            return alert('Cep Invalido');
        }

        const idArray = [
            'funcionario-logradouro',
            'funcionario-cidade',
            'funcionario-estado',
        ];
        desabilitarCampos(idArray);
        limparCampos(idArray);
        const dados = await buscaEmViaCep(cep);
        preencherCampos(dados, idArray);
    });
};

handleEndereco();