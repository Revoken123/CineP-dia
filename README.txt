INSTRUÇÕES RÁPIDAS - Projeto atualizado
-------------------------------------

Arquivos principais criados/alterados:
- index.html
- filmes.html
- series.html
- filme-detalhe.html
- serie-detalhe.html
- style.css
- pasta assets/ com poster-placeholder.png

Onde colocar as tuas imagens, trailers e links:
1) Posters (imagens dos filmes/séries):
   - Substitui os ficheiros em assets/ ou adiciona os teus com nomes próprios.
   - Nas páginas (index.html, filmes.html, series.html) cada card aponta para "assets/poster-placeholder.png".
   - Nos ficheiros de detalhe (filme-detalhe.html e serie-detalhe.html) substitui o src da tag <img> dentro da div .poster.

   Exemplo:
   <img src="assets/nome-do-poster.jpg" alt="Poster do Filme" style="width:100%;">

2) Links para plataformas (Netflix, HBO, etc.):
   - Na secção "Onde ver" da página de detalhe, substitui o conteúdo pela tua lista de links:
     <a href="https://www.netflix.com/..." target="_blank" rel="noopener">Netflix</a>

3) Trailer (YouTube, Vimeo):
   - Insere o iframe do embed do YouTube na secção de Trailer.
     Exemplo:
     <iframe width="560" height="315" src="https://www.youtube.com/embed/SEU_ID" title="YouTube video player" frameborder="0" allowfullscreen></iframe>

Manutenção:
- O header (barra superior) está embutido em cada página como um bloco HTML. Se preferires, podes separar num ficheiro e incluir com um sistema de templates.
- CSS principal: style.css. Ajusta cores, tamanhos e espaçamento conforme necessário.

Se quiseres que eu coloque amostras reais (nomes e links que tu fornecer), envia-os e eu adiciono os conteúdos.