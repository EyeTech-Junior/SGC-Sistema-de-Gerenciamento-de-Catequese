<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erro</title>
</head>
<body>
    <style>
        #particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
}

body {
  background: #97cfca;
  overflow: hidden;
}

.terminal-window {
  text-align: left;
  width: 37.5rem;
  height: 22.5rem;
  border-radius: .625rem;
  margin: auto;
  position: relative;
  top: 10.5rem;
}

.terminal-window header {
  background: #E0E8F0;
  height: 1.875rem;
  border-radius: .5rem .5rem 0 0;
  padding-left: .625rem;
}

.terminal-window header .button {
  width: .75rem;
  height: .75rem;
  margin: .625rem .25rem 0 0;
  display: inline-block;
  border-radius: .5rem;
}

.terminal-window header .button.green {
  background: #3BB662;
}

.terminal-window header .button.yellow {
  background: #E5C30F;
}

.terminal-window header .button.red {
  background: #E75448;
}

.terminal-window section.terminal {
  color: white;
  font-family: Menlo, Monaco, "Consolas", "Courier New", "Courier";
  font-size: 11pt;
  background: #30353A;
  padding: .625rem;
  box-sizing: border-box;
  position: absolute;
  width: 100%;
  top: 1.875rem;
  bottom: 0;
  overflow: auto;
}

.terminal-window section.terminal .typed-cursor {
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}

.terminal-data { display: none; }
.terminal-window .gray { color: gray; }
.terminal-window .green { color: green;}

/*Media for mobile responsive viewing*/
@media only screen and (max-width: 600px) {
.terminal-window {
  text-align: left;
  width: 37.5vmin;
  height: 22.5vmin;
  border-radius: .625vmin;
  margin: auto;
  position: relative;
  top: 30.5vmin;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header {
  background: #E0E8F0;
  height: 1.875vmin;
  border-radius: .5vmin .5vmin 0 0;
  padding-left: 1vmin;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button {
  width: .75vmin;
  height: .75vmin;
  margin: .625vmin .25vmin 0 0;
  display: inline-block;
  border-radius: .5vmin;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button.green {
  background: #3BB662;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button.yellow {
  background: #E5C30F;
}
}
@media only screen and (max-width: 600px) {
.terminal-window header .button.red {
  background: #E75448;
}
}
@media only screen and (max-width: 600px) {
.terminal-window section.terminal {
  color: white;
  font-family: Menlo, Monaco, "Consolas", "Courier New", "Courier";
  font-size: .6875vmin;
  background: #30353A;
  padding: .625vmin;
  box-sizing: border-box;
  position: absolute;
  width: 100%;
  top: 1.875vmin;
  bottom: 0;
  overflow: auto;
}
}
.terminal-window section.terminal .typed-cursor {
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}

.terminal-data { display: none; }
.terminal-window .gray { color: gray; }
.terminal-window .green { color: green;}
    </style>
    <div class="terminal-window">
        <header>
          <div class="button green"></div>
          <div class="button yellow"></div>
          <div class="button red"></div>
        </header>
        <section class="terminal">
          <div class="history"></div>
            <h1>server:> Houve um erro no servidor, aguarde uns instantes e tente novamente.</h1><br>
            <h1>server:> Caso o erro persista entre em contato com o suporte.</h1>
          <span class="typed-cursor"></span>

        </section>
      </div>
      <!-- data -->


</body>
</html>
<div id="particles-js"></div>

