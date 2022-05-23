<?php
    include 'header.php';
?>
    <div class="testbox">
      <form action="/">
        <h1>Questionário</h1>
        <p class="question">Em qual área de conhecimento você deseja atuar? (Selecione de acordo com a área de conhecimento mais utilizada na sua formação)</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="visited" /> Engenharias</label>
          <label><input type="radio" value="none" name="visited" /> Ciências Humanas</label>
          <label><input type="radio" value="none" name="visited" /> CIências Exatas</label>
          <label><input type="radio" value="none" name="visited" /> Nível Médio</label>
          <label><input type="radio" value="none" name="visited" /> Saúde</label>
        </div>
        <p class="question">Em qual área de conhecimento você deseja atuar? (Selecione de acordo com a área de conhecimento mais utilizada na sua formação)</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="visited" /> Engenharias</label>
          <label><input type="radio" value="none" name="visited" /> Ciências Humanas</label>
          <label><input type="radio" value="none" name="visited" /> CIências Exatas</label>
          <label><input type="radio" value="none" name="visited" /> Nível Médio</label>
          <label><input type="radio" value="none" name="visited" /> Saúde</label>
        </div>
        <p class="question">What is the PRIMARY reason you came to the site?</p>
        <textarea rows="5"></textarea>
        <p class="question">Did you find what you needed?</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="needed" /> Yes, all of it</label>
          <label><input type="radio" value="none" name="needed" /> Yes, some of it</label>
          <label><input type="radio" value="none" name="needed" /> No, none of it</label>
        </div>
        <p class="question">If you did not find any or all of what you needed, please tell us what information you were looking for.</p>
        <textarea rows="5"></textarea>
        <p class="question">Please tell us how easy it is to find information on the site.</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="easy" /> Very Easy</label>
          <label><input type="radio" value="none" name="easy" /> Easy</label>
          <label><input type="radio" value="none" name="easy" /> Average</label>
          <label><input type="radio" value="none" name="easy" /> Difficult</label>
          <label><input type="radio" value="none" name="easy" /> Very Difficult</label>
        </div>
        <p class="question">What is your overall impression of the site?</p>
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Below Expectations</th>
            <th>Meets Expectations</th>
            <th>Exceeds Expectations</th>
          </tr>
          <tr>
            <td class="first-col">Professional</td>
            <td><input type="radio" value="none" name="professional" /></td>
            <td><input type="radio" value="none" name="professional" /></td>
            <td><input type="radio" value="none" name="professional" /></td>
          </tr>
          <tr>
            <td class="first-col">Informative</td>
            <td><input type="radio" value="none" name="Informative" /></td>
            <td><input type="radio" value="none" name="Informative" /></td>
            <td><input type="radio" value="none" name="Informative" /></td>
          </tr>
          <tr>
            <td class="first-col">Visually Pleasing</td>
            <td><input type="radio" value="none" name="Visually" /></td>
            <td><input type="radio" value="none" name="Visually" /></td>
            <td><input type="radio" value="none" name="Visually" /></td>
          </tr>
        </table>
        <p class="question">What is the likelihood that you will visit the website again?</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="likelihood" /> Extremely likely</label>
          <label><input type="radio" value="none" name="likelihood" /> Very likely</label>
          <label><input type="radio" value="none" name="likelihood" /> Moderately likely</label>
          <label><input type="radio" value="none" name="likelihood" /> aSlightly likely</label>
          <label><input type="radio" value="none" name="likelihood" /> Not at all likely</label>
        </div>
        <p class="question">Please add any comments you have for improving the website. We welcome suggestions on specific areas for improvements, features you would like to see added to the site, and examples of what you consider good websites.</p>
        <textarea rows="5"></textarea>
        <div class="btn-block">
          <button type="submit" href="/">Send</button>
        </div>
      </form>
    </div>
<?php
    include 'footer.php';
?>