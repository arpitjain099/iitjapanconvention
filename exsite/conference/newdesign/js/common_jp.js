function setTotal1()
{
	subTotal1 = document.getElementById("subTotal1").value;
	subTotal3 = document.getElementById("subTotal3").value;
	subTotal4 = document.getElementById("subTotal4").value;
	subTotal5 = document.getElementById("subTotal5").value;
	subTotal6 = document.getElementById("subTotal6").value;

	qty = document.getElementById("qty1").value;
	earlyBirdDiscount = document.getElementById("earlyBirdDiscount").value;
	if(earlyBirdDiscount==1)
	{
		subTotal1 = 4000 * qty;
	}

	if(earlyBirdDiscount==0)
	{
		subTotal1 = 20000 * qty;
	}
	 document.getElementById("subTotal1").value = subTotal1;
	 document.getElementById("subTotal3").value = subTotal3;
	 document.getElementById("subTotal4").value = subTotal4;
	 document.getElementById("subTotal5").value = subTotal5;
	 document.getElementById("subTotal6").value = subTotal6;
		 
	 document.getElementById("total").value =  parseInt(subTotal1)
												+parseInt(subTotal3)
												+parseInt(subTotal4)
												+parseInt(subTotal5)
												+parseInt(subTotal6);
}
/*new added for student category */
function setTotal2()
{	
	subTotal1 = document.getElementById("subTotal1").value;
	subTotal2 = document.getElementById("subTotal2").value;
	subTotal3 = document.getElementById("subTotal3").value;
	subTotal4 = document.getElementById("subTotal4").value;
	subTotal5 = document.getElementById("subTotal5").value;
	subTotal6 = document.getElementById("subTotal6").value;

	qty = document.getElementById("qty2").value;
	earlyBirdDiscount = document.getElementById("earlyBirdDiscount").value;
	if(earlyBirdDiscount==1)
	{
		subTotal2 = 0 * qty;
	}

	if(earlyBirdDiscount==0)
	{
		subTotal2 = 0 * qty;
	}
	 document.getElementById("subTotal1").value = subTotal1;
	 document.getElementById("subTotal2").value = subTotal2;
	 document.getElementById("subTotal3").value = subTotal3;
	 document.getElementById("subTotal4").value = subTotal4;
	 document.getElementById("subTotal5").value = subTotal5;
	 document.getElementById("subTotal6").value = subTotal6 ;
	 
	 document.getElementById("total").value =  parseInt(subTotal1)
	 											+parseInt(subTotal2)
												+parseInt(subTotal3)
												+parseInt(subTotal4)
												+parseInt(subTotal5)
												+parseInt(subTotal6);
	/*if(qty==0)
	{
		document.getElementById("year").value = "";
		document.getElementById("cam_name").value = "";
	}*/
												
}
/* End */
function setTotal3()
{
	subTotal1 = document.getElementById("subTotal1").value;
	subTotal3 = document.getElementById("subTotal3").value;
	subTotal4 = document.getElementById("subTotal4").value;
	subTotal5 = document.getElementById("subTotal5").value;
	subTotal6 = document.getElementById("subTotal6").value;
	
	qty = document.getElementById("qty3").value;
	earlyBirdDiscount = document.getElementById("earlyBirdDiscount").value;
	if(earlyBirdDiscount==1)
	{
		subTotal3 = 2000 * qty;
	}

	if(earlyBirdDiscount==0)
	{
		subTotal3 = 6000 * qty;
	}
	 document.getElementById("subTotal1").value = subTotal1;
	 document.getElementById("subTotal3").value = subTotal3;
	 document.getElementById("subTotal4").value = subTotal4;
	 document.getElementById("subTotal5").value = subTotal5;
	 document.getElementById("subTotal6").value = subTotal6;
	 document.getElementById("total").value =  parseInt(subTotal1)
												+parseInt(subTotal3)
												+parseInt(subTotal4)
												+parseInt(subTotal5)
												+parseInt(subTotal6);
}

function setTotal4()
{
	subTotal1 = document.getElementById("subTotal1").value;
	subTotal3 = document.getElementById("subTotal3").value;
	subTotal4 = document.getElementById("subTotal4").value;
	subTotal5 = document.getElementById("subTotal5").value;
	subTotal6 = document.getElementById("subTotal6").value;

	qty = document.getElementById("qty4").value;
	earlyBirdDiscount = document.getElementById("earlyBirdDiscount").value;
	if(earlyBirdDiscount==1)
	{
		subTotal4 = 2000 * qty;
	}

	if(earlyBirdDiscount==0)
	{
		subTotal4 = 6000 * qty;
	}
	 document.getElementById("subTotal1").value = subTotal1;
	 document.getElementById("subTotal3").value = subTotal3;
	 document.getElementById("subTotal4").value = subTotal4;
	 document.getElementById("subTotal5").value = subTotal5;
	 document.getElementById("subTotal6").value = subTotal6;
	 document.getElementById("total").value =  parseInt(subTotal1)
												+parseInt(subTotal3)
												+parseInt(subTotal4)
												+parseInt(subTotal5)
												+parseInt(subTotal6);
}
function setTotal5()
{
	subTotal1 = document.getElementById("subTotal1").value;
	subTotal3 = document.getElementById("subTotal3").value;
	subTotal4 = document.getElementById("subTotal4").value;
	subTotal5 = document.getElementById("subTotal5").value;
	subTotal6 = document.getElementById("subTotal6").value

	qty = document.getElementById("qty5").value;
	earlyBirdDiscount = document.getElementById("earlyBirdDiscount").value;
	if(earlyBirdDiscount==1)
	{
		subTotal5 = 50000 * qty;
	}

	if(earlyBirdDiscount==0)
	{
		subTotal5 = 75000 * qty;
	}
	 document.getElementById("subTotal1").value = subTotal1;
	 document.getElementById("subTotal3").value = subTotal3;
	 document.getElementById("subTotal4").value = subTotal4;
	 document.getElementById("subTotal5").value = subTotal5;
	 document.getElementById("subTotal6").value = subTotal6 ;
	 
	 document.getElementById("total").value =  parseInt(subTotal1)
												+parseInt(subTotal3)
												+parseInt(subTotal4)
												+parseInt(subTotal5)
												+parseInt(subTotal6);
												
}
function setTotal6()
{
	subTotal1 = document.getElementById("subTotal1").value;
	subTotal3 = document.getElementById("subTotal3").value;
	subTotal4 = document.getElementById("subTotal4").value;
	subTotal5 = document.getElementById("subTotal5").value;
    subTotal6 = document.getElementById("subTotal6").value;
	
	qty = document.getElementById("qty6").value;
	earlyBirdDiscount = document.getElementById("earlyBirdDiscount").value;
	if(earlyBirdDiscount==1)
	{
		subTotal6 = 8000 * qty;
	}

	if(earlyBirdDiscount==0)
	{
		subTotal6 = 15000 * qty;
	}
	 document.getElementById("subTotal1").value = subTotal1;
	 document.getElementById("subTotal3").value = subTotal3;
	 document.getElementById("subTotal4").value = subTotal4;
	 document.getElementById("subTotal5").value = subTotal5;
	 document.getElementById("subTotal6").value = subTotal6;
	 
	 document.getElementById("total").value =  parseInt(subTotal1)
												+parseInt(subTotal3)
												+parseInt(subTotal4)
												+parseInt(subTotal5) 
												+ parseInt(subTotal6) ;
}


function check() 
{
	valid=true;
	
	/*new added*/
	mode_of_payment_chosen = '';
	for (i = 0; i <4; i++) {
	if (document.Contactform.mode_of_payment[i].checked) {
	mode_of_payment_chosen = document.Contactform.mode_of_payment[i].value;
	}
	}
	/* end */

	/* To check whether the order is for IIT Alumni 2007/07/25*/
	var chkGraduationYear=false;
	/* End */

	if (TrimAll(document.Contactform.C_FirstName.value) == "") 
	{	
		alert("���O����͂��Ă�������");
		document.Contactform.C_FirstName.focus();
		valid = false;
	} 
	else if (TrimAll(document.Contactform.C_LastName.value) == "") 
	{
		alert("��������͂��Ă�������");
		document.Contactform.C_LastName.focus();
		valid = false;
	} 
	else if (!emailCheck (document.Contactform.C_Email.value))
	{
       // alert("Please enter valid email address");
		document.Contactform.C_Email.focus();
		valid = false;
	} 
	else if (TrimAll(document.Contactform.C_MailingAddress.value) == "") 
	{
		alert("�X�H�A�h���X����͂��Ă�������");
		document.Contactform.C_MailingAddress.focus();
		valid = false;
	} 
	else if (TrimAll(document.Contactform.C_City.value) == "") 
	{
		alert("�s�s����͂��Ă�������");
		document.Contactform.C_City.focus();
		valid = false;
	} 
	else if (document.Contactform.C_StateProv.value == "") 
	{
		alert("�B����͂��Ă�������");
		document.Contactform.C_StateProv.focus();
		valid = false;
	} 
	else if (TrimAll(document.Contactform.C_PostalCode.value) == "") 
	{
		alert("�X�֔ԍ�����͂��Ă�������");
		document.Contactform.C_PostalCode.focus();
		valid = false;
	} 
	else if (document.Contactform.c_country.value == "") 
	{
		alert("����I�����Ă�������");
		document.Contactform.c_country.focus();
		valid = false;
	} 
	   
	    else if(!validPhone(document.Contactform.C_Phone.value))
		{
		document.Contactform.C_Phone.focus();
		valid = false;
		}
	
	/*
	  Modified to check the year of graduation and Campus name
	  only for IIT Alumni 2007/07/25
	*/
	/*else if(chkGraduationYear == true) 
	{ 
		if (TrimAll(document.Contactform.year.value) == "") 
		{
			alert("���Ƃ̔N����͂��Ă�������");
			document.Contactform.year.focus();
			valid = false;
		} 
		else if (TrimAll(document.Contactform.cam_name.value) == "") 
		{
			alert("�L�����p�X������͂��Ă�������");
			document.Contactform.cam_name.focus();
			valid = false;
		}
	}*/
	/*  End */
	/*else if (!(document.Contactform.total.value > 0))
    {
	  alert("�`�F�b�N�{�[�N�X���`�F�b�N���Ē��������m�F���ĉ������B");
	  //document.Contactform.order.focus();
	  valid=false;
    }*/
	
		/* new added */
	else if (!(document.Contactform.total.value > 0))
    {
	  if(mode_of_payment_chosen!='student_only')
	  {
	  	alert("�`�F�b�N�{�[�N�X���`�F�b�N���Ē��������m�F���ĉ������B");
		valid=false;
	  }
	  //document.Contactform.order.focus();
    }
	else if(mode_of_payment_chosen == 'student_only')
	{
		if(document.getElementById("qty1").value > 0 || document.getElementById("qty3").value > 0 || document.getElementById("qty4").value > 0 || document.getElementById("qty5").value > 0 || document.getElementById("qty6").value > 0)
		{
			alert("���̎x�������@��I�����ĉ������B");
			valid=false;
		}
	}
	/* end */

	/*else if (!document.Contactform.order.checked) 
	{
		alert("�`�F�b�N�{�[�N�X���`�F�b�N���Ē��������m�F���ĉ������B");
		document.Contactform.order.focus();
		valid = false;
	} */

	return valid;
}

function valButton(btn) {
    var cnt = -1;
    for (var i=btn.length-1; i > -1; i--) {
        if (btn[i].checked) {cnt = i; i = -1;}
    }
    if (cnt > -1) return btn[cnt].value;
    else return null;
}


function TrimAll(str)
{
	var regexpr = /^(\s+)|(\s+)$/g;
	str = str.replace(regexpr,'');
	return str;
}

function validPhone(strString)
{
	var strValidChars = "0123456789-";
   	var strChar;
  	var blnResult = true;
	var len = strString.length;
if(len!=0)
{
   	if(strString.charAt(0)=='-' || strString.charAt(len-1)=='-')
	{
		alert('�ŏ��܂��͍Ō�ɂ́A- ����͂ł��܂���B ');
		return false;
	}
	
	var count=0;
	 for (i = 0; i < strString.length ; i++)
	 {
	 	 strChar = strString.charAt(i);
	 	 if(strChar=='-')
	  	{
	  		count++;
	  	}
	  
	 }
	 
	 if(count>3)
	 {
	 	alert('- �͎O��ȏ�œ��͂ł��܂���B');
	 	return false;
	 }
	  
	var  b=0;
	var c=0;
	 for (i = 0; i < strString.length; i++)
	 {
	  strChar = strString.charAt(i);
	  	if(strChar=='-')
	  	{
	  		c++;
	  	}
	  	if(strChar=='0')
	  	{
	  		b++;
	  	}
	  
	  }
	  var d=c+b;
 
	  if(strString.length==d)
	  {
		alert('���ׂ�0�l����͂��Ȃ��ł��������B');
	  	return false;
	  }
	  
	var flag =0;
	for (i = 0; i < strString.length ; i++)
	{
		 strChar = strString.charAt(i);
	  	
	  	if(strChar=='-')
	  	{
	  		if(flag==1)
	  		{
	  			alert('�A���I�� - ����͂��Ȃ��ł��������B');
	  			return false;
	  		}
	  		else
	  		{
	  			flag =1;
	  		}
	  	}
	  	else
	  	{
	  		flag =0;
	  	}
	}
	  
	  
   //  test strString consists of valid characters listed above
	 for (i = 0; i < strString.length && blnResult == true; i++)
	 {
	  strChar = strString.charAt(i);
	  if (strValidChars.indexOf(strChar) == -1)
		 {
		 	alert('�d�b�Ԍ�ł͐��l����͂��Ă��������B');
		 	blnResult = false;
		 }
	  }
}
   return blnResult;
}

// Function For Email Validations Begins

function emailCheck (emailStr) {
/* The following pattern is used to check if the entered e-mail address
   fits the user@domain format.  It also is used to separate the username
   from the domain. */
var emailPat=/^(.+)@(.+)$/
/* The following string represents the pattern for matching all special
   characters.  We don't want to allow special characters in the address. 
   These characters include ( ) < > @ , ; : \ " . [ ]    */
var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
/* The following string represents the range of characters allowed in a 
   username or domainname.  It really states which chars aren't allowed. */
var validChars="\[^\\s" + specialChars + "\]"
/* The following pattern applies if the "user" is a quoted string (in
   which case, there are no rules about which characters are allowed
   and which aren't; anything goes).  E.g. "jiminy cricket"@disney.com
   is a legal e-mail address. */
var quotedUser="(\"[^\"]*\")"
/* The following pattern applies for domains that are IP addresses,
   rather than symbolic names.  E.g. joe@[123.124.233.4] is a legal
   e-mail address. NOTE: The square brackets are required. */
var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
/* The following string represents an atom (basically a series of
   non-special characters.) */
var atom=validChars + '+'
/* The following string represents one word in the typical username.
   For example, in john.doe@somewhere.com, john and doe are words.
   Basically, a word is either an atom or quoted string. */
var word="(" + atom + "|" + quotedUser + ")"
// The following pattern describes the structure of the user
var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
/* The following pattern describes the structure of a normal symbolic
   domain, as opposed to ipDomainPat, shown above. */
var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")


/* Finally, let's start trying to figure out if the supplied address is
   valid. */

/* Begin with the coarse pattern to simply break up user@domain into
   different pieces that are easy to analyze. */
var matchArray=emailStr.match(emailPat)
if (matchArray==null) {
  /* Too many/few @'s or something; basically, this address doesn't
     even fit the general mould of a valid e-mail address. */
	alert("���[���A�h���X����͂��Ă�������")
	return false
}
var user=matchArray[1]
var domain=matchArray[2]

// See if "user" is valid 
if (user.match(userPat)==null) {
    // user is not valid
    alert("���[���A�h���X����͂��Ă�������")
    return false
}

/* if the e-mail address is at an IP address (as opposed to a symbolic
   host name) make sure the IP address is valid. */
var IPArray=domain.match(ipDomainPat)
if (IPArray!=null) {
    // this is an IP address
	  for (var i=1;i<=4;i++) {
	    if (IPArray[i]>255) {
	        alert("���[���A�h���X����͂��Ă�������")
		return false
	    }
    }
    return true
}

// Domain is symbolic name
var domainArray=domain.match(domainPat)
if (domainArray==null) {
	alert("���[���A�h���X����͂��Ă�������")
    return false
}

/* domain name seems valid, but now make sure that it ends in a
   three-letter word (like com, edu, gov) or a two-letter word,
   representing country (uk, nl), and that there's a hostname preceding 
   the domain or country. */

/* Now we need to break up the domain to get a count of how many atoms
   it consists of. */
var atomPat=new RegExp(atom,"g")
var domArr=domain.match(atomPat)
var len=domArr.length
if (domArr[domArr.length-1].length<2 || 
    domArr[domArr.length-1].length>3) {
   // the address must end in a two letter or three letter word.
   alert("���[���A�h���X����͂��Ă�������")
   return false
}

// Make sure there's a host name preceding the domain.
if (len<2) {
   var errStr="���[���A�h���X����͂��Ă�������"
   alert(errStr)
   return false
}

// If we've gotten this far, everything's valid!
return true;
}

// Function For Email Validations Ends