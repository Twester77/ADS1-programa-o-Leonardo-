<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Fenda - Spotted</title>
    <link rel="stylesheet" href="estilos.css">
 <style>
    header {
      background-color: rgb(204, 66, 12);
      color: rgb(255, 255, 255);
      padding: 15px ;
    }
 </style>   
</head>
<body style="color:rgb(255, 255, 255);">
    <header>
        <h1> A Fenda - Spotted UNIFEV </h1>
    </header>
    <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
<div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<input type="checkbox" name="terms" id="terms" required>
<label for="terms">Declaro que sou maior de 18 anos e concordo com as <a href="diretrizes.html" style="color: #ffcc00;">Diretrizes de Segurança</a>.</label>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>
  <div class="container" style="background-color:rgb(49, 48, 146);"> 
  </div>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<nav>
  <ul class="menu">
    <li class="menu-item dropdown"> 
      <a href="index.php">Menu de Ações</a>
      <ul class="submenu">
        <li><a href="#">Correio Elegante</a></li>
        <li><a href="#">Mensagem Anônima</a></li>
        <li><a href="#">Feed Principal</a></li>
      </ul>
    </li>
    <li class="menu-item dropdown">
      <a href="#">Comunidade</a>
      <ul class="submenu">
        <li><a href="#">Feed Geral</a></li>
        <li><a href="#">Rolês e Festas</a></li>
      </ul>
    </li>
    <li class="menu-item dropdown">
      <a href="#">Utilidade Universitária</a>
      <ul class="submenu">
        <li><a href="perdidos.html">Perdidos (porém achados)</a></li>
        <li><a href="#">Promoções</a></li>
        <li><a href="#">Vagas em Repúblicas</a></li>
        <li><a href="#">Divulgue seu evento</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="quem somos.html">Quem Somos</a>
    </li>
    <li class="menu-item">
      <a href="diretrizes.html">Diretrizes de Segurança e Termo de Responsabilidade</a>
    </li>
  </ul>
</nav>

<main style="max-width: 600px; margin: auto;">
    <article>
<h2> Bem vindos "A Fenda" (e não, não é do bíquini). A sua Comunidade Universitária da UNIFEV! </h2>

<div style="display: flex; gap: 10px; justify-content:center;">
<img src ="imagensfoto.png/Capa Entrada.jpg" alt="Capa Home do Site" width=80%>
</div>
    <p> Aqui nós falamos de música, ciência, artes, paquera, fofocas ( muitas), cinema, séries, hobbys diversos, cultura pop e por que não, a cultura underground também?! 
    Você pode estabelecer networking, compartilhar conhecimento , fazer uma corrente de oração antes da prova de Cálculo. Aliás você pode até entrar em contato com grupos de estudos e até alguns aalunos monitores, pra poder correr daquela DP braba. 
    Mandar aquele correio elegante pro crush, dividir alguns interesses em comum ( ou divergências, só não pode é sair no tapa).</p>
    <p> Falar mal do: coleguinha / fulano / beltrano / ciclano / herculano / vida acadêmica / perrengues cotidianos / presidente / do papa / MEC / obsolecência programada / aquecimento global / cachorro / gato / porteiro ( mãe não, por que não pode), ou só desabafar um pouco e afogar as lágrimas depois de um semestre nada fácil. 
    Por que não então marcar alguns rolês ? Uma jogatina marota pelo Discord ou mesmo pra fechar a mesa do RPG no intervalo. Um futzinho, beach tênis, vôlei, talvez um churras com piscina ( Votuporanga né, só por deus) no final de semana, quem sabe combinar uma carona? 
    Marcar um date e achar o amor da sua vida ( ou um trauma e 6 meses de terapia, alô pessoal da Psico!) <p> Porque não marcar um duelo ao meio dia ? ( embora eu duvide muito que alguém vai ter tanto tempo sobrando assim mas enfim ...). Minha nossa senhora, é tanta coisa que deu até preguiça de digitar.</p>
    <p> Lembrando que NÃO NOS RESPONSABILIZAMOS por quaisquer opiniões do usuário ou tomamos qualquer partido político, somos somente mensageiros e não os emissários, então usem com cautela e principalmente responsabilidade. 
    Tratem TODOS ( sim, isso inclui todos: desde animais, pessoas, bactérias, terraplanistas e até ET's) com educação que é o mínimo que todos nós pedimos. Ser doido e um tanto quanto anárquico não é desculpa pra ser mal educado, respeito é via de mão dupla. </p>
    <p> E por último porém não menos importante: Usem camisinha, não construam casa no terreno da sogra, invistam em Bitcoin, NÃO é NÃO, bebam água e é claro, divirtam-se! </p>
  
  <div style="display: flex; gap: 10px; justify-content: center;">
  <img src="imagensfoto.png/Campus Centro.jpg" alt=" UNIFEV- Câmpus Centro" width=50%>
  <img src="imagensfoto.png/Cidade Universitaria.jpg" alt="Cidade Universitária " width="50%">
  </div>    
  <figure>
       <figcaption>Nossos QGs: Câmpus Centro e Cidade Universitária</figcaption>
  </figure>
    </article>  
</main>

<footer>
  <strong> Entre em contato com a gente : 0800 7070 6969 ou mande um email para floorspotted.fev@outlook.com </strong>
  <p>&copy;  <?php echo date('2026'); ?> - Desenvolvido por Leonardo - Todos os Direitos Reservados </p>  
</footer>

</body>


</html>  
