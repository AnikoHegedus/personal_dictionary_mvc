
    
<div id="show-dictionary-container">
  <input type="text" id="search" placeholder="Search for words">
  <div id="show-dictionary" class="flex-item">
    <table>
      <thead>
        <th>Difficult</th>
      </thead>
      <tbody>
        <?php foreach($difficultWords as $difficultWord) {?>
        <tr>
          <td id="word-list-difficult" class="flex-item">
            <?php echo $difficultWord->lg1 ?>:
            <?php echo $difficultWord->lg2 ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <table>
      <thead>
        <th>Moderate</th>
      </thead>
      <tbody>
        <?php foreach($moderateWords as $moderateWord) {?>
        <tr>
          <td id="word-list-moderate" class="flex-item">
            <?php echo $moderateWord->lg1 ?>:
            <?php echo $moderateWord->lg2 ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <table>
      <thead>
        <th>Easy</th>
      </thead>
      <tbody>
        <?php foreach($easyWords as $easyWord) {?>
        <tr>
          <td id="word-list-easy" class="flex-item">
            <?php echo $easyWord->lg1 ?>:
            <?php echo $easyWord->lg2 ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>