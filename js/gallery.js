
function changePic(){
        var ProductImg = document.getElementById("productImg");
        var SmallImg = document.getElementsByClassName("small-img");
        var ModalImg = document.getElementById("modalPic");

        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;
            ModalImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
            ModalImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
            ModalImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
            ModalImg.src = SmallImg[3].src;
        }
}