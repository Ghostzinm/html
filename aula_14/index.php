<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="container">
        <main>
            <?php
            echo "<h1>mi</h1> ";
            $nome = 'baruque';
            $laçamento = 2025;
            $valor = 16.90;
            $echOnline = false;


            echo 'o nome do jogo é ' . $nome . ' laçado em ' . $laçamento . ' no valor R$ ' . $valor;

            $listaGTR = [
                ' Nomes:   Nissan GT-R',
                ' Fabricante:  Nissan',
                ' Produção:  2007 - 2024',
                ' Carroceria:  coupé ',
            ];

            $listaLancer = [
                ' Nomes:  Lancer · Mitsubishi Celeste · Chrysler Lancer',
                '  Produção:  1973-presente',
                '  Fabricante:  Mitsubishi Motors',
                '  Carroceria:  sedan · Station wagon',
            ];

            $jdms = [
                ["supra", "gt-r", "lancer", "celica"],
                ["toyota", "nissan", "mitsubishi", "subaru"],
                ["jeep", "kia", "honda", "ford"],
                ["japao", "america", "europa", "asia"]
            ];


            ?>
            <h1 class="titulo">jdm cars</h1>



            <img src="./img/lancer.jpg" alt="lancer">
            <img src="./img/gtr.webp" alt="gtr">
            <div class="lista">
                <ul class="lancer">
                    <?php
                    for ($i = 0; $i < count($listaLancer); $i++) {
                        echo "<li>$listaLancer[$i] </li>";
                    }
                    ;

                    ?>
                </ul>

                <ul class="gtr">
                    <?php
                    for ($i = 0; $i < count($listaGTR); $i++) {
                        echo "<li>$listaGTR[$i] </li>";
                    }
                    ;


                    ?>
                </ul>
            </div>

            <table border="1" cellpadding="25">
                <?php
                for ($i = 0; $i < count($jdms); $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < count($jdms[$i]); $j++) {
                        echo "<td>{$jdms[$i][$j]}</td>";
                    }
                    echo "</tr>";
                }
            
                ?>
            </table>

            <p>O termo JDM significa "Japanese Domestic Market", que se traduz como "Mercado Doméstico Japonês".
                Refere-se a
                carros fabricados especificamente para o mercado japonês, com características e especificações
                diferentes
                das
                versões vendidas em outros países. Essa abordagem se popularizou na década de 1980, especialmente entre
                entusiastas de carros esportivos e modificações, e se tornou uma cultura automotiva global, valorizando
                o
                design, o desempenho e a personalização dos veículos.</p>


        </main>
    </section>
</body>

</html>