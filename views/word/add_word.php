<div id="new-word-section" class="flexbox-container">
<form action="word_controller/addNewWord" method="post">
    <p class="flex-item">
        <label for="lg1">New word in English:</label>
        <input id="newLg1Word" type="text" name="lg1">
    </p>
    <p class="flex-item">
        <label for="lg2">New word in French:</label>
        <input id="newLg2Word" type="text" name="lg2" id="lastName">
    </p>
    <input id="submit-new-word" type="submit" value="Add">
</form>
<div>
<p id="added-new-word"></p><br>
</div>


<!--<?php echo $_POST['lg1'];?>-->