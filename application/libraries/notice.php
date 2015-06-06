<?php
class notice
{
	/**
	 * Notice class
	 *
	 * Save and enqueue notifications within a big array 
	 * which can be outputed using "parse_notice" method.
	**/
	
	private $notice;
	public function __construct()
	{
		$this->notice = '';
	}
	public function push_notice($e)
	{
		$this->notice[]	=	$e;
	}
	public function output_notice($return = FALSE)
	{
		if(is_array($this->notice))
		{
			$final		=	'';
			foreach($this->notice as $n)
			{
				if($return == FALSE)
				{
					echo $n;
				}
				else
				{
					$final	.=	$n;
				}
			}
			return $final;
		}
		else
		{
			return $this->notice;
		}
	}
	public function get_notice_array()
	{
		return $this->notice;
	}
}