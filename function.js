const output = document.getElementById('questions');
const formsubmit = e => {
    let inputs = document.getElementsByClassName('form--select');
    let o = 0;
    for (let i = 0; i < inputs.length; i++) {
        o += parseInt(inputs[i].value);
    }
    const url = window.location.pathname;
    const filename = url.substring(url.lastIndexOf('/') + 1);
    filename = filename.slice(0, -4);
    document.location.href = "index.php?" + filename + "=" + o;
}