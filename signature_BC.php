<?php
$fullname = $_REQUEST["fullname"];
$jobtitle = $_REQUEST["jobtitle"];
$mobilenumber = $_REQUEST["mobilenumber"];
$mobilenumber = sprintf("%s %s %s", substr($mobilenumber, 0, 5), substr($mobilenumber, 5, 3), substr($mobilenumber, 8, 3));
$urlphoto =htmlspecialchars($_REQUEST["photo"]);
$arrayphoto = explode('?id=', $urlphoto, 2);
$photo = $arrayphoto[1];
?>
<br>
<br>
<table cellpadding="0" cellspacing="0" border="0" style="padding-left: 8px; font-family: Helvetica, Arial, sans-serif;">
  <tbody>
    <tr>
    <td>
      <img src="https://drive.google.com/a/brandcalibre.com/uc?id=<?php echo $photo;?>&amp;export=download" alt="my_face" width="80" style="border-radius: 40px;">
    </td>
    <td style="border-right: solid 2px rgb(150,211,177)">&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>
      <font size="4" style="font-size: 16px;"><?php echo $fullname;?></font><br>
      <font size="2" style="font-size: 12px; padding-bottom: 3px; line-height: 16px;"><i><?php echo $jobtitle;?> | Brand Calibre</i></font><br>
      <font size="4" style="font-size: 11px; color: grey; line-height: 14px;">
      0141 212 6356 <br>
      <?php echo $mobilenumber;?> <br>
      </font>
    </td>
  </tr>
  </tbody>
</table>
<br>
?>
