
<body>
<div class="container" style="margin-bottom:30px">
	

    <h3>Data Binding Fundamentals</h3>
    <h4>Using a Data Binding Template</h4>
    Customer Name: <input type="text" ng-model="cusName" ng-init="cusName='Mr White'" placeholder="Type something" /><br />
	Your Name: <input type="text" ng-model="yName" ng-init="yName='Agent Name'" placeholder="Type something" /><br />
	Message: <textarea style="height:200px; width=200px;"  ng-model="message" ng-init="message='Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 

Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
'" placeholder="Type something" ></textarea>
</div>
	
	
	
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#8d8e90">
  <tr>
    <td><table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="61"><a href= "http://yourlink" target="_blank"><img src="images/PROMO-GREEN2_01_01.jpg" width="61" height="76" border="0" alt=""/></a></td>
                <td width="144"><a href= "http://yourlink" target="_blank"><img src="images/PROMO-GREEN2_01_02.jpg" width="144" height="76" border="0" alt=""/></a></td>
                <td width="393"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="46" align="right" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="67%" align="right"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#68696a; font-size:8px; text-transform:uppercase"><a href= "http://yourlink" style="color:#68696a; text-decoration:none"><strong>SEND TO A FRIEND</strong></a></font></td>
                            <td width="29%" align="right"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#68696a; font-size:8px"><a href= "http://yourlink" style="color:#68696a; text-decoration:none; text-transform:uppercase"><strong>VIEW AS A WEB PAGE</strong></a></font></td>
                            <td width="4%">&nbsp;</td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td height="30"><img src="images/PROMO-GREEN2_01_04.jpg" width="393" height="30" border="0" alt=""/></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="10%">&nbsp;</td>
                <td width="80%" align="left" valign="top"><font style="font-family: Georgia, 'Times New Roman', Times, serif; color:#010101; font-size:24px"><strong><em>Hi {{ cusName }},</em></strong></font><br /><br />
                  <font style="font-family: Verdana, Geneva, sans-serif; color:#666766; font-size:13px; line-height:21px">
<br /><br />
{{ message }}
 <br /><br />
On behalf of the Company<br />
{{ yName }}</font></td>
                <td width="10%">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="right" valign="top"><table width="108" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="images/PROMO-GREEN2_04_01.jpg" width="108" height="9" style="display:block" border="0" alt=""/></td>
                  </tr>
                  <tr>
                    <td align="center" valign="middle" bgcolor="#666766"><font style="font-family: Georgia, 'Times New Roman', Times, serif; color:#ffffff; font-size:14px"><em><a href="http://yourlink" target="_blank" style="color:#ffffff; text-decoration: underline">click here</a></em></font></td>
                  </tr>
                  <tr>
                    <td align="center" valign="middle" bgcolor="#666766"><font style="font-family: Georgia, 'Times New Roman', Times, serif; color:#ffffff; font-size:15px"><strong><a href="http://yourlink" target="_blank" style="color:#ffffff; text-decoration:none"><em>LOREM</em></a></strong></font></td>
                  </tr>
                  <tr>
                    <td height="10" align="center" valign="middle" bgcolor="#666766"> </td>
                  </tr>
                </table></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><img src="images/PROMO-GREEN2_07.jpg" width="598" height="7" style="display:block" border="0" alt=""/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="13%" align="center">&nbsp;</td>
                <td width="14%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>UNSUBSCRIBE </strong></a></font></td>
                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                <td width="9%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>ABOUT </strong></a></font></td>
                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                <td width="10%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>PRESS </strong></a></font></td>
                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                <td width="11%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>CONTACT </strong></a></font></td>
                <td width="2%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><strong>|</strong></font></td>
                <td width="17%" align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#010203; font-size:9px; text-transform:uppercase"><a href= "http://yourlink" style="color:#010203; text-decoration:none"><strong>STAY CONNECTED</strong></a></font></td>
                <td width="4%" align="right"><a href="https://www.facebook.com/" target="_blank"><img src="images/PROMO-GREEN2_09_01.jpg" alt="facebook" width="21" height="19" border="0" /></a></td>
                <td width="5%" align="center"><a href="https://twitter.com/" target="_blank"><img src="images/PROMO-GREEN2_09_02.jpg" alt="twitter" width="21" height="19" border="0" /></a></td>
                <td width="4%" align="right"><a href="http://www.linkedin.com/" target="_blank"><img src="images/PROMO-GREEN2_09_03.jpg" alt="linkedin" width="21" height="19" border="0" /></a></td>
                <td width="5%">&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center"><font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#231f20; font-size:8px"><strong>Head Office &amp; Registered Office | Company name Ltd, Adress Line, Company Street, City, State, Zip Code | Tel: 123 555 555 | <a href= "http://yourlink" style="color:#010203; text-decoration:none">customercare@company.com</a></strong></font></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>


