<div id="element_to_pop_up">
    <h3>LOGIN</h3>
    <form method="post" action="/makeweb/func/login.php">
        <input type="text" name="id" placeholder="ID"/>
        <input type="password" name="pw" placeholder="Password"/>
        <input type="submit" value="Login"/>
    </form>
</div>

<div id="upload_to_pop_up">
    <h3>Upload</h3>
    <form enctype="multipart/form-data" action="/makeweb/func/upload.php" method="post">
        <img id="imgPrev"/>
        <input type="text" name="title" placeholder="title"/><br/>
        <input type="text" name="description" placeholder="description"/><br/>
        <input type="file" id="imgInp" name="imgInp"/><br/>
        <input type="submit"/>
    </form>
</div>