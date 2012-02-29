<?php 
require("includes/config.php");
include $include . 'header.php'; 
?> 
			<p>
				<span class="italic">Fields labeled with an asterisk (*) are required.</span>
			</p>
			<form id="signup" action="insert.php" method="post">
			<table cellpadding="0" cellspacing="0" class="form">
				<tr>
					<td class="first">* First name:</td>
					<td><input type="text" id="first_name" name="first_name" class="required" /></td>
				</tr>
				<tr>
					<td class="first">* Last name:</td>
					<td><input type="text" id="last_name" name="last_name" class="required" /></td>
				</tr> 
				<tr>
					<td class="first">* E-mail:</td>
					<td><input type="text" id="email" name="email" class="required email" /></td>
				</tr>
				<tr>
					<td class="first">* Confirm e-mail:</td>
					<td><input type="text" id="email2" name="email2" class="required email" /></td>
				</tr>
				<tr>
					<td class="first">Address:</td>
					<td><input type="text" id="address" name="address" /></td>
				</tr>
				<tr>
					<td class="first">City:</td>
					<td><input type="text" id="city" name="city" /></td>
				</tr>
				<tr>
					<td class="first">State: </td>
					<td><input type="text" id="state" name="state" /></td>
				</tr>
				<tr>
					<td class="first">Zip code:</td>
					<td><input type="text" id="zip" name="zip" /></td>
				</tr>
				<tr>
					<td class="first">Phone:</td>
					<td><input type="text" id="phone" name="phone" /></td>
				</tr> 
				<tr valign="top">
					<td class="first">Attending:</td>
					<td>
						<input type="checkbox" id="pig_roast" name="pig_roast" value="yes" />Pig Roast <br />
						<input type="checkbox" id="casino_night" name="casino_night" value="yes" />Casino Night <br />
						<input type="checkbox" id="ribbon_cutting" name="ribbon_cutting" value="yes" />Ribbon Cutting 
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="submit" /></td>
				</tr>
			</table>
			</form>
<?php include $include . 'footer.php'; ?>