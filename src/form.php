<?php
    include 'header.php';
?>
<div class="testbox">
  <form class="pageForm" action="/">
    <h1 class="pageTitle">Questionário</h1>
    <p class="question">Em qual área de conhecimento você deseja atuar? (Selecione de acordo com a área de conhecimento mais utilizada na sua formação)</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Engenharias</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Ciências Humanas</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> CIências Exatas</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Nível Médio</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Saúde</label>
    </div>
    <p class="question">Em qual setor você deseja atuar?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Bancário</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Serviços essenciais</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Militar</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Jurídico</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Hospitalar</label>
    </div>
    <p class="question">Para qual região você deseja se informar sobre os concursos?</p>
    <div class="question-answer">
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Norte</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Nordeste</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Sul</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Sudeste</label>
      <label><input class="pageInput" type="radio" value="none" name="visited" /> Centro-oeste</label>
    </div>
    </div>
  </form>
</div>
<div class="btn-block">
  <button class="submitButton" type="submit" href="/">Enviar</button>
</div>
<?php
    include 'footer.php';
?>