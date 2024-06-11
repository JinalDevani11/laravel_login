<form method="POST">
    @csrf
    <table border="" align="center">
        <tr>
            <td>Name:-</td>
            <td><input type="text" name="name"></td>
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
            <td colspan="2" align="center"><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>

<table border="" align="center">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php foreach($data as $val) {?> 
        <tr>
            <td>{{$val->id}}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->email}}</td>
            <td>{{$val->password}}</td>
            <td><a href="{{url('delete/'.$val->id)}}">Delete</a>||<a href="{{url('update/'.$val->id)}}">Update</a></td>
        </tr>
    <?php } ?>
</table>