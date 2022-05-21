const validaCep = (cep) => {
    var validacep = /^[0-9]{8}$/;
    return validacep.test(cep);
};