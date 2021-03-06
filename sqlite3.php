<?php
	/**
	 * SQLite3 backend for database handling.
	 */
  	class DatabaseHandler {
  		/**
		 * storing the database connection
		 */
    	protected $link;
		/**
		 * storing connection parameters
		 */
    	private $path;
    	
		/**
		 * takes parameters and init()s
		 */
    	public function __construct($path)
    	{
	      	$this->path = $path;
	      	$this->init();
	    }
		
		/**
		 * shuts down the database
		 */
		public function __destruct()
		{
			$this->link->close();
		}
		
		/**
		 * performs an SQL query
		 */
		public function query($q)
		{
			return $this->link->query($q);
		}
		
		/**
		 * opens the connection to the database
		 */
	    private function init()
	    {
	      	$this->link = new SQLite3($this->path);    
	    }
  	}
?>
