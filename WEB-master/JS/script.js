// --------product--------
const mota = document.querySelector(".mota")
const thanhphan = document.querySelector(".thanhphan")
const congdung = document.querySelector(".congdung")
if(mota){
    mota.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "block"
    })
}
if(thanhphan){
    thanhphan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "block"
    })
}
if(congdung){
    congdung.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "block"
    })
    const button = document.querySelector(".product-content-right-bottom-top")
    if(button){
        button.addEventListener("click", function(){
            document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
        })
    }
}
