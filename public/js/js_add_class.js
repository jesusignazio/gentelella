 $('#submit').on('click', function (e) {

                nuevaClase('Adrenalina','Epinefrina','Fungible');

            });
            function nuevaClase(nombre_raiem, otros_nombres, tipo) {
                var newPostKey = firebase.database().ref().child('clases').push().key;
                firebase.database().ref('clases/' + newPostKey).set({
                    nombre_raiem: nombre_raiem,
                    otros_nombres: otros_nombres,
                    tipo : tipo
                });
            }