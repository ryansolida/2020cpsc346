<html>

<body>
    <!--
    <?php
    if ( @$_POST['yourname'] != '' ){
        ?>
        <h1>Hey <?=$_POST['yourname']?></h1>
        <?php
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="yourname" placeholder="Your Name"><br>
        <hr>
        <label><input type="checkbox" name="checkbox_field"> Checkbox<br></label>
        <hr>
        <label><input type="radio" name="radio" value="option1"> Radio 1</label><br>
        <label><input type="radio" name="radio" value="option2"> Radio 2</label><br>
        <label><input type="radio" name="radio" value="option3"> Radio 3</label>
        <hr>
        <textarea name="textarea" cols="50" rows="4">My Content Goes Here</textarea>
        <hr>
        <select name="select">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
        <hr>
        <input type="submit" value="CLICK ME TO SUBMIT">
    </form>
    -->

    <h1>To Dos</h1>
    <ul id="toDoList">
        <li>
            <label>
                <input type="checkbox">
                Take Out The Trash
            </label>
        </li>
        <li>
            <label>
                <input type="checkbox">
                Clean The Bathroom
            </label>
        </li>
        <li>
            <label>
                <input type="checkbox">
                Feed The cats
            </label>
        </li>
    </ul>
</body>
<script>
    var checkboxes = document.querySelectorAll('#toDoList input[type=checkbox]'), i;
    for ( i = 0; i<checkboxes.length; i++ ){
        var checkbox = checkboxes[i];
        checkbox.addEventListener('click',checkboxClicked)
    }
    
    function checkboxClicked(caller){
        var item = caller.target.closest('li');
        if (caller.target.checked ){
            item.style.color = '#CCC';
            item.style.textDecoration = 'line-through';
        } else {
            item.style.color = '';
            item.style.textDecoration = '';
        }
    }
    
</script>

</html>