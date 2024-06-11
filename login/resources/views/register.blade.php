<form method="POST">
    @csrf
    <table align="center" border="">
        <h1 align="center">Register Form </h1>
        <tr>
            <td>Name:-</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Email:-</td>
            <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <td>Password:-</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Register" name="register"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><a href="{{url('/')}}">Login</a></td>
        </tr>
    </table>
</form>