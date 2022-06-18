<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="w-25 p-3 border border-primary m-5">
        <h1 id="h1-text">Најави се</h1>
        <form action="../App/Controllers/LoginController.php" method="post">
            <div class="form-group">
                <label for="username">Корисничко име</label>
                <input type="text" class="form-control" id="username" name="username"
                       placeholder="Корисничко име" required minlength="8" value="<?php if(isset($_COOKIE['usernameCookie'])) echo $_COOKIE['usernameCookie'] ;?>">
            </div>
            <div class="form-group">
                <label for="password">Лозинка</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Лозинка" required
                       minlength="8" value="<?php if(isset($_COOKIE['passwordCookie'])) echo $_COOKIE['passwordCookie'] ;?>">
            </div>
            <div class="form-check">
                <?php if (isset($_COOKIE['usernameCookie'])) : ?>
                    <input type="checkbox" name="remember_user" checked/>
                <?php else : ?>
                    <input type="checkbox" name="remember_user"/>
                <?php endif; ?>
                <label class="form-check-label" for="exampleCheck1">Зачувај корисник</label>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Најави се"/>
        </form>
        <br>
        <label class="text-danger font-weight-bold" id="wrongdata">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "2") {
                    echo 'Грешно корисничко име!';
                } else if ($_GET['error'] == "1") {
                    echo 'Грешна лозинка!';
                }
            } ?>
        </label>
    </div>
</div>
