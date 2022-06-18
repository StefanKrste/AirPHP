<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="w-25 p-3 border border-primary m-5">
        <h1 id="h1-text">Регистрирај се</h1>
        <form action="../App/Controllers/SignUpController.php" method="post">
            <div class="form-group">
                <label for="username">Корисничко име</label>
                <input type="text" class="form-control" id="username" name="username"
                       placeholder="Корисничко име" required minlength="8" value="<?php if(isset($_COOKIE['SignUpusernameCookie'])) echo $_COOKIE['SignUpusernameCookie'] ;?>">
            </div>
            <div class="form-group">
                <label for="email">Е-маил</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Е-маил" required value="<?php if(isset($_COOKIE['SignUpemailCookie'])) echo $_COOKIE['SignUpemailCookie'] ;?>">
            </div>
            <div class="form-group">
                <label for="password">Лозинка</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Лозинка" required
                       minlength="8" value="<?php if(isset($_COOKIE['SignUppasswordCookie'])) echo $_COOKIE['SignUppasswordCookie'] ;?>">
            </div>
            <div class="form-group">
                <label for="password2">Повторете ја лозинка</label>
                <input type="password" class="form-control" id="password2" name="password2"
                       placeholder="Повторете ја лозинка" required
                       minlength="8" value="<?php if(isset($_COOKIE['SignUppassword2Cookie'])) echo $_COOKIE['SignUppassword2Cookie'] ;?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Регистрирај се</button>
        </form>
        <br>
        <label class="text-danger font-weight-bold" id="wrongdata">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "1") {
                    echo 'Ве молиме внесете валидни податоци!';
                } else if ($_GET['error'] == "2") {
                    echo 'Внесенoто корисничко име веќе постои!';
                } else if ($_GET['error'] == "3") {
                    echo 'Внесениот емаил веќе е искористен!';
                } else if ($_GET['error'] == "4") {
                    echo 'Лозинката во двете полиња не се сповпаѓа!';
                }
            } ?>
        </label>
    </div>
</div>
