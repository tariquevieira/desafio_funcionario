const buscaEmViaCep = async(cep) => {
    let response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
    let data = await response.json();
    return data;
};