function adicionarRomaneio() {
    const cliente = document.getElementById('clienteInput').value;
    const data = document.getElementById('data').value;

    const url = `nota?cliente=${encodeURIComponent(cliente)}&data=${encodeURIComponent(data)}`;

    window.location.href = url;
}