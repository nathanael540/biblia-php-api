<!--
 API Documentation HTML Template  - 1.0.1
 Copyright © 2016 Florian Nicolas
 Licensed under the MIT license.
 https://github.com/ticlekiwi/API-Documentation-HTML-Template
 !-->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblia Online - API - Versão ACF</title>

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js">
  </script>
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500|Source+Code+Pro:300"
    rel="stylesheet">

  <style>
  .hljs {
    display: block;
    overflow-x: auto;
    padding: 0.5em;
    background: #23241F;
  }

  .hljs {
    color: #fff;
  }

  .hljs-strong,
  .hljs-emphasis {
    color: #a8a8a2
  }

  .hljs-bullet,
  .hljs-quote,
  .hljs-link,
  .hljs-number,
  .hljs-regexp,
  .hljs-literal {
    color: #6896ba
  }

  .hljs-code,
  .hljs-selector-class {
    color: #a6e22e
  }

  .hljs-emphasis {
    font-style: italic
  }

  .hljs-keyword,
  .hljs-selector-tag,
  .hljs-section,
  .hljs-attribute,
  .hljs-name,
  .hljs-variable {
    color: #cb7832
  }

  .hljs-params {
    color: #b9b9b9
  }

  .hljs-string {
    color: #6a8759
  }

  .hljs-subst,
  .hljs-type,
  .hljs-built_in,
  .hljs-builtin-name,
  .hljs-symbol,
  .hljs-selector-id,
  .hljs-selector-attr,
  .hljs-selector-pseudo,
  .hljs-template-tag,
  .hljs-template-variable,
  .hljs-addition {
    color: #e0c46c
  }

  .hljs-comment,
  .hljs-deletion,
  .hljs-meta {
    color: #7f7f7f
  }

  .hljs {
    display: block;
    overflow-x: auto;
    padding: 0.5em;
    background: #23241f;
    -webkit-text-size-adjust: none;
  }

  .hljs,
  .hljs-tag,
  .css .hljs-rule,
  .css .hljs-value,
  .aspectj .hljs-function,
  .css .hljs-function .hljs-preprocessor,
  .hljs-pragma {
    color: #f8f8f2;
  }

  .hljs-strongemphasis,
  .hljs-strong,
  .hljs-emphasis {
    color: #a8a8a2;
  }

  .hljs-bullet,
  .hljs-blockquote,
  .hljs-horizontal_rule,
  .hljs-number,
  .hljs-regexp,
  .alias .hljs-keyword,
  .hljs-literal,
  .hljs-hexcolor {
    color: #ae81ff;
  }

  .hljs-tag .hljs-value,
  .hljs-code,
  .hljs-title,
  .css .hljs-class,
  .hljs-class .hljs-title:last-child {
    color: #a6e22e;
  }

  .hljs-link_url {
    font-size: 80%;
  }

  .hljs-strong,
  .hljs-strongemphasis {
    font-weight: bold;
  }

  .hljs-emphasis,
  .hljs-strongemphasis,
  .hljs-class .hljs-title:last-child,
  .hljs-typename {
    font-style: italic;
  }

  .hljs-keyword,
  .ruby .hljs-class .hljs-keyword:first-child,
  .ruby .hljs-function .hljs-keyword,
  .hljs-function,
  .hljs-change,
  .hljs-winutils,
  .hljs-flow,
  .nginx .hljs-title,
  .tex .hljs-special,
  .hljs-header,
  .hljs-attribute,
  .hljs-symbol,
  .hljs-symbol .hljs-string,
  .hljs-tag .hljs-title,
  .hljs-value,
  .alias .hljs-keyword:first-child,
  .css .hljs-tag,
  .css .unit,
  .css .hljs-important {
    color: #f92672;
  }

  .hljs-function .hljs-keyword,
  .hljs-class .hljs-keyword:first-child,
  .hljs-aspect .hljs-keyword:first-child,
  .hljs-constant,
  .hljs-typename,
  .hljs-name,
  .css .hljs-attribute {
    color: #66d9ef;
  }

  .hljs-variable,
  .hljs-params,
  .hljs-class .hljs-title,
  .hljs-aspect .hljs-title {
    color: #f8f8f2;
  }

  .hljs-string,
  .css .hljs-id,
  .hljs-subst,
  .hljs-type,
  .ruby .hljs-class .hljs-parent,
  .hljs-built_in,
  .django .hljs-template_tag,
  .django .hljs-variable,
  .smalltalk .hljs-class,
  .django .hljs-filter .hljs-argument,
  .smalltalk .hljs-localvars,
  .smalltalk .hljs-array,
  .hljs-attr_selector,
  .hljs-pseudo,
  .hljs-addition,
  .hljs-stream,
  .hljs-envvar,
  .apache .hljs-tag,
  .apache .hljs-cbracket,
  .tex .hljs-command,
  .hljs-prompt,
  .hljs-link_label,
  .hljs-link_url {
    color: #e6db74;
  }

  .hljs-comment,
  .hljs-javadoc,
  .hljs-annotation,
  .hljs-decorator,
  .hljs-pi,
  .hljs-doctype,
  .hljs-deletion,
  .hljs-shebang,
  .apache .hljs-sqbracket,
  .tex .hljs-formula {
    color: #75715e;
  }

  .coffeescript .javascript,
  .javascript .xml,
  .tex .hljs-formula,
  .xml .javascript,
  .xml .vbscript,
  .xml .css,
  .xml .hljs-cdata,
  .xml .php,
  .php .xml {
    opacity: 0.5;
  }


  html,
  body,
  div,
  span,
  applet,
  object,
  iframe,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  blockquote,
  pre,
  a,
  abbr,
  acronym,
  address,
  big,
  cite,
  code,
  del,
  dfn,
  em,
  ins,
  kbd,
  q,
  s,
  samp,
  small,
  strike,
  strong,
  sub,
  sup,
  tt,
  var,
  b,
  u,
  i,
  center,
  dl,
  dt,
  dd,
  ol,
  ul,
  li,
  fieldset,
  form,
  label,
  legend,
  table,
  caption,
  tbody,
  tfoot,
  thead,
  tr,
  th,
  td,
  article,
  aside,
  canvas,
  details,
  embed,
  figure,
  figcaption,
  footer,
  hgroup,
  menu,
  nav,
  output,
  ruby,
  section,
  summary,
  time,
  mark,
  audio,
  video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
  }

  article,
  aside,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  menu,
  nav,
  section {
    display: block;
  }

  img,
  embed,
  object,
  video {
    max-width: 100%;
  }

  .ie6 img.full,
  .ie6 object.full,
  .ie6 embed,
  .ie6 video {
    width: 100%;
  }

  * {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }

  html,
  body {
    position: relative;
    min-height: 100%;
    height: 100%;
    font-family: 'Roboto', sans-serif;
  }

  strong {
    font-weight: 500;
  }

  i {
    font-style: italic;
  }

  .overflow-hidden {
    position: relative;
    overflow: hidden;
  }

  .content a {
    color: #000000;
    font-weight: 500;
    text-decoration: none;
  }

  .content a:hover {
    text-decoration: underline;
  }

  .scroll-to-link {
    cursor: pointer;
  }

  p,
  .content ul,
  .content ol {
    font-size: 14px;
    color: #777A7A;
    margin-bottom: 16px;
    line-height: 1.6;
    font-weight: 300;
  }

  .content h1:first-child {
    font-size: 1.333em;
    color: #000000;
    padding-top: 2.5em;
    text-transform: uppercase;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
    border-top-width: 0;
    margin-top: 0;
    margin-bottom: 1.3em;
    clear: both;
    font-family: 'Roboto Condensed', sans-serif;
  }

  code,
  pre {
    font-family: 'Source Code Pro', monospace;
  }

  .higlighted {
    background-color: rgba(0, 0, 0, 0.05);
    padding: 3px;
    border-radius: 3px;
  }

  .left-menu {
    position: fixed;
    z-index: 3;
    top: 0;
    left: 0;
    bottom: 0;
    width: 300px;
    box-sizing: border-box;
    background-color: #f4f5f8;
    overflow-x: hidden;
    font-size: 18px;
  }

  .content-logo {
    position: relative;
    display: block;
    width: 100%;
    box-sizing: border-box;
    padding: 1.425em 11.5%;
    padding-right: 0;
  }

  .content-logo img {
    display: inline-block;
    max-width: 70%;
    vertical-align: middle;
  }

  .content-logo span {
    display: inline-block;
    margin-left: 10px;
    vertical-align: middle;
    color: #23241F;
    font-size: 1.1em;
    font-family: 'Roboto Condensed', sans-serif;
  }

  .content-menu {
    margin: 2em auto 2em;
    padding: 0 0 100px;
    font-family: 'Roboto Condensed', sans-serif;
  }

  .content-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    line-height: 28px;
  }

  .content-menu ul li {
    list-style: none;
    margin: 0;
    padding: 0;
    line-height: 42px;
  }

  .content-menu ul li:hover,
  .content-menu ul li.active {
    background-color: #e6db74;
  }

  .content-menu ul li:hover a,
  .content-menu ul li.active a {
    color: #000000;
  }

  .content-menu ul li a {
    padding: 0.5em 13.25% 0em;
    color: #777A7A;
    letter-spacing: 0.025em;
    line-height: 1.2;
  }

  .content-page {
    position: relative;
    box-sizing: border-box;
    margin-left: 300px;
    z-index: 2;
    background-color: #fff;
    min-height: 100%;
    padding-bottom: 1px;
  }

  .content-code {
    width: 50%;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: #23241F;
    border-color: #23241F;
  }

  .content {
    position: relative;
    z-index: 30;
  }

  .content h1,
  .content h2,
  .content h3,
  .content h4,
  .content h5,
  .content h6,
  .content p,
  .content table,
  .content aside,
  .content dl {
    margin-right: 50%;
    padding: 0 28px;
    box-sizing: border-box;
    display: block;
    max-width: 680px;
  }

  .content ul,
  .content ol {
    padding: 0 44px;
  }

  .content h2,
  .content h3,
  .content h4,
  .content h5,
  .content h6 {
    font-size: 15px;
    margin-top: 2.5em;
    margin-bottom: 0.8em;
    color: #000000;
    font-family: 'Roboto Condensed', sans-serif;
  }

  .content h2 {
    font-size: 1.333em;
    font-weight: 600;
  }

  .content h4 {
    color: #000000;
    margin-top: 0;
    text-transform: none;
    font-size: 14px;
    margin-bottom: 0.2em;
  }

  .content-page .content p,
  .content-page .content pre {
    max-width: 680px;
  }

  .content pre,
  .content blockquote {
    background-color: #23241F;
    border-color: #23241F;
    color: #fff;
    padding: 0 28px 2em;
    margin: 0;
    width: 50%;
    float: right;
    clear: right;
    box-sizing: border-box;
  }

  .content pre code,
  .content pre {
    font-size: 12px;
    line-height: 1.5;
  }

  .content blockquote,
  .content pre,
  .content pre code {
    padding-top: 0;
    margin-top: 0;
  }

  .content pre code {
    margin-top: -2em;
  }

  .content table {
    font-size: 0.825em;
    margin-bottom: 1.5em;
    border-collapse: collapse;
    border-spacing: 0;
  }

  .content table tr:last-child {
    border-bottom: 1px solid #ccc;
  }

  .content table th {
    font-size: 0.925em;
    padding: 5px 18px 5px 0;
    border-bottom: 1px solid #ccc;
    vertical-align: bottom;
    text-align: left;
    line-height: 1.6;
  }

  .content table td {
    padding: 5px 18px 5px 0;
    text-align: left;
    vertical-align: top;
    line-height: 1.6;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    color: #777A7A;
  }


  body.one-content-column-version .content h1,
  body.one-content-column-version .content h2,
  body.one-content-column-version .content h3,
  body.one-content-column-version .content h4,
  body.one-content-column-version .content h5,
  body.one-content-column-version .content h6,
  body.one-content-column-version .content p,
  body.one-content-column-version .content table,
  body.one-content-column-version .content ul,
  body.one-content-column-version .content ol,
  body.one-content-column-version .content aside,
  body.one-content-column-version .content dl {
    margin-right: 0;
    max-width: 100%;
  }

  body.one-content-column-version .content-page .content p,
  body.one-content-column-version .content-page .content pre {
    max-width: 100%;
  }

  body.one-content-column-version .content-page {
    background-color: #23241F;
  }

  body.one-content-column-version .content h1:first-child,
  body.one-content-column-version .content h2,
  body.one-content-column-version .content h3,
  body.one-content-column-version .content h4,
  body.one-content-column-version .content h5,
  body.one-content-column-version .content h6 {
    color: #59C3C3;
  }

  body.one-content-column-version p {
    color: #D6F0F0;
  }

  body.one-content-column-version .content table td {
    color: #D6F0F0;
  }

  body.one-content-column-version .content thead {
    color: #417179;
  }


  @media only screen and (max-width:980px) {

    .content h1,
    .content h2,
    .content h3,
    .content h4,
    .content h5,
    .content h6,
    .content p,
    .content table,
    .content ul,
    .content ol,
    .content aside,
    .content dl {
      margin-right: 0;
    }

    .content-code {
      display: none;
    }

    .content pre,
    .content blockquote {
      margin: 20px 0;
      padding: 28px;
      display: block;
      width: auto;
      float: none;
    }

    .content pre code {
      margin-top: 0;
    }
  }

  @media only screen and (max-width:680px) {
    .left-menu {
      position: relative;
      width: auto;
    }

    .left-menu .content-menu {
      display: none;
    }

    .content-page {
      margin-left: 0;
    }
  }

  .cf:before,
  .cf:after {
    content: "";
    display: block;
  }

  .cf:after {
    clear: both;
  }

  .ie6 .cf {
    zoom: 1
  }

  .content h2 code {
    font-size: 15px;
    display: block;
    margin-bottom: 7px;
    padding: 12px;
    color: black;
    background: #e6db74;
    font-weight: 100;
  }
  </style>

  <script>
  hljs.initHighlightingOnLoad();
  </script>

</head>

<body>

  <div class="left-menu">
    <div class="content-logo">
      <span>Biblia Online API <br />- Versão ACF</span>
    </div>
    <div class="content-menu">
      <ul>
        <li class="scroll-to-link active" data-target="get-started">
          <a>Sobre o Projeto</a>
        </li>
        <li class="scroll-to-link " data-target="get-books">
          <a>Obter Livros</a>
        </li>
        <li class="scroll-to-link " data-target="get-chapter">
          <a>Obter Capítulo</a>
        </li>
        <li class="scroll-to-link " data-target="get-verse">
          <a>Obter Verso</a>
        </li>

      </ul>
    </div>
  </div>
  <div class="content-page">
    <div class="content-code"></div>
    <div class="content">
      <div class="overflow-hidden content-section" id="content-get-started">
        <h1 id="get-started">Sobre o projeto</h1>
        <pre></pre>
        <p>
          A visão desse projeto é oferecer uma API Simples em PHP com MySQL para
          consumo dos livros, capitulos e versiculos da Biblia Sagrada.
        </p>
        <p>
          Esse projeto foi inspirado no projeto A Biblia Digital de Márcio Sena
          (<a
            href="https://github.com/marciovsena/abibliadigital">https://github.com/marciovsena/abibliadigital</a>).
        </p>
        <p>
          Esse projeto utiliza as versõesda biblia
          disponibilizado por Thiago Bodruk
          (<a
            href="https://github.com/thiagobodruk/biblia">https://github.com/thiagobodruk/biblia</a>).
        </p>
      </div>
      <div class="overflow-hidden content-section" id="content-get-books">
        <h2 id="get-books"><code class="higlighted">/books</code> OBTER LIVROS
        </h2>
        <pre><code>[
  {
    "id": "0",
    "name": "Gênesis",
    "abbrev": "gn",
    "testament": "1",
    "chapters": 50
  },
...
</code></pre>
        <p>
          Retorna a lista com todos os Livros da Biblia e algumas
          informações.<br>
        </p>
      </div>

      <div class="overflow-hidden content-section" id="content-get-chapter">
        <h2 id="get-chapter"><code
            class="higlighted">/verses/:version/:abbrev/:chapter</code>
          OBTER CAPÍTULOS
        </h2>
        <pre><code>{
  "book": {
    "id": "0",
    "name": "Gênesis",
    "abbrev": "gn",
    "testament": "1",
    "chapters": 50
  },
  "chapter": {
    "number": 1,
    "verses": 31
  },
  "verses": [
    "No princípio criou Deus o céu e a terra.",
    "E disse Deus: Haja luz; e houve luz.",
...
</code></pre>
        <p>
          Retorna a lista com todos os versos e detalhes de um Capítulo de um
          Livro
        </p>
        <p>Onde:</p>
        <p>
          <code class="higlighted">:version</code> Versão da Bíblia (atualmente
          somente ACF)
        </p>
        <p>
          <code class="higlighted">:abbrev</code> Apreviação do nome do Livro
        </p>
        <p>
          <code class="higlighted">:chapter</code> Número do capitulo desejado
        </p>
      </div>

      <div class="overflow-hidden content-section" id="content-get-verse">
        <h2 id="get-verse"><code
            class="higlighted">/verses/:version/:abbrev/:chapter/:number</code>
          OBTER VERSOS</h2>
        <pre><code>{
  "book": {
    "id": "0",
    "name": "Gênesis",
    "abbrev": "gn",
    "testament": "1",
    "chapters": 50
  },
  "chapter": 1,
  "number": 4,
  "text": [
    "E viu Deus que era boa a luz;"
  ]
}
</code></pre>
        <p>
          Retorna um Verso e algumas informações sobre o Livro pertencente
        </p>
        <p>Onde:</p>
        <p>
          <code class="higlighted">:version</code> Versão da Bíblia (atualmente
          somente ACF)
        </p>
        <p>
          <code class="higlighted">:abbrev</code> Apreviação do nome do Livro
        </p>
        <p>
          <code class="higlighted">:chapter</code> Número do capitulo desejado
        </p>
        <p>
          <code class="higlighted">:number</code> Número do verso desejado
        </p>
        <p style="height:100px"></p>
      </div>

    </div>
    <div class="content-code"></div>
  </div>

  <script>
  $(document).ready(function() {
    var elements = [];

    $(".scroll-to-link").click(function(e) {
      e.preventDefault();
      var id = $(this).attr('data-target');
      $('html,body').animate({
        scrollTop: $("#" + id).offset().top - 20
      });
      return false;
    });

    function calculElements() {
      var total_height = 0;
      elements = [];
      $('.content-section').each(function() {
        var the_section = {};
        the_section.id = $(this).attr('id').replace('content-', '');
        total_height += $(this).height();
        the_section.max_height = total_height;
        elements.push(the_section);
      });
    }

    function onScroll() {
      var scroll = $(window).scrollTop();
      for (var i = 0; i < elements.length; i++) {
        var the_section = elements[i];
        if (scroll <= the_section.max_height) {
          $(".content-menu ul li").removeClass('active');
          $(".content-menu ul li[data-target='" + the_section.id + "']")
            .addClass('active');
          break;
        }
      }
      if (scroll + $(window).height() == $(document)
        .height()) { // end of scroll, last element
        $(".content-menu ul li").removeClass('active');
        $(".content-menu ul li:last-child").addClass('active');
      }
    }

    calculElements();
    $(window).resize(function(e) {
      e.preventDefault();
      calculElements();
    });

    $(window).on('scroll', function(e) {
      e.preventDefault();
      onScroll();
    });
  });
  </script>

</body>

</html>