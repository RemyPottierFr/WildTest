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
function createSubInput(subDiv){
    // Creation of 3 inputs
    for(let i =0;i<3;i++){
        let subInput = document.createElement('input')
        // Class
        subInput.classList.toggle('subInput')
        // Attribute
        subInput.setAttribute('type', 'text')
        subInput.setAttribute('placeholder', 'Enter proposition of question')
        subInput.setAttribute('name', numberOfInput*10+1)
        // Creation of element
        subDiv.append(subInput)
    }
}