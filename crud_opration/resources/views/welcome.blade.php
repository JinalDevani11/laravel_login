
<form method="POST">    
@csrf
    <table border="" align="center">
        <h1 align="center">Register Form</h1>
        <tr>
            <td>Name:-</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Email:-</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password:-</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Contact:-</td>
            <td><input type="text" name="contact"></td>
        </tr>
        <tr>
            <td>Gender:-</td>
            <td>
                <input type="radio" value="Male" name="gender">Male
                <input type="radio" value="Female" name="gender">Female
            </td>
        </tr>
        <tr>
        <td>City:</td>
			<td>
				<select name="city">
					<option selected disabled>Select city</option>
					<option value="surat">Suart</option>
					<option value="vapi">Vapi</option>
					<option value="mumbai">Mumbai</option>
					<option value="valsad">Valsad</option>
					<option value="ahmadabad">Ahmadabad</option>
				</select>
			</td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>
                <input type="checkbox" value="coding" name="hobby[]">coding
                <input type="checkbox" value="learning" name="hobby[]">lerning
                <input type="checkbox" value="writing" name="hobby[]">Writing
                <input type="checkbox" value="dance" name="hobby[]">Dance
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit">
            </td>
        </tr>
    </table>
</form>


<table border="" align="center">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Conatact</th>
        <th>Gender</th>
        <th>City</th>
        <th>Hobby</th>
        <th>Action</th>

        <?php
         foreach($data as $val)
         { ?>
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->password}}</td>
                <td>{{$val->contact}}</td>
                <td>{{$val->gender}}</td>
                <td>{{$val->city}}</td>
                <td>{{$val->hobby}}</td>
                <td><a href="{{url('delete/'.$val->id)}}">Delete</a>||<a href="{{url('update/'.$val->id)}}">Update</a></td>
            </tr>
        <?php  }
        ?>
    </tr>
</table>
