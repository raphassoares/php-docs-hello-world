<?php
    echo "Oi Frank, esse é o trabalho!";
    echo "<br>";
    echo "Acho que mereço um 10 kkkk";
?>

<br><br>

<button onclick="mostrarImagem()">Não clique aqui</button>

<br><br>

<div id="imagemContainer" style="display: none;">
    <img src="https://www.stormontcapital.com/wp-content/uploads/2023/01/thank-god.jpg" 
         alt="Imagem de agradecimento" 
         style="max-width: 100%; height: auto;">
</div>

<script>
    function mostrarImagem() {
        document.getElementById('imagemContainer').style.display = 'block';
    }
</script>
