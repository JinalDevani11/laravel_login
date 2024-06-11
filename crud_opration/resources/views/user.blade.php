<?php foreach ($data as $val) {  $hobby_arr = explode(',',$val->hobby); ?>
<form method="POST">    
@csrf
    <table border="" align="center">
        <h1 align="center">upadte Form</h1>
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
            <td>Contact:-</td>
            <td><input type="text" name="contact" value="{{$val->contact}}"></td>
        </tr>
        <tr>
            <td>Gender:-</td>
            <td>
                <input type="radio" value="male" name="gender" <?php if($val->gender="male") {echo "checked";}?>>Male
                <input type="radio" value="female" name="gender" <?php if($val->gender="female") {echo "checked";}?>>Female
            </td>
        </tr>
        <tr>
        <td>City:</td>
			<td>
				<select name="city">
					<option selected disabled>Select city</option>
					<option value="surat" <?php if($val->city=="suart"){ echo "selected"; } ?>>Suart</option>
					<option value="vapi" <?php if($val->city=="vapi"){ echo "selected";}?>>Vapi</option>
					<option value="mumbai" <?php if($val->city=="mumbai"){ echo "selected";}?>>Mumbai</option>
					<option value="valsad" <?php if($val->city=="valsad"){ echo "selected";}?>>Valsad</option>
					<option value="ahmadabad" <?php if($val->city=="ahmadabad"){ echo "selected";}?>>Ahmadabad</option>
				</select>
			</td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>
                <input type="checkbox" value="coding" name="hobby[]" <?php if(in_array("coding",$hobby_arr)) { echo "checked"; } ?>>coding
                <input type="checkbox" value="learning" name="hobby[]" <?php if(in_array("learning",$hobby_arr)) { echo "checked"; } ?>>lerning
                <input type="checkbox" value="writing" name="hobby[]" <?php if(in_array("writing",$hobby_arr)) { echo "checked"; } ?>>Writing
                <input type="checkbox" value="dance" name="hobby[]" <?php if(in_array("dance",$hobby_arr)) { echo "checked"; } ?>>Dance
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="update">
            </td>
        </tr>
    </table>
</form>
<?php } ?>