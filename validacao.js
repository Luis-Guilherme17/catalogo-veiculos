// Validação básica antes de enviar o formulário de cadastro/edição
function validarFormulario() {
    const marca = document.getElementById('marca').value.trim();

    if (marca === '') {
        alert('O campo Marca não pode ficar vazio.');
        return false;
    }

    return true;
}
