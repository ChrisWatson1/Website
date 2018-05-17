<?php
	include 'extra/top.php';
	include 'extra/aside.php';
 ?>
									<h2>Contact</h2>
<figure><img src="images/contact.jpg" alt=""></figure>

<table>

<tr>
<th>Northern Virginia</th>
<td>14220 Sullyfield Circle, Suite A</td>
<td>Chantilly, VA 20151</td>

<tr>
<th>Customer service:
<td> Email: HelpDesk@Intellectus.com</td>
<td> Phone: 703 439 1160 </td>
</tr>

<tr>
<th>Charleston, South Carolina</th>
<td>300 Bucksley Lane, Suite 305</td>
<td>Charleston, SC 29492</td>
</tr>

</table>

<form action="/contact/#wpcf7-f302-p10-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="302" />
<input type="hidden" name="_wpcf7_version" value="3.9" />
<input type="hidden" name="_wpcf7_locale" value="" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f302-p10-o1" />
<input type="hidden" name="_wpnonce" value="f91e3c40c3" />
</div>
<p>Your Name (required)<br />
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
<p>Your Email (required)<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
<p>Subject<br />
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </p>
<p>Your Message<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
<p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>

<?php
		include 'extra/footer.php';
	?>
