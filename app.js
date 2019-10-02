let numberOfInput = 0
let numberOfSubInput = 0
const button = document.querySelector('.button--add');

function addInput() {
    numberOfInput = +1
    const input = document.createElement('input')
    let subDiv = document.createElement('div')
    subDiv.classList.toggle('subDiv')
    




    input.setAttribute('type', 'text')
    input.setAttribute('placeholder', 'Enter title of question')
    input.setAttribute('name', numberOfInput)
    input.classList.toggle('input--proposition')
    button.after(input)
    input.after(subDiv)
    createSubInput(subDiv)
}
function createSubInput(subDiv){
    for(let i =0;i<3;i++){
        let subInput = document.createElement('input')
        subInput.classList.toggle('subInput')
        subInput.setAttribute('type', 'text')
        subInput.setAttribute('placeholder', 'Enter proposition of question')
        subInput.setAttribute('name', numberOfInput*10+1)
        subDiv.append(subInput)
    }
}