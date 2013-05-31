<?php
/**
*	PHP Abstract Singleton Pattern.
*
*	@namespace Pattern
*	@filesource ISingleon.php
*
*	@author Copyright (c) 2013 Alejandro D. Carraretto <ceo@consultora54.com>
*	@license GPLv3 (http://www.gnu.org/licenses/agpl-3.0.html)
*
********************************************************************/

namespace Pattern ;

/**
*	@name ISingleton interface.
*	@version 0.1.0
*/
interface ISingleton
{
	/**
	*	Gets only one instance. (Singleton pattern)
	*
	*	@params Optional multiple values as arguments for the constructor.
	*	@return Object instance from called class.
	*/
	static function getInstance() ;
}

/*******************************************************************/
