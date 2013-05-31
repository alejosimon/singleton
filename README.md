What is "PHP Abstract Singleton" pattern?
-------------------------------

Is an abstract implementation of the Singleton pattern to turn any class to
as Singleton, so as the delegate constructor parameters are transparently.

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
