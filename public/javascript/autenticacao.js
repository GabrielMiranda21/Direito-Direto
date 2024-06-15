let input1 = document.getElementById("num1");
let input2 = document.getElementById("num2");
let input3 = document.getElementById("num3");
let input4 = document.getElementById("num4");
let input5 = document.getElementById("num5");

let strong = createElement("strong");

let arrayInput = [input1, input2, input3, input4, input5];

arrayInput.forEach((input, index) => {
    input.addEventListener('keyup', function() {
        
        if (input.value.length === 1 && index < arrayInput.length - 1) {
            arrayInput[index + 1].focus();
        }
    });
});
