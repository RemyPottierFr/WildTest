// Variables 
let numberOfInput = 0
let numberOfSubInput = 0
const button = document.querySelector('.button--add');

function addInput() {
    // Incrementation
    numberOfInput = +1
    // Creation of variables
    let input = document.createElement('input')
    let primaryDiv = document.createElement('div')
    let subDiv = document.createElement('div')
    // Add Class
    primaryDiv.classList.toggle('primaryDiv')
    subDiv.classList.toggle('subDiv')
    input.classList.toggle('input--proposition')
    // Add Attribute
    input.setAttribute('type', 'text')
    input.setAttribute('placeholder', 'Enter title of question')
    input.setAttribute('name', numberOfInput)
    // Create elements
    button.after(primaryDiv)
    primaryDiv.append(input)
    input.after(subDiv)
    createSubInput(subDiv)
}

function createSubInput(subDiv) {
    // Creation of 3 inputs
    for (let i = 0; i < 3; i++) {
        let thirdDiv = document.createElement('div')
        thirdDiv.classList.toggle('thirdDiv')
        let subInput = document.createElement('input')
        let valueInput = document.createElement('input')
        // Class
        subInput.classList.toggle('subInput')
        valueInput.classList.toggle('valueInput')
        // Attribute
        subInput.setAttribute('type', 'text')
        valueInput.setAttribute('type', 'number')
        subInput.setAttribute('placeholder', 'Enter proposition of question')
        valueInput.setAttribute('value', '10')
        // Creation of element
        thirdDiv.append(subInput)
        thirdDiv.append(valueInput)
        subDiv.append(thirdDiv)
    }
}

function sendInputs() {
    const queryPrimaryDiv = document.querySelectorAll('.primaryDiv')
    const arrayQueryPrimaryDiv = Array.from(queryPrimaryDiv)
    let result = arrayQueryPrimaryDiv.map(x => {
        let inputsValues = {}
        inputsValues.element = x
        let inputQuestion = x.querySelector('.input--proposition');
        inputsValues.inputQuestionValue = inputQuestion.value;
        inputsValues.arrayInputOptions = Array.from(x.querySelectorAll('.subInput'));
        inputsValues.inputOptions = inputsValues.arrayInputOptions.map(y => {
            let valueInput = y.value;
            return valueInput
        });
        inputsValues.arrayOptionValue = Array.from(x.querySelectorAll('.valueInput'));
        inputsValues.optionValue = inputsValues.arrayOptionValue.map(y => {
            let valueInput = y.value;
            return valueInput
        });
        return inputsValues
    });
    console.log(result)
}