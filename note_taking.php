<?php



class Log

{

	public $strData = $_POST['string'];

	public function Write($strFileName, $strData)
	{
		if (!is_writable($strFileName))
		die(Change your CHMOD permissions to . $strFileName);
		
		fopen($strFileName, 'a+');
		fwrite($handle, "\r" . $strData );
		fclose($handle);
		
	}
	
	public function Read($strFileName)
	{
		$handle = fopen($strFileName, 'r')
		return file_get_contents($strFileName);
		
	}

}


$Log = new Log();
echo $Log->Read('test.txt');

?>


