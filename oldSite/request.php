<?php include("header.php"); ?>
	  <font>If you would like to have the <b>MIT Lion Dance Club</b> perform for you.  <b>Fill out this form</b>.  Include your <b>name</b> and <b>email</b> address. In the message section, include information about the <b>time</b> and <b>location</b> of the needed performace, the audience, what type of event it is, and anything else you feel is important.<br/><br/>
	  Once received, <b>we will contact you</b> and make arrangements.<br/><br/>	  </font>

	  <font>
	  <b>Availability guidelines</b>:<br/>
	  As a group of college students, we have limited availability.  The following are just likely times that we may be able to perform.  Feel free to ask us about any time you have in mind.<br/><br/>
	  January is IAP at MIT.  This is the time of greatest availability.  This is the only time that we can perform during the daytime of the workweek.<br/><br/>
	  Other months, we generally restrict performances between Friday evenings through Sunday evenings.  February weekends generally become filled fastest.<br/><br/>
	  Finally, Summer/Winter/Spring break is not a good time because most people won't be on campus.  Find dates for these breaks at the <a href="http://web.mit.edu/registrar/www/calendar.html" target="_blank">MIT academic calender</a>.
	  </font><br/><br/>

	  <FORM METHOD="POST" ACTION="http://web.mit.edu/bin/cgiemail/afs/athena.mit.edu/activity/l/lion-dance/www/book.txt">
      <table width="100%">
        <tr><td>Name:   </td><td><INPUT NAME="name"></td></tr>
        <tr><td>Email:  </td><td><INPUT NAME="email"></td></tr>
        <tr><td>Details:</td><td><TEXTAREA NAME="required-body" ROWS=7 COLS=35></TEXTAREA></td></tr>
        <tr><td>&nbsp;  </td><td><INPUT TYPE="submit" VALUE="submit"></td></tr>
      </table>
      </FORM>
<?php include("footer.php"); ?>