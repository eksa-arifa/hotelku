const harga = document.getElementById("hidden")
const jumlah = document.getElementById("jumlah")
const total = document.getElementById("total")


jumlah.onkeyup = ()=>{
    total.value = jumlah.value * harga.value
}