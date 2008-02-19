<?php

class DATESELECT
{
  var $s_day;
  var $s_month;
  var $s_year;
  var $e_day;
  var $e_month;
  var $e_year;

function SetPeriod()
{
	print("<TABLE>\n");
	$this->StartDate();
	$this->EndDate();
	print("</TABLE>\n");

}

function StartDate()
{
  global $SAMSConf;
  $lang="./lang/lang.$SAMSConf->LANG";
  require($lang);

	print("  <TR>\n");
	print("  <TD><B>$mysqltools_dateselect1:</B>\n");
	print("  <TD><SELECT NAME=\"SDay\"> \n");
	for($i=1;$i<32;$i++)
   	{
     		if($this->s_day==$i)
        		print("	       <OPTION value=$i  SELECTED>$i\n");
		else
        		print("	       <OPTION value=$i>$i\n");
	}
	print("	       </SELECT> \n");
	print("     <SELECT NAME=\"SMon\" size=1> \n");
	for($i=1;$i<13;$i++)
   	{
		if($this->s_month==$i)
			print("	       <OPTION value=$i SELECTED>$month[$i]\n");
		else
			print("	       <OPTION value=$i>$month[$i]\n");
	}
	print("	       </SELECT> \n");
	print("     <SELECT NAME=\"SYea\" size=1> \n");
	for( $i=$this->s_year-5; $i<$this->s_year+5; $i++ )
	{
		if($this->s_year==$i)
			print("	       <OPTION value=$i SELECTED>$i\n");
		else
			print("	       <OPTION value=$i>$i\n");
	}
	print("     </SELECT> \n");
	print("        <TD><INPUT TYPE=\"SUBMIT\" NAME=\"sbutton\" id=sbutton value=\"$mysqltools_dateselect2\" >\n");
}

function EndDate()
{
  global $SAMSConf;
  $lang="./lang/lang.$SAMSConf->LANG";
  require($lang);

	print("  <TR>\n");
	print("  <TD><B>$mysqltools_dateselect3:</B>\n");
	print("  <TD><SELECT NAME=\"EDay\"> \n");
	for($i=1;$i<32;$i++)
   	{
     		if($this->e_day==$i)
        		print("	       <OPTION value=$i  SELECTED>$i\n");
		else
        		print("	       <OPTION value=$i>$i\n");
	}
	print("	       </SELECT> \n");
	print("     <SELECT NAME=\"EMon\" size=1> \n");
	for($i=1;$i<13;$i++)
   	{
		if($this->e_month==$i)
			print("	       <OPTION value=$i SELECTED>$month[$i]\n");
		else
			print("	       <OPTION value=$i>$month[$i]\n");
	}
	print("	       </SELECT> \n");
	print("     <SELECT NAME=\"EYea\" size=1> \n");
	for( $i=$this->e_year-5; $i<$this->e_year+5; $i++ )
	{
		if($this->e_year==$i)
			print("	       <OPTION value=$i SELECTED>$i\n");
		else
			print("	       <OPTION value=$i>$i\n");
	}
	print("     </SELECT> \n");
}

function DATESELECT($sdate, $edate)
{
	if($s_date!=0)
	{
		$a=explode("-",$sdate);
		$this->s_day=$a[0];
		$this->s_month=$a[1];
		$this->s_year=$a[2];
	}
	else
	{
		$this->s_day=1;
		$this->s_month=date("n");
		$this->s_year=date("Y");
	}
	if($s_date!=0)
	{
		$e=explode("-",$edate);
		$this->e_day=$e[0];
		$this->e_month=$e[1];
		$this->e_year=$e[2];
	}
	else
	{
		$this->e_day=date("d");
		$this->e_month=date("n");
		$this->e_year=date("Y");
	}
echo "$this->s_year-$this->s_month-$this->s_day $this->e_year-$this->e_month-$this->e_day<BR>";
}

}

?>