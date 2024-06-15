let input1 = document.getElementById("num1");
let input2 = document.getElementById("num2");
let input3 = document.getElementById("num3");
let input4 = document.getElementById("num4");
let input5 = document.getElementById("num5");

let strong = createElement("strong");

let arrayInput = [input1, input2, input3, input4, input5];

function validaToken(){
    for (let i = 0; i < arrayInput.length; i++) {
        let token = "a6a7a"

        if(token[i] == arrayInput[i]){
            continue
        } else {
            strong.style.color = "#a91346";
            strong.innerHTML = "<strong> Token inválido </strong>"; 
            break
        }
    }
};