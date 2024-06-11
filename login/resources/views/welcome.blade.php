<form method="POST">
    @csrf
    <table align="center" border="">
        <h1 align="center">Login Form </h1>
        <tr>
            <td>Email:-</td>
            <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <td>Password:-</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="login" name="login"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><a href="{{url('register')}}">Register</a></td>
        </tr>
    </table>
</form>