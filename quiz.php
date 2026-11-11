
<?php
/* =========================================================
   QUIZ — CONFLITO ENTRE ISRAEL E PALESTINA

   1) O aluno responde às cinco perguntas.
   2) O formulário envia as respostas pelo método POST.
   3) O PHP corrige as respostas e soma os pontos.
   4) O resultado e o feedback aparecem na página.
========================================================= */

// Começamos com a pontuação zerada
$pontos = 0;

// Verifica se o formulário foi enviado
$enviou = isset($_POST["enviar"]);

// Só corrigimos quando o aluno enviar as respostas
if ($enviou) {

    // Pegamos as respostas enviadas
    $r1 = $_POST["p1"];
    $r2 = $_POST["p2"];
    $r3 = $_POST["p3"];
    $r4 = $_POST["p4"];
    $r5 = $_POST["p5"];

    // Pergunta 1: resposta correta é B
    if ($r1 == "b") {
        $pontos++;
        $msg1 = "✔ Acertou!";
    } else {
        $msg1 = "✘ Errou. A resposta certa era: Estabelecer negociações para buscar a paz entre israelenses e palestinos.";
    }

    // Pergunta 2: resposta correta é C
    if ($r2 == "c") {
        $pontos++;
        $msg2 = "✔ Acertou!";
    } else {
        $msg2 = "✘ Errou. A resposta certa era: UNRWA.";
    }

    // Pergunta 3: resposta correta é B
    if ($r3 == "b") {
        $pontos++;
        $msg3 = "✔ Acertou!";
    } else {
        $msg3 = "✘ Errou. A resposta certa era: Irã.";
    }

    // Pergunta 4: resposta correta é C
    if ($r4 == "c") {
        $pontos++;
        $msg4 = "✔ Acertou!";
    } else {
        $msg4 = "✘ Errou. A resposta certa era: Gás natural.";
    }

    // Pergunta 5: resposta correta é D
    if ($r5 == "d") {
        $pontos++;
        $msg5 = "✔ Acertou!";
    } else {
        $msg5 = "✘ Errou. A resposta certa era: Destruição de escolas, hospitais e deslocamento da população civil.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Quiz — Israel x Hamas</title>

<style>

body {
    margin: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #eef3f7;
    color: #16202b;
    line-height: 1.6;
}

.pagina {
    max-width: 860px;
    margin: 0 auto;
    padding: 32px 20px 60px;
}

a.voltar {
    color: #5b6b7a;
    font-weight: bold;
    text-decoration: none;
}

h1 {
    font-size: 30px;
}

.cartao {
    background: #fff;
    border: 1px solid #d6e0e8;
    border-radius: 18px;
    padding: 22px 26px;
    margin-bottom: 18px;
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}

.cartao h2 {
    font-size: 18px;
    color: #1f7a8c;
    margin: 0 0 10px;
}

.cartao label {
    display: block;
    padding: 6px 0;
    cursor: pointer;
}

.nota {
    text-align: center;
}

.nota .numero {
    font-size: 44px;
    font-weight: bold;
    color: #1f7a8c;
}

.feedback {
    font-weight: bold;
    margin: 10px 0 0;
}

button {
    font-family: inherit;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 28px;
    border-radius: 30px;
    cursor: pointer;
    background: #1f7a8c;
    color: #fff;
    border: 2px solid #1f7a8c;
}

button:hover {
    background: #155c6a;
}

</style>
</head>

<body>

<div class="pagina">

    <a class="voltar" href="tema1.html">← Voltar ao tema</a>

    <h1>📝 Quiz: Israel x Hamas</h1>

    <?php
    // Exibe a nota depois do envio
    if ($enviou) {
    ?>

    <div class="cartao nota">

        <div class="numero">
            <?php echo $pontos; ?> / 5
        </div>

        <p>
        <?php
        if ($pontos == 5) {
            echo "Perfeito! Você acertou tudo! 🎉";
        } else if ($pontos >= 3) {
            echo "Muito bem! Você foi bem no quiz. 👏";
        } else {
            echo "Vale reler o conteúdo e tentar de novo. 📚";
        }
        ?>
        </p>

    </div>

    <?php
    }
    ?>

    <!-- Formulário do quiz -->
    <form method="post" action="quiz.php">

        <!-- PERGUNTA 1 -->
        <div class="cartao">

            <h2>1. Qual foi o principal objetivo dos Acordos de Oslo, assinados em 1993?</h2>

            <label><input type="radio" name="p1" value="a" required> Criar uma aliança militar entre Israel e Egito.</label>

            <label><input type="radio" name="p1" value="b"> Estabelecer negociações para buscar a paz entre israelenses e palestinos.</label>

            <label><input type="radio" name="p1" value="c"> Garantir o controle do Hamas sobre a Cisjordânia.</label>

            <label><input type="radio" name="p1" value="d"> Dividir Jerusalém entre Israel e Irã.</label>

            <?php if ($enviou) { echo "<p class='feedback'>$msg1</p>"; } ?>

        </div>

        <!-- PERGUNTA 2 -->
        <div class="cartao">

            <h2>2. Qual organização internacional é responsável por oferecer assistência aos refugiados palestinos?</h2>

            <label><input type="radio" name="p2" value="a" required> OTAN</label>

            <label><input type="radio" name="p2" value="b"> União Europeia</label>

            <label><input type="radio" name="p2" value="c"> UNRWA</label>

            <label><input type="radio" name="p2" value="d"> OPEP</label>

            <?php if ($enviou) { echo "<p class='feedback'>$msg2</p>"; } ?>

        </div>

        <!-- PERGUNTA 3 -->
        <div class="cartao">

            <h2>3. Qual país é um dos principais apoiadores do Hamas e do Hezbollah, buscando ampliar sua influência no Oriente Médio?</h2>

            <label><input type="radio" name="p3" value="a" required> Egito</label>

            <label><input type="radio" name="p3" value="b"> Irã</label>

            <label><input type="radio" name="p3" value="c"> Jordânia</label>

            <label><input type="radio" name="p3" value="d"> Arábia Saudita</label>

            <?php if ($enviou) { echo "<p class='feedback'>$msg3</p>"; } ?>

        </div>

        <!-- PERGUNTA 4 -->
        <div class="cartao">

            <h2>4. Qual recurso natural encontrado na costa da Faixa de Gaza pode representar uma oportunidade de desenvolvimento econômico para os palestinos?</h2>

            <label><input type="radio" name="p4" value="a" required> Petróleo em grandes reservas terrestres.</label>

            <label><input type="radio" name="p4" value="b"> Ouro e diamantes.</label>

            <label><input type="radio" name="p4" value="c"> Gás natural.</label>

            <label><input type="radio" name="p4" value="d"> Carvão mineral.</label>

            <?php if ($enviou) { echo "<p class='feedback'>$msg4</p>"; } ?>

        </div>

        <!-- PERGUNTA 5 -->
        <div class="cartao">

            <h2>5. Qual é uma das principais consequências sociais da guerra na Faixa de Gaza?</h2>

            <label><input type="radio" name="p5" value="a" required> Crescimento da atividade turística.</label>

            <label><input type="radio" name="p5" value="b"> Aumento da produção agrícola.</label>

            <label><input type="radio" name="p5" value="c"> Expansão do sistema educacional.</label>

            <label><input type="radio" name="p5" value="d"> Destruição de escolas, hospitais e deslocamento da população civil.</label>

            <?php if ($enviou) { echo "<p class='feedback'>$msg5</p>"; } ?>

        </div>

        <!-- Botão para corrigir -->
        <button type="submit" name="enviar">
            Ver resultado
        </button>

    </form>

</div>

</body>
</html>
