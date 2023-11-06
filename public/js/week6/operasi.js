function tambah()
{
    var bilangan1 = parseInt(document.getElementById("bilangan1").value);
    var bilangan2 = parseInt(document.getElementById("bilangan2").value);
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bilangan1 + bilangan2;
}

function kurang()
{
    var bilangan1 = parseInt(document.getElementById("bilangan1").value);
    var bilangan2 = parseInt(document.getElementById("bilangan2").value);
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bilangan1 - bilangan2;
}

function kali()
{
    var bilangan1 = parseInt(document.getElementById("bilangan1").value);
    var bilangan2 = parseInt(document.getElementById("bilangan2").value);
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bilangan1 * bilangan2;
}

function bagi()
{
    var bilangan1 = parseInt(document.getElementById("bilangan1").value);
    var bilangan2 = parseInt(document.getElementById("bilangan2").value);
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bilangan1 / bilangan2;
}

function sisaBagi()
{
    var bilangan1 = parseInt(document.getElementById("bilangan1").value);
    var bilangan2 = parseInt(document.getElementById("bilangan2").value);
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bilangan1 % bilangan2;
}
