<div class="center_column">
<div class="address">
		<h1>Contact details:</h1>
		<p>These details will appear as your contact address.</p>
			<?php
				foreach($address as $addr):
				//print_r($addr);
				echo form_open(base_url().'site/contact_details', 'id="contact_dtails_form"');
				echo form_hidden('cd_ID', $addr->cd_ID);
				echo "<p>";
				echo form_label('Building name: ');
				echo form_input("building", $addr->building);
				
				echo "</p><p>";
				
				echo form_label('Road or street name: ');
				echo form_input("road", $addr->road);
				
				echo "</p><p>";
				
				echo form_label('Area: ');
				echo form_input("area", $addr->area);
				
				echo "</p><p>";

				
				echo form_label('City: ');
				echo form_input("city", $addr->city);
				
				echo "</p><p>";
				
				echo form_label('Postcode: ');
				echo form_input("postcode",$addr->postcode);
				
				echo "</p><div class='clear'></div><hr/><p>";
				
				echo form_label('Telephone: ');
				echo form_input("telephone", $addr->telephone);
				
				echo "</p><p>";				
				
				echo form_label('Fax: ');
				echo form_input("fax", $addr->email);
				
				echo "</p><p>";
				
				echo form_label('Email: ');
				echo form_input("email", $addr->email);
				
				echo "</p><p>";
				
				echo form_label('Alternate phone: ');
				echo form_input("other_phone", $addr->other_phone);
				echo "</p><p>";
				echo form_submit('submit', 'Amend Contact details!', 'class="button"');
				echo "</p><p>";

				endforeach;
			?>
			</form>
			
		</div>
		<div class="address">
		<hr />
	<br />
	<br />
<h3>Site contact form</h3>
<p>Where would you like your enquiries to be sent?</p>
	<?php
	echo form_open(base_url().'site/enq_addr');
	foreach ($address as $detail):
	//print_
	echo form_hidden('cd_ID', $detail->cd_ID);
	echo form_input('enq_addr', $detail->enq_addr)."<br />";
	endforeach;
	echo form_submit('Update address', 'Update address');
	?>
</form>

</div>
</div>