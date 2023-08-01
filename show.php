<!DOCTYPE html>
<html>
    <head>
        <title>Display Items Page</title>
        <link rel="stylesheet" href="TodoList.css"/>
    </head>
    <body>
        <h1 class="todo-items-heading ml-5 mt-5">
        My <span class="todo-items-heading-subpart">Tasks</span>
        </h1>
        <ul class="todo-items-container" id="todoItemsContainer">
        <?php
            $arrval=$_SESSION['arval'];
            if($arrval){
                $arr=json_decode($arrval,true);
                foreach($arr as $ar){
                    if($ar['text']){
                        echo "<li class='d-inline todos-list ml-5 todo-item-container d-flex flex-row'>".$ar['text']."</li>";
                        echo "<a class='ml-5 delete-icon-container' href='delete.php?param1=".$ar['text']."&param2=".$ar['count']."'>Delete</a><br>";
                
                    }    
                }
                /*echo "<li class='todo-item-container d-flex flex-row'>".$arrval[0]['name']."</li>";*/
            }
        ?>
        </ul>
    </body>
</html>
