<!-- 
<h1>Авторизация</h1>
<form action = "/user/auth" method = "POST">
	<input type="text" name="login"><br>
	<input type="password" name="passwd"><br>
	<input type="checkbox" name="remember" value ="on">Запомнить меня<br>
	<input type="submit" name="auth"><br>
</form>
<h1>Регистрация </h1>
<form action = "/user/reg" method = "POST">
	<input type="text" name="login"><br>
	<input type="text" name="email"><br>
	<input type="password" name="passwd"><br>
	<input type="submit" name="reg"><br>
</form>
 --><div id ="sign">
	<div id="login-form">
        <h1>Авторизация на сайте</h1>

        <fieldset>
            <form action="/user/auth" method="POST">
                <input type="text" required value="Логин" onBlur="if(this.value=='')this.value='Логин'" onFocus="if(this.value=='Логин')this.value='' " name="login">
                <input type="password" required value="Пароль" onBlur="if(this.value=='')this.value='Пароль'" onFocus="if(this.value=='Пароль')this.value='' " name="passwd">
                <input type="submit" name="auth" value="ВОЙТИ">
                <footer class="clearfix">
                    <p><span class="info">?</span><a href="#">Забыли пароль?</a></p>
                </footer>
            </form>
        </fieldset>

    </div>
    	<div id="login-form">
        <h1>Регистрация на сайте</h1>

        <fieldset>
            <form action="/user/reg" method="POST">
                <input type="text" required value="Логин" onBlur="if(this.value=='')this.value='Логин'" onFocus="if(this.value=='Логин')this.value='' " name="login">
                <input type="text" required value="Почта" onBlur="if(this.value=='')this.value='Почта'" onFocus="if(this.value=='Почта')this.value='' " name="email">
                <input type="password" required value="Пароль" onBlur="if(this.value=='')this.value='Пароль'" onFocus="if(this.value=='Пароль')this.value='' " name="passwd">
                <input type="submit" name="reg" value="РЕГИСТРАЦИЯ">
            </form>
        </fieldset>

    </div>
</div>