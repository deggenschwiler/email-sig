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
<div style="padding-left: 8px; font-family: Helvetica, Arial, sans-serif;">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <tr>
    <td>
      <img src="https://drive.google.com/a/brandcalibre.com/uc?id=<?php echo $photo;?>&amp;export=download" alt="my_face" width="80" style="border-radius: 40px;">
    </td>
    <td style="border-right: solid 2px rgb(150,211,177)">&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>
      <font size="4" style="font-size: 16px;"><?php echo $fullname;?></font><br>
      <font size="2" style="font-size: 11px; font-"><i><?php echo $jobtitle;?></i></font><br>
      <font size="4" style="font-size: 11px; color: grey;">
      <?php echo $mobilenumber;?><br>
      </font>
    </td>
  </tr>
  </tbody>
</table>
<br>
</div>
<div style="border-left: 24px solid rgb(150,211,177); padding-left: 15px; font-family: Helvetica, Arial, sans-serif;">
<br>
<font size="4" style="font-size: 16px;">Brand Calibre</font><br>
<font size="4" style="font-size: 12px; color: grey;">
The Whisky Bond<br>
2 Dawson Road<br>
G4 9SS<br>
<br>
0141 212 6356<br>
www.brandcalibre.com<br>
<br>
</font>
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <tr>
    <td>
      <a href="https://uk.linkedin.com/company/brand-calibre-limited" target="_blank"><img src="https://ci6.googleusercontent.com/proxy/sd-sHRnrP-aTMvM8TQ3miqgR8QAJ62U7uHuhuuo_QkVA_L51WEMVE1lG3KJTOFfEiOJb6LeJzTDAODyjdX5AYQsT_C304JudrqqB525F6-Oblq5u8FxVgMr34QYCHmqSjySaFmICJNvlleDPm3vqH-pTVYY=s0-d-e1-ft#https://drive.google.com/a/brandcalibre.com/uc?id=0BzyKkLYhtgDVRFlYZHdyZWFnUlE&amp;export=download" alt="linked in"></a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.instagram.com/brandcalibre/" target="_blank"><img src="https://ci6.googleusercontent.com/proxy/bmEyYe9jkUfJGTNbqg6kBiGyTvHktpysALDvT44Fmq9hlRg90UGVlYZ8aXlh2NRk7iiI0usL2SMgoUVLM4miKZwwydG1n-RDOAC5JewXxDnEAZR5xyF1-ekN5ByaLXZ_cHpY1ejblBLKDRQKYEKQNYxoNY8=s0-d-e1-ft#https://drive.google.com/a/brandcalibre.com/uc?id=0BzyKkLYhtgDVVXVCWmVqU0tPNDA&amp;export=download" alt="instagram"></a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.facebook.com/brandcalibreltd/" target="_blank"><img src="https://ci6.googleusercontent.com/proxy/XqpPlBmM6JR3zThGx7hqoeuONb9uGjyC3kULiandldIC_Dk2-fQxiuqbPWtXgSwnkrXm23Olp0AVs2pqFXftVRVC8rEifylNDOB2nH6iHGp_4jxgLoa9M4z2Pb91ZibRV_S4YJtT7ZglY003wQKGZkm_qyQ=s0-d-e1-ft#https://drive.google.com/a/brandcalibre.com/uc?id=0BzyKkLYhtgDVeF9aMEFwM1RNdFk&amp;export=download" alt="facebook"></a>
    </td>
    </tr>
  </tbody>
</table>
<br>
</div>
