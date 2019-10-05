<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creator Full JS</title>
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1 class="index--title">Wild Test</h1>

    <div id="input--sort">
        <h2 class="input--sort--title">Insérer des inputs pour créer le test !</h2>
        <div class="inputs">
            <button class="button--add" onclick="addInput()">Add an input :-)</button>
            <button class="button--send" onclick="sendInputs()">Create the QUIZZZ</button>
        </div>
    </div>


    <script src="app.js"></script>
    <script>
        function sendInputs() {
            const queryPrimaryDiv = document.querySelectorAll('.primaryDiv')
            const arrayQueryPrimaryDiv = Array.from(queryPrimaryDiv)
            let datas = {}
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
            return result;
        }
    </script>
    <?php $_SESSION['datas'] = `<script> result </script>` ?>
    <?php echo $_SESSION['datas']; ?>
</body>

</html>