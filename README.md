What is "PHP Abstract Singleton" pattern?
-------------------------------

PHP Abstract Singleton is an implementation of the patron "singleton" to turn any class as
a singleton, so as the delegate constructor parameters is transparently.

------------
Requirements
------------

Only supported on PHP 5.4 and up.

------------
Installation
------------

Use a simple #require or any autoload methods.

-------------
Documentation
-------------

Example to use:
<pre>
class Model implements Pattern\ISigleton
{
	use Pattern\TSingleton ;

	protected $database ;
	protected $config ;

	protected fuction __construct( $database, $config )
	{
		$this->database = $database ;
		$this->config   = $config ;
	}

	public fuction getProductsSortedByPrice() {}
	public fuction getProductsSortedByName() {}
	.....
}

$model = new ProductModel( $database, $config ) ; // ERROR!!!

// Transparent parse arguments to constructor.
$model = ProductModel::GetInstance( $database, $config ) ; // OK!
</pre>
------------
Contributing
------------

TODO...
