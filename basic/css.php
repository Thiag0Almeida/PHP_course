<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo';
        echo '</small>';
    ?>
</h1>

<?= "<div center azul> Outra forma de 'escrever'!</div>" ?>

<br>
<div center><button dobro><?= "Legal" ?></button></div>

<style>
    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #424242;
    }

    [dobro]{
        font-size: <?= 10 - 8?>rem;
    }


</style>