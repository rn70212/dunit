<?php

namespace vtface\Dunit;



class Dunit
{

	public  function init()
	{

		$r = $this->run("git status");
		if ($r == null) echo "failed\n";

		if (!strstr($r, "nothing to commit"))
			echo "file changed hai  rollback to last\n";
		else echo "no changes check codeword\n";

		$r = $this->run("git log");

		if (!strstr($r, "codeword"))
			echo "apna file ni hai\n";
		else {
			$r = $this->run("git log -1");
			if (!strstr($r, "codeword"))
				echo "rollback krdo\n";
			else echo "abi tk sahi env check";
		}

		// env found  
		// if email and licence found : mysql check
		//else redirect 

		//else no sql check
	}

	public function mysqlcheck()
	{

		//check sql connection 
		//if true  : count users 
		// if count user > 0 : check api 
		// if api true  && host = curent host  return true
		// else return false
		// return true;
		//else return true 

	}

	public function failed()
	{
		echo "redirect karo";
	}

	public function run($cmd)
	{
		exec($cmd .  ' 2> /dev/null ', $output);
		return implode(' ', $output);
	}
}
