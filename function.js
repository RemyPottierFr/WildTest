var output = document.getElementById('questions');
        var formsubmit = function(e){
            var inputs = document.getElementsByClassName('form--select');
            var o = 0;
            var taille = inputs.length;
            for(var i = 0; i < taille; i++){
                o += parseInt(inputs[i].value);
            }
            console.log(o);
            return false;
        }