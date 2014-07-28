<?php


class MangaData extends Moloquent {

	/**
	 * Used to set table (in mongodb, it is a collection)
	 * 
	 * @access protected
	 * @var string
	 **/
	protected $collection = "mangadb";


	/**
	 * Used to set mongodb connection
	 * 
	 * @access protected
	 * @var string
	 **/
	protected $connection = "mongodb";

	
}