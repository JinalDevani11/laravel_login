<?php foreach($data as $val){?> 
<form method="POST">
    @csrf
    <table border="" align="center">
        <tr>
            <td>Name:-</td>
            <td><input type="text" name="name" value="{{$val->name}}"></td>
        </tr>
        <tr>
            <td>Email:-</td>
            <td><input type="email" name="email" value="{{$val->email}}"></td>
        </tr>
        <tr>
            <td>Password:-</td>
            <td><input type="password" name="password" value="{{$val->password}}"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="update"></td>
        </tr>
    </table>
</form>
<?php }?>
