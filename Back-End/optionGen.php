



<label for="category">Category: </label>

<select id="category" class="" name="category">

<?php
//to get the category of the gif selected, once you click on edit
$categories = ['- -', 'Animals', 'Trump', 'Creepy', 'Anime', '-'];

foreach ($categories as $category) { ?>
    <option
        <?php
        if ($category === $row["category"]) {
            echo "selected='selected'";
        }
        ?>
        value="<?=$category?>"> <?=$category?></option>
<?php } ?>


</select>


<label for="displayable">Displayable: </label>
<select id="displayable" class="" name="displayable">

    <?php
    $displayables = ['- -', 'Yes', 'No'];

    foreach ($displayables as $displayable) { ?>
        <option
            <?php
            if ($displayable === $row["displayable"]) {
                echo "selected='selected'";
            }
            ?>
            value="<?=$displayable?>"> <?=$displayable?></option>
    <?php } ?>

</select>



