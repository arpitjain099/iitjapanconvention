<?php
$C_FirstName=$_REQUEST['C_FirstName'];
$C_LastName=$_REQUEST['C_LastName'];
$qty1=$_REQUEST['qty1'];
$qty2=$_REQUEST['qty2'];
$qty3=$_REQUEST['qty3'];
$qty4=$_REQUEST['qty4'];
$qty5=$_REQUEST['qty5'];
$qty6=$_REQUEST['qty6'];
//$qty7=$_REQUEST['qty7'];


$subTotal1=$_REQUEST['subTotal1'];
$subTotal2=$_REQUEST['subTotal2'];
$subTotal3=$_REQUEST['subTotal3'];
$subTotal4=$_REQUEST['subTotal4'];
$subTotal5=$_REQUEST['subTotal5'];
$subTotal6=$_REQUEST['subTotal6'];
//$subTotal7=$_REQUEST['subTotal7'];
$total=$_REQUEST['total'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>IIT Japan</title>
</head>

<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="749"  border="0" align="center" cellpadding="0" cellspacing="0">
	<!-- top.php starts -->
	<?php
	include("top_jp.php");
	?>
	<!-- top.php ends -->		

      <tr>
        <td align="center"><table width="749"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="570" height="30">&nbsp;</td>
            <td width="29">&nbsp;</td>
            <td width="150">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><table width="570"  border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25"><span class="big"><span class="headertext">�w��</span></span></td>
              </tr>
			  <tr>
                <td><p class="big">&nbsp;</p>
                  </td>
              </tr>
			  <tr>
                <td><p class="big">&nbsp;</p>
                  </td>
              </tr>
              				  <tr>
					<td><p><b>2007�N��IIT���{��c�œo�^���Ă��������Ă��肪�Ƃ��������܂��B</b></p>
					  <p>&nbsp;</p></td>
				  </tr>
				  <!--<tr>
					  <td class="headerblue">���̃y�[�W��������āA�ؖ����ŉ�c�ɏo�Ȃ��Ă��������B</td>
				   </tr>
				   <tr>
					  <td>&nbsp;</td>
				   </tr>
				   <tr>
                     <td height="60" align="left" class="headertext"><span class="big">��c�̊J�Ïꏊ�Ō�������������Ă��܂���</span></td>
			        </tr>
			  	   <tr>
					  <td>&nbsp;</td>
				   </tr>
				   <tr>
					<td align='center'><table width="100%"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" style="border-collapse:collapse">
					  <tr align="center">
                        <td width="25%" height="40" align="left" class="tabletext">&nbsp;&nbsp; ��</td>
                        <td width="75%" height="40" align="left" class="tabletext">&nbsp;&nbsp; <?php echo $C_FirstName; ?></td>
					    </tr>
					  <tr align="center">
                        <td height="40" align="left" class="tabletext">&nbsp;&nbsp; ��</td>
                        <td height="40" align="left" class="tabletext">&nbsp;&nbsp; <?php echo $C_LastName; ?></td>
					    </tr>
                      <tr align="center">
                        <td height="40" colspan="2" align="left" class="tabletext">&nbsp;&nbsp; <br>
                          <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr align="center">
                              <td width="60%" align="left" class="tabletext">&nbsp;&nbsp; <strong>�o�^���</strong></td>
                              <td width="20%" class="tabletext"><strong>�l��</strong></td>
                              <td width="20%" align="right" class="tabletext"><strong>���v&nbsp;&nbsp;</strong></td>
                            </tr>
							<?php 
								//if($qty1>=1)
								//{
							?>
                            <tr align="center">
                              <td align="left" class="tabletext">&nbsp;&nbsp; ��� (Nov. 15th and 16th �Z�~�i�[)</td>
                              <td class="tabletext"><?php //echo $qty1; ?></td>
                              <td align="right" class="tabletext">&yen;<?php //echo $subTotal1; ?>&nbsp;&nbsp;</td>
                            </tr>
							<!-- Start 
							<?php 
								//}

								//if($qty2>=1)
								//{
							?>
                            <tr align="center">
                              <td align="left" class="tabletext">&nbsp;&nbsp; �w�� (Nov. 15th and 16th �Z�~�i�[)</td>
                              <td class="tabletext"><?php //echo $qty2; ?></td>
                              <td align="right" class="tabletext">&yen;<?php //echo $subTotal2; ?>&nbsp;&nbsp;</td>
                            </tr>
							<!-- End 				
							
							<!-- Start
							<?php 
								//}

								//if($qty3>=1)
								//{
							?>
                            <tr align="center">
                              <td align="left" class="tabletext">&nbsp;&nbsp; �w��(Nov. 15th �Z�~�i�[)</td>
                              <td class="tabletext"><?php //echo $qty3; ?></td>
                              <td align="right" class="tabletext">&yen;<?php //echo $subTotal3; ?>&nbsp;&nbsp;</td>
                            </tr>
							<!-- End 		
							<!-- Start
							<?php 
								//}

								//if($qty4>=1)
								//{
							?>
                            <tr align="center">
                              <td align="left" class="tabletext">&nbsp;&nbsp; �w��(Nov. 16th �Z�~�i�[)</td>
                              <td class="tabletext"><?php //echo $qty4; ?></td>
                              <td align="right" class="tabletext">&yen;<?php //echo $subTotal4; ?>&nbsp;&nbsp;</td>
                            </tr>
							<!-- End 														
							
							<?php 
								//}

								//if($qty5>=1)
								//{
							?>
                            <tr align="center">
                              <td align="left" class="tabletext">&nbsp;&nbsp; VIP�Ƃ̉�H�𗬉�</td>
                              <td class="tabletext"><?php //echo $qty5; ?></td>
                              <td align="right" class="tabletext">&yen;<?php //echo $subTotal5; ?>&nbsp;&nbsp;</td>
                            </tr>
							<?php 
								//}

								//if($qty6>=1)
								//{
							?>
                            <tr align="center">
                              <td align="left" class="tabletext">&nbsp;&nbsp; �l�b�g���[�L���O�f�B�i�[</td>
                              <td class="tabletext"><?php// echo $qty6; ?></td>
                              <td align="right" class="tabletext">&yen;<?php// echo $subTotal6; ?>&nbsp;&nbsp;</td>
                            </tr>
							<?php 
								//}
							?>							
														
                            <tr align="center">
                              <td colspan="3" class="tabletext"><hr size="1" noshade class="btext"></td>
                              </tr>
                            <tr align="center">
                              <td class="tabletext"><strong>���v</strong></td>
                              <td class="tabletext">&nbsp;</td>
                              <td align="right" class="tabletext">&yen;<?php //echo $total; ?>&nbsp;&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>
                    </table></td>
				   </tr> -->
              <tr>
                <td><p>&nbsp;</p>
                    <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
            <td valign="top" background="images/line_bg.jpg">&nbsp;</td>
            <td valign="top">
			<!-- right.php starts -->
			<?php
			include("right_jp.php");
			?>
			<!-- right.php ends -->			
			</td>
          </tr>
		  	<!-- footer.php starts -->
			<?php
			include("footer_jp.php");
			?>
			<!-- footer.php ends -->
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="0,0,38,38" href="http://www.iitb.ac.in/" target="_blank">
  <area shape="rect" coords="45,0,79,38" href="http://www.iitd.ernet.in/" target="_blank">
  <area shape="rect" coords="87,0,121,38" href="http://www.iitk.ac.in/" target="_blank">
  <area shape="rect" coords="129,0,169,38" href="http://www.iitkgp.ac.in/" target="_blank">
  <area shape="rect" coords="175,0,212,38" href="http://www.iitm.ac.in/" target="_blank">
  <area shape="rect" coords="223,0,255,38" href="http://www.iitg.ernet.in/" target="_blank">
  <area shape="rect" coords="269,0,305,38" href="http://www.iitr.ernet.in/" target="_blank">
</map>
</body>
</html>
