<html>
    <body>
        <div id="toDoList">

        </div>
    </body>
    <script>
        
        var todos = [
            {
                text: 'Todo 1',
                completed: false,
                onUpdate: function(){
                    console.log("YOU UPDATED ME");
                }
            },
            {
                text: 'Todo 2',
                completed: true
            },
            {
                text: 'Todo 3',
                completed: false
            },
            {
                text: 'Todo 4',
                completed: false
            },
            {
                text: 'Todo 5',
                completed: true
            },
            {
                text: 'Todo 6',
                completed: false
            },
        ]

        function renderToDos(){
            var toDoList = document.getElementById('toDoList');
            console.log(todos);
            var toDoDivs = [];
            for ( var i in todos ){
                var todo = todos[i];
                var checked = '';
                var style = '';
                if ( todo.completed ){
                    checked = 'CHECKED';
                    style = 'text-decoration: line-through';
                }
                
                toDoDivs.push('<div class="to-do" style="'+style+'"><label><input type="checkbox" '+checked+' onclick="updateChecked(this,'+i+')"> '+todo.text+'</label></div>');
            }

            toDoList.innerHTML = '';
            for ( var i in toDoDivs ){
                toDoList.innerHTML += toDoDivs[i];
            }

            console.log(toDoDivs);

        }

        function updateChecked(element,index){
            if ( element.checked ){
                todos[index].completed = true;
            } else {
                todos[index].completed = false;
            }

            todos[index].onUpdate();
            renderToDos();
        }

        renderToDos();

        

    </script>
</html>