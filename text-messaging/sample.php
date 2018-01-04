<html>
<head>
	<title>SMS</title>
</head>
<Script language="javascript">
function frmCheck(frm)
{
	if (frm.Originator.value == "")
	{
		alert("please fill the Originator.");
		frm.Originator.focus();
		return false;
	}
	if (frm.Otype.value == "")
	{
		alert("please fill Originator Type.");
		frm.Otype.focus();
		return false;
	}
	if (frm.SMS_Type.value == "")
	{
		alert("please fill SMS Type.");
		frm.SMS_Type.focus();
		return false;
	}
	if (frm.SMS_encoding.value == "")
	{
		alert("please fill the SMS Encoding Value.");
		frm.SMS_encoding.focus();
		return false;
	}
	
	if (parseInt(frm.Connection.value) != frm.Connection.value)
		{
			alert("Connection must be Numeric.");
			frm.Connection.value="";
			frm.Connection.focus();
			return false;
		}
	if (parseInt(frm.Otype.value) != frm.Otype.value)
		{
			alert("Originator Type must be Numeric.");
			frm.Otype.value="";
			frm.Otype.focus();
			return false;
		}
	if (parseInt(frm.SMS_Type.value) != frm.SMS_Type.value)
		{
			alert("SMS Type must be Numeric.");
			frm.SMS_Type.value="";
			frm.SMS_Type.focus();
			return false;
		}
	if (parseInt(frm.SMS_encoding.value) != frm.SMS_encoding.value)
		{
			alert("SMS Encoding must be Numeric.");
			frm.SMS_encoding.value="";
			frm.SMS_encoding.focus();
			return false;
		}
	
	return true;
}	
</Script>
<body>
<?php
if (isset($_POST['Connection']))
{
	require_once('nusoap.php');

	$Client_ID=$_POST['Client_ID'];
	$Client_Pass=$_POST['Client_Pass'];
	$Client_Ref=$_POST['Client_Ref'];
	$Billing_Ref=$_POST['Billing_Ref'];

	$Destination=$_POST['Destination'];
	$Originator=$_POST['Originator'];
	$Body=$_POST['Body'];

	$Connection=$_POST['Connection'];
	$OType=$_POST['OType'];
	$SMS_Type = $_POST['SMS_Type'];
	$SMS_encoding = $_POST['SMS_encoding'];
	
	$number=$Connection;
	
   $parameters = array(
    	    'Client_ID'    => $Client_ID, 
            'Client_Pass'  => $Client_Pass, 
            'Client_Ref'   => $Client_Ref, 
            'Billing_Ref'  => $Billing_Ref,
            'Connection'   => $Connection, 
            'Originator'   => $Originator, 
            'OType' 	   => $OType, 
            'Destination'  => $Destination, 
            'Body'         => $Body, 
            'SMS_Type'     => $SMS_Type,
	    'SMS_encoding' => $SMS_encoding
	);
	//SMS parameters code ends
	// Read TextAnywhere WSDL
	$nusoapclient = new nusoapclient('http://ws.textanywhere.net/ta_SMS.asmx?wsdl');

	//The following line sends an SMS 
	$result = $nusoapclient->call('SendSMS',$parameters,'http://ws.textanywhere.net/TA_WS','http://ws.textanywhere.net/TA_WS/SendSMS');

	if (@$result==1) {

		echo "<b>Message Successfully Sent</b>";

	} else {

		echo "<b>Error in sending message.</b>";

	}
	
	//die("Die Here");
	echo "<p>&nbsp;</p>";
 }
?>
<center>
<p>&nbsp;</p>
<form name="frmQuery" action="sample.php" onSubmit="return frmCheck(this);" method="post">
	<table border=0 cellpadding=2 cellspacing=2 width='65%' align='center'>
	<tr>
		<td>
			Client ID:
		</td>
		<td>
			<input type="text" name="Client_ID" size="30" maxlength="50" value=<?php echo @$Client_ID;?>>
			
		</td>
	</tr>
	<tr>
		<td>
			Client Password:
		</td>
		<td>
			<input type="password" name="Client_Pass" size="30" maxlength="50" value="<? echo @$Client_Pass; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Client Reference:
		</td>
		<td>
			<input type="text" name="Client_Ref" size="30" maxlength="50" value="<? echo @$Client_Ref;?>">
		</td>
	</tr>
	<tr>
		<td>
			Billing Reference:
		</td>
		<td>
			<input type="text" name="Billing_Ref" size="30" maxlength="50" value="<? echo @$Billing_Ref; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Connection:
		</td>
		<td>
			<input type="text" name="Connection" size="30" maxlength="50" value="<? echo @$Connection; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Originator:
		</td>
		<td>
			<input type="text" name="Originator" size="30" maxlength="50" value="<? echo @$Originator; ?>"> 
		</td>
	</tr>	
	<tr>
		<td>
			Originator Type:
		</td>
		<td>
			<input type="text" name="OType" size="30" maxlength="50" value="<? echo @$OType; ?>">
		</td>
	</tr>

	<tr>
		<td>
			Destination:
		</td>
		<td>
			<input type="text" name="Destination" size="30" maxlength="50" value="<? echo @$Destination; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Message Body:
		</td>
		<td>
			<input type="text" name="Body" size="30" maxlength="200" value="<? echo @$Body; ?>"> 
		</td>
	</tr>
	<tr>
		<td>
			SMS Type:
		</td>
		<td>
			<input type="text" name="SMS_Type" size="30" maxlength="50" value="<? echo @$SMS_Type; ?>">
		</td>
		
	</tr>
	<tr>
		<td>
			SMS Encoding:
		</td>
		<td>
			<input type="text" name="SMS_encoding" size="30" maxlength="50" value="<? echo @$SMS_encoding; ?>">
		</td>
		
	</tr>

	<tr align="center">
		<td colspan="2" align="center">
			<input type="submit" name="submit" value="Send SMS">
		</td>
	</tr>
	</table>
</form>
</center>
</body>
</html>
