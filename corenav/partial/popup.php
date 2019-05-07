<style>
    #element_to_pop_up input {
        width: 100%;
        margin-bottom: 10px;
        padding: 5px;
    }

    #element_to_pop_up input[type='submit'] {
        background-color: #1f7e9a;
        color: #fff;
    }
</style>
<div id="element_to_pop_up">
    <h3>LOGIN</h3>
    <form method="post" action="func/login.php">
        <input type="text" name="id" placeholder="ID"/>
        <input type="password" name="pw" placeholder="Password"/>
        <input type="submit" value="Login"/>
    </form>
</div>

<div id="upload_to_pop_up">
    <h3>Upload</h3>
    <form action="" method="post">
        <img id="imgPrev" style="display:block;"/>
        <input type="text" name="title" placeholder="title"/><br/>
        <input type="text" name="description" placeholder="description"/><br/>
        <input type="file" id="imgInp"/><br/>
        <input type="submit"/>
    </form>

</div>