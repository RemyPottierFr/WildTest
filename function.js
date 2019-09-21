var output = document.getElementById('questions');
        var formsubmit = function(e){
            var inputs = document.getElementsByClassName('form--select');
            var o = 0;
            var taille = inputs.length;
            for(var i = 0; i < taille; i++){
                o += parseInt(inputs[i].value);
            }
            console.log(o);
            var url = window.location.pathname;
            var filename = url.substring(url.lastIndexOf('/')+1);
            filename = filename.slice(0,-4);
            document.location.href="index.php?"+filename+"="+o;
            return false;
        }
