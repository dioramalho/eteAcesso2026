<?php if (@$msgAlert) : ?>
    <script>
        setTimeout(alertFunc, 2000);

        function alertFunc() {
            alert('ATENÇÂO: <?= @$msgAlert ?>');
        }
    </script>
<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const nome = document.getElementById('Nome');
        const telefone = document.getElementById('Telefone');
        const matricula = document.getElementById('Matricula');

        const nomeRegex = /^[A-Za-z\s]*$/;
        const telefoneRegex = /^\d{0,2}\s?\(?\d{0,2}\)?\s?\d{0,1}-?\d{0,4}-?\d{0,4}$/;
        const matriculaRegex = /^\d*$/;

        nome.addEventListener('input', function(e) {
            if (!nomeRegex.test(nome.value)) {
                nome.value = nome.value.slice(0, -1);
            }
        });

        telefone.addEventListener('input', function(e) {
            if (!telefoneRegex.test(telefone.value)) {
                telefone.value = telefone.value.slice(0, -1);
            }
        });

        matricula.addEventListener('input', function(e) {
            if (!matriculaRegex.test(matricula.value)) {
                matricula.value = matricula.value.slice(0, -1);
            }
        });
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        const telefone = document.getElementById('Telefone');

        telefone.addEventListener('input', function(e) {
            let caracteres = telefone.value.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos
            caracteres = caracteres.replace(/^(\d{2})(\d)/g, '($1) $2'); // Adiciona parênteses em torno dos dois primeiros dígitos
            caracteres = caracteres.replace(/(\d{5})(\d{4})$/, '$1-$2'); // Adiciona um hífen antes dos últimos quatro dígitos
            telefone.value = caracteres;
        });
    });
</script>

<script>
    
</script>
<!-- <script>
        $(document).ready(function(){
            var digital = "<?php print $digital; ?>"; 
           
            //console.log('>> read', digital);
            // digital = "AQAAABQAAADkAAAAAQASAAEAZAAAAAAA3AAAAKu6AR3dHISlL4uOAQTFT3wFBU4JtMoaomEzDmR9XmCrY*GPlbGi4rqcGqiD*nF7J4BfAgb4dCwOkrRx0UX9X9BJwG4VSuxVUzYN/KPqaax5tWiBB92Vl6d8bex5rKWib1bLCryDfG6EJZx0uKej7WKIkADvC0rmtC4tVdHKnElwQh0Heeq94anjxj59uzYU3GIAhITD05gYTs1VimkTYDFlbf3hhZw1hPcKAbGc6UmKKI7qQkpwE2wjPnN5FFgDp0rslXyt15WB4ra6qG1fibak8soqk5Z6gN/EUWWUA2vE";
            comparar(digital);
        });

        function comparar(digital) {
            console.log('>> comparar');
            $.ajax({
                url: 'http://localhost:9000/api/public/v1/captura/Comparar?Digital=' + digital,
                type: 'GET',
                success: function(data) {
                    console.log('>> sucesso',data);
                    if(data == 'OK'){alert('Pegouuuuu')}else{window.location.href = "http://localhost/diogo/Acesso_inteligente_ETE/site/?pagina=acesso";};

                }
            })
        }
    </script> -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
</body>

</html>