addEventListener("DOMContentLoaded", async(e)=>{
    let peticion  = await fetch("https://wendymarconi.000webhostapp.com/Variables_PHP_21_02_2022/api.php") 
    let texto = await peticion.json()
    document.body.insertAdjacentText("beforebegin",texto)
})

