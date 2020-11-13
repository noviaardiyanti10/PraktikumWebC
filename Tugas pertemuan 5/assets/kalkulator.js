var nilai1 =document.getElementById("nilai1");
var nilai2 =document.getElementById("nilai2");
var hasil = document.getElementById("hasil");

function tambah() {
    hasil.value = Number(nilai1.value) + Number(nilai2.value);
}
function kurang() {
    hasil.value = Number(nilai1.value) - Number(nilai2.value);
}
function kali(){
    hasil.value = Number(nilai1.value) * Number(nilai2.value);
}
function bagi(){
    hasil.value = Number(nilai1.value) / Number(nilai2.value);
}
function mod() {
    hasil.value = Number(nilai1.value) % Number(nilai2.value);
}
function pangkat() {
    hasil.value = Math.pow(nilai1.value, nilai2.value);
}
function reset() {
    document.getElementById("nilai1").value='';
    document.getElementById("nilai2").value='';
    document.getElementById("hasil").value='';
}
function ValidasiInput(evt) {
    var charCode = (evt.which) ? evt.which : Event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;

}