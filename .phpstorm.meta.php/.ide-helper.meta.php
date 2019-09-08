<?php
// @link https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
namespace PHPSTORM_META {

	override(
		\Cake\Controller\Controller::loadComponent(0),
		map([
			'Auth' => \Cake\Controller\Component\AuthComponent::class,
			'Cookie' => \Cake\Controller\Component\CookieComponent::class,
			'Csrf' => \Cake\Controller\Component\CsrfComponent::class,
			'Flash' => \Cake\Controller\Component\FlashComponent::class,
			'Paginator' => \Cake\Controller\Component\PaginatorComponent::class,
			'RequestHandler' => \Cake\Controller\Component\RequestHandlerComponent::class,
			'Security' => \Cake\Controller\Component\SecurityComponent::class,
			'Cache.Cache' => \Cache\Controller\Component\CacheComponent::class,
			'Cache.PartialCache' => \Cache\Controller\Component\PartialCacheComponent::class,
			'Captcha.Captcha' => \Captcha\Controller\Component\CaptchaComponent::class,
			'Captcha.Preparer' => \Captcha\Controller\Component\PreparerComponent::class,
			'Data.CountryStateHelper' => \Data\Controller\Component\CountryStateHelperComponent::class,
			'DebugKit.Toolbar' => \DebugKit\Controller\Component\ToolbarComponent::class,
			'Ratings.Rating' => \Ratings\Controller\Component\RatingComponent::class,
			'Search.Prg' => \Search\Controller\Component\PrgComponent::class,
			'Setup.Setup' => \Setup\Controller\Component\SetupComponent::class,
			'TestHelper.TestRunner' => \TestHelper\Controller\Component\TestRunnerComponent::class,
			'Tools.Common' => \Tools\Controller\Component\CommonComponent::class,
			'Tools.Mobile' => \Tools\Controller\Component\MobileComponent::class,
			'Tools.RefererRedirect' => \Tools\Controller\Component\RefererRedirectComponent::class,
			'Tools.Url' => \Tools\Controller\Component\UrlComponent::class,
		])
	);

	override(
		\Cake\Core\PluginApplicationInterface::addPlugin(0),
		map([
			'Ajax' => \Cake\Http\BaseApplication::class,
			'AssetCompress' => \Cake\Http\BaseApplication::class,
			'AuthSandbox' => \Cake\Http\BaseApplication::class,
			'Bake' => \Cake\Http\BaseApplication::class,
			'BootstrapUI' => \Cake\Http\BaseApplication::class,
			'Cache' => \Cake\Http\BaseApplication::class,
			'Cake/Localized' => \Cake\Http\BaseApplication::class,
			'CakeDto' => \Cake\Http\BaseApplication::class,
			'CakePdf' => \Cake\Http\BaseApplication::class,
			'CakephpWhoops' => \Cake\Http\BaseApplication::class,
			'Calendar' => \Cake\Http\BaseApplication::class,
			'Captcha' => \Cake\Http\BaseApplication::class,
			'CsvView' => \Cake\Http\BaseApplication::class,
			'Data' => \Cake\Http\BaseApplication::class,
			'DatabaseLog' => \Cake\Http\BaseApplication::class,
			'DebugKit' => \Cake\Http\BaseApplication::class,
			'Feed' => \Cake\Http\BaseApplication::class,
			'Feedback' => \Cake\Http\BaseApplication::class,
			'Flash' => \Cake\Http\BaseApplication::class,
			'Geo' => \Cake\Http\BaseApplication::class,
			'Gourmet/KnpMenu' => \Cake\Http\BaseApplication::class,
			'Hashid' => \Cake\Http\BaseApplication::class,
			'IdeHelper' => \Cake\Http\BaseApplication::class,
			'Markup' => \Cake\Http\BaseApplication::class,
			'Migrations' => \Cake\Http\BaseApplication::class,
			'MiniAsset' => \Cake\Http\BaseApplication::class,
			'Queue' => \Cake\Http\BaseApplication::class,
			'Ratings' => \Cake\Http\BaseApplication::class,
			'Sandbox' => \Cake\Http\BaseApplication::class,
			'Search' => \Cake\Http\BaseApplication::class,
			'Setup' => \Cake\Http\BaseApplication::class,
			'Shim' => \Cake\Http\BaseApplication::class,
			'SocialShare' => \Cake\Http\BaseApplication::class,
			'StateMachineSandbox' => \Cake\Http\BaseApplication::class,
			'Tags' => \Cake\Http\BaseApplication::class,
			'TestHelper' => \Cake\Http\BaseApplication::class,
			'TinyAuth' => \Cake\Http\BaseApplication::class,
			'Tools' => \Cake\Http\BaseApplication::class,
			'WyriHaximus/TwigView' => \Cake\Http\BaseApplication::class,
		])
	);

	override(
		\Cake\Database\Type::build(0),
		map([
			'biginteger' => \Cake\Database\Type\IntegerType::class,
			'binary' => \Cake\Database\Type\BinaryType::class,
			'binaryuuid' => \Cake\Database\Type\BinaryUuidType::class,
			'boolean' => \Cake\Database\Type\BoolType::class,
			'date' => \Cake\Database\Type\DateType::class,
			'datetime' => \Cake\Database\Type\DateTimeType::class,
			'decimal' => \Cake\Database\Type\DecimalType::class,
			'float' => \Cake\Database\Type\FloatType::class,
			'image' => \Captcha\Database\Type\ImageType::class,
			'integer' => \Cake\Database\Type\IntegerType::class,
			'json' => \Cake\Database\Type\JsonType::class,
			'smallinteger' => \Cake\Database\Type\IntegerType::class,
			'string' => \Cake\Database\Type\StringType::class,
			'text' => \Cake\Database\Type\StringType::class,
			'time' => \Cake\Database\Type\TimeType::class,
			'timestamp' => \Cake\Database\Type\DateTimeType::class,
			'tinyinteger' => \Cake\Database\Type\IntegerType::class,
			'uuid' => \Cake\Database\Type\UuidType::class,
		])
	);

	override(
		\Cake\Datasource\ModelAwareTrait::loadModel(0),
		map([
			'Roles' => \App\Model\Table\RolesTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
			'Captcha.Captchas' => \Captcha\Model\Table\CaptchasTable::class,
			'Data.Addresses' => \Data\Model\Table\AddressesTable::class,
			'Data.Cities' => \Data\Model\Table\CitiesTable::class,
			'Data.Continents' => \Data\Model\Table\ContinentsTable::class,
			'Data.Counties' => \Data\Model\Table\CountiesTable::class,
			'Data.Countries' => \Data\Model\Table\CountriesTable::class,
			'Data.Currencies' => \Data\Model\Table\CurrenciesTable::class,
			'Data.Districts' => \Data\Model\Table\DistrictsTable::class,
			'Data.Languages' => \Data\Model\Table\LanguagesTable::class,
			'Data.Locations' => \Data\Model\Table\LocationsTable::class,
			'Data.MimeTypeImages' => \Data\Model\Table\MimeTypeImagesTable::class,
			'Data.MimeTypes' => \Data\Model\Table\MimeTypesTable::class,
			'Data.PostalCodes' => \Data\Model\Table\PostalCodesTable::class,
			'Data.States' => \Data\Model\Table\StatesTable::class,
			'DatabaseLog.DatabaseLogApp' => \DatabaseLog\Model\Table\DatabaseLogAppTable::class,
			'DatabaseLog.DatabaseLogs' => \DatabaseLog\Model\Table\DatabaseLogsTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Feedback.Feedbackstore' => \Feedback\Model\Table\FeedbackstoreTable::class,
			'Geo.GeocodedAddresses' => \Geo\Model\Table\GeocodedAddressesTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'Ratings.Ratings' => \Ratings\Model\Table\RatingsTable::class,
			'Sandbox.Animals' => \Sandbox\Model\Table\AnimalsTable::class,
			'Sandbox.BitmaskRecords' => \Sandbox\Model\Table\BitmaskRecordsTable::class,
			'Sandbox.CountryRecords' => \Sandbox\Model\Table\CountryRecordsTable::class,
			'Sandbox.Events' => \Sandbox\Model\Table\EventsTable::class,
			'Sandbox.ExampleRecords' => \Sandbox\Model\Table\ExampleRecordsTable::class,
			'Sandbox.HashidCountries' => \Sandbox\Model\Table\HashidCountriesTable::class,
			'Sandbox.SandboxCategories' => \Sandbox\Model\Table\SandboxCategoriesTable::class,
			'Sandbox.SandboxPosts' => \Sandbox\Model\Table\SandboxPostsTable::class,
			'Sandbox.SandboxRatings' => \Sandbox\Model\Table\SandboxRatingsTable::class,
			'Sandbox.SandboxUsers' => \Sandbox\Model\Table\SandboxUsersTable::class,
			'Tags.Tagged' => \Tags\Model\Table\TaggedTable::class,
			'Tags.Tags' => \Tags\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
		])
	);

	override(
		\Cake\Datasource\QueryInterface::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Association::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorInterface::get(0),
		map([
			'Roles' => \App\Model\Table\RolesTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
			'Captcha.Captchas' => \Captcha\Model\Table\CaptchasTable::class,
			'Data.Addresses' => \Data\Model\Table\AddressesTable::class,
			'Data.Cities' => \Data\Model\Table\CitiesTable::class,
			'Data.Continents' => \Data\Model\Table\ContinentsTable::class,
			'Data.Counties' => \Data\Model\Table\CountiesTable::class,
			'Data.Countries' => \Data\Model\Table\CountriesTable::class,
			'Data.Currencies' => \Data\Model\Table\CurrenciesTable::class,
			'Data.Districts' => \Data\Model\Table\DistrictsTable::class,
			'Data.Languages' => \Data\Model\Table\LanguagesTable::class,
			'Data.Locations' => \Data\Model\Table\LocationsTable::class,
			'Data.MimeTypeImages' => \Data\Model\Table\MimeTypeImagesTable::class,
			'Data.MimeTypes' => \Data\Model\Table\MimeTypesTable::class,
			'Data.PostalCodes' => \Data\Model\Table\PostalCodesTable::class,
			'Data.States' => \Data\Model\Table\StatesTable::class,
			'DatabaseLog.DatabaseLogApp' => \DatabaseLog\Model\Table\DatabaseLogAppTable::class,
			'DatabaseLog.DatabaseLogs' => \DatabaseLog\Model\Table\DatabaseLogsTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Feedback.Feedbackstore' => \Feedback\Model\Table\FeedbackstoreTable::class,
			'Geo.GeocodedAddresses' => \Geo\Model\Table\GeocodedAddressesTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'Ratings.Ratings' => \Ratings\Model\Table\RatingsTable::class,
			'Sandbox.Animals' => \Sandbox\Model\Table\AnimalsTable::class,
			'Sandbox.BitmaskRecords' => \Sandbox\Model\Table\BitmaskRecordsTable::class,
			'Sandbox.CountryRecords' => \Sandbox\Model\Table\CountryRecordsTable::class,
			'Sandbox.Events' => \Sandbox\Model\Table\EventsTable::class,
			'Sandbox.ExampleRecords' => \Sandbox\Model\Table\ExampleRecordsTable::class,
			'Sandbox.HashidCountries' => \Sandbox\Model\Table\HashidCountriesTable::class,
			'Sandbox.SandboxCategories' => \Sandbox\Model\Table\SandboxCategoriesTable::class,
			'Sandbox.SandboxPosts' => \Sandbox\Model\Table\SandboxPostsTable::class,
			'Sandbox.SandboxRatings' => \Sandbox\Model\Table\SandboxRatingsTable::class,
			'Sandbox.SandboxUsers' => \Sandbox\Model\Table\SandboxUsersTable::class,
			'Tags.Tagged' => \Tags\Model\Table\TaggedTable::class,
			'Tags.Tags' => \Tags\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
		])
	);

	override(
		\Cake\ORM\Table::addBehavior(0),
		map([
			'Captcha.Captcha' => \Cake\ORM\Table::class,
			'Captcha.PassiveCaptcha' => \Cake\ORM\Table::class,
			'CounterCache' => \Cake\ORM\Table::class,
			'DebugKit.Timed' => \Cake\ORM\Table::class,
			'Geo.Geocoder' => \Cake\ORM\Table::class,
			'Ratings.Ratable' => \Cake\ORM\Table::class,
			'Search.Search' => \Cake\ORM\Table::class,
			'Tags.Tag' => \Cake\ORM\Table::class,
			'Timestamp' => \Cake\ORM\Table::class,
			'Tools.AfterSave' => \Cake\ORM\Table::class,
			'Tools.Bitmasked' => \Cake\ORM\Table::class,
			'Tools.Confirmable' => \Cake\ORM\Table::class,
			'Tools.Jsonable' => \Cake\ORM\Table::class,
			'Tools.Neighbor' => \Cake\ORM\Table::class,
			'Tools.Passwordable' => \Cake\ORM\Table::class,
			'Tools.Reset' => \Cake\ORM\Table::class,
			'Tools.Slugged' => \Cake\ORM\Table::class,
			'Tools.String' => \Cake\ORM\Table::class,
			'Tools.Toggle' => \Cake\ORM\Table::class,
			'Tools.TypeMap' => \Cake\ORM\Table::class,
			'Tools.Typographic' => \Cake\ORM\Table::class,
			'Translate' => \Cake\ORM\Table::class,
			'Tree' => \Cake\ORM\Table::class,
		])
	);

	override(
		\Cake\ORM\Table::belongToMany(0),
		map([
			'Roles' => \Cake\ORM\Association\BelongsToMany::class,
			'Users' => \Cake\ORM\Association\BelongsToMany::class,
			'Captcha.Captchas' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Addresses' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Cities' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Continents' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Counties' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Countries' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Currencies' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Districts' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Languages' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Locations' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.MimeTypes' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.PostalCodes' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.States' => \Cake\ORM\Association\BelongsToMany::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\BelongsToMany::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsToMany::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\BelongsToMany::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\BelongsToMany::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\BelongsToMany::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\BelongsToMany::class,
			'Ratings.Ratings' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.Animals' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.Events' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.HashidCountries' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\BelongsToMany::class,
			'Tags.Tagged' => \Cake\ORM\Association\BelongsToMany::class,
			'Tags.Tags' => \Cake\ORM\Association\BelongsToMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsToMany::class,
		])
	);

	override(
		\Cake\ORM\Table::belongsTo(0),
		map([
			'Roles' => \Cake\ORM\Association\BelongsTo::class,
			'Users' => \Cake\ORM\Association\BelongsTo::class,
			'Captcha.Captchas' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Addresses' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Cities' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Continents' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Counties' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Countries' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Currencies' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Districts' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Languages' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Locations' => \Cake\ORM\Association\BelongsTo::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\BelongsTo::class,
			'Data.MimeTypes' => \Cake\ORM\Association\BelongsTo::class,
			'Data.PostalCodes' => \Cake\ORM\Association\BelongsTo::class,
			'Data.States' => \Cake\ORM\Association\BelongsTo::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\BelongsTo::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsTo::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\BelongsTo::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\BelongsTo::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\BelongsTo::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\BelongsTo::class,
			'Ratings.Ratings' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.Animals' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.Events' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.HashidCountries' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\BelongsTo::class,
			'Tags.Tagged' => \Cake\ORM\Association\BelongsTo::class,
			'Tags.Tags' => \Cake\ORM\Association\BelongsTo::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsTo::class,
		])
	);

	override(
		\Cake\ORM\Table::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Table::hasMany(0),
		map([
			'Roles' => \Cake\ORM\Association\HasMany::class,
			'Users' => \Cake\ORM\Association\HasMany::class,
			'Captcha.Captchas' => \Cake\ORM\Association\HasMany::class,
			'Data.Addresses' => \Cake\ORM\Association\HasMany::class,
			'Data.Cities' => \Cake\ORM\Association\HasMany::class,
			'Data.Continents' => \Cake\ORM\Association\HasMany::class,
			'Data.Counties' => \Cake\ORM\Association\HasMany::class,
			'Data.Countries' => \Cake\ORM\Association\HasMany::class,
			'Data.Currencies' => \Cake\ORM\Association\HasMany::class,
			'Data.Districts' => \Cake\ORM\Association\HasMany::class,
			'Data.Languages' => \Cake\ORM\Association\HasMany::class,
			'Data.Locations' => \Cake\ORM\Association\HasMany::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\HasMany::class,
			'Data.MimeTypes' => \Cake\ORM\Association\HasMany::class,
			'Data.PostalCodes' => \Cake\ORM\Association\HasMany::class,
			'Data.States' => \Cake\ORM\Association\HasMany::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\HasMany::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasMany::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\HasMany::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\HasMany::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\HasMany::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\HasMany::class,
			'Ratings.Ratings' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.Animals' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.Events' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.HashidCountries' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\HasMany::class,
			'Tags.Tagged' => \Cake\ORM\Association\HasMany::class,
			'Tags.Tags' => \Cake\ORM\Association\HasMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasMany::class,
		])
	);

	override(
		\Cake\ORM\Table::hasOne(0),
		map([
			'Roles' => \Cake\ORM\Association\HasOne::class,
			'Users' => \Cake\ORM\Association\HasOne::class,
			'Captcha.Captchas' => \Cake\ORM\Association\HasOne::class,
			'Data.Addresses' => \Cake\ORM\Association\HasOne::class,
			'Data.Cities' => \Cake\ORM\Association\HasOne::class,
			'Data.Continents' => \Cake\ORM\Association\HasOne::class,
			'Data.Counties' => \Cake\ORM\Association\HasOne::class,
			'Data.Countries' => \Cake\ORM\Association\HasOne::class,
			'Data.Currencies' => \Cake\ORM\Association\HasOne::class,
			'Data.Districts' => \Cake\ORM\Association\HasOne::class,
			'Data.Languages' => \Cake\ORM\Association\HasOne::class,
			'Data.Locations' => \Cake\ORM\Association\HasOne::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\HasOne::class,
			'Data.MimeTypes' => \Cake\ORM\Association\HasOne::class,
			'Data.PostalCodes' => \Cake\ORM\Association\HasOne::class,
			'Data.States' => \Cake\ORM\Association\HasOne::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\HasOne::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasOne::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\HasOne::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\HasOne::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\HasOne::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\HasOne::class,
			'Ratings.Ratings' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.Animals' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.Events' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.HashidCountries' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\HasOne::class,
			'Tags.Tagged' => \Cake\ORM\Association\HasOne::class,
			'Tags.Tags' => \Cake\ORM\Association\HasOne::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasOne::class,
		])
	);

	override(
		\Cake\ORM\TableRegistry::get(0),
		map([
			'Roles' => \App\Model\Table\RolesTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
			'Captcha.Captchas' => \Captcha\Model\Table\CaptchasTable::class,
			'Data.Addresses' => \Data\Model\Table\AddressesTable::class,
			'Data.Cities' => \Data\Model\Table\CitiesTable::class,
			'Data.Continents' => \Data\Model\Table\ContinentsTable::class,
			'Data.Counties' => \Data\Model\Table\CountiesTable::class,
			'Data.Countries' => \Data\Model\Table\CountriesTable::class,
			'Data.Currencies' => \Data\Model\Table\CurrenciesTable::class,
			'Data.Districts' => \Data\Model\Table\DistrictsTable::class,
			'Data.Languages' => \Data\Model\Table\LanguagesTable::class,
			'Data.Locations' => \Data\Model\Table\LocationsTable::class,
			'Data.MimeTypeImages' => \Data\Model\Table\MimeTypeImagesTable::class,
			'Data.MimeTypes' => \Data\Model\Table\MimeTypesTable::class,
			'Data.PostalCodes' => \Data\Model\Table\PostalCodesTable::class,
			'Data.States' => \Data\Model\Table\StatesTable::class,
			'DatabaseLog.DatabaseLogApp' => \DatabaseLog\Model\Table\DatabaseLogAppTable::class,
			'DatabaseLog.DatabaseLogs' => \DatabaseLog\Model\Table\DatabaseLogsTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Feedback.Feedbackstore' => \Feedback\Model\Table\FeedbackstoreTable::class,
			'Geo.GeocodedAddresses' => \Geo\Model\Table\GeocodedAddressesTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'Ratings.Ratings' => \Ratings\Model\Table\RatingsTable::class,
			'Sandbox.Animals' => \Sandbox\Model\Table\AnimalsTable::class,
			'Sandbox.BitmaskRecords' => \Sandbox\Model\Table\BitmaskRecordsTable::class,
			'Sandbox.CountryRecords' => \Sandbox\Model\Table\CountryRecordsTable::class,
			'Sandbox.Events' => \Sandbox\Model\Table\EventsTable::class,
			'Sandbox.ExampleRecords' => \Sandbox\Model\Table\ExampleRecordsTable::class,
			'Sandbox.HashidCountries' => \Sandbox\Model\Table\HashidCountriesTable::class,
			'Sandbox.SandboxCategories' => \Sandbox\Model\Table\SandboxCategoriesTable::class,
			'Sandbox.SandboxPosts' => \Sandbox\Model\Table\SandboxPostsTable::class,
			'Sandbox.SandboxRatings' => \Sandbox\Model\Table\SandboxRatingsTable::class,
			'Sandbox.SandboxUsers' => \Sandbox\Model\Table\SandboxUsersTable::class,
			'Tags.Tagged' => \Tags\Model\Table\TaggedTable::class,
			'Tags.Tags' => \Tags\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
		])
	);

	override(
		\Cake\View\View::element(0),
		map([
			'BootstrapUI.Flash/default' => \Cake\View\View::class,
			'Data.States/search' => \Cake\View\View::class,
			'DatabaseLog.paging' => \Cake\View\View::class,
			'DatabaseLog.search' => \Cake\View\View::class,
			'DebugKit.cache_panel' => \Cake\View\View::class,
			'DebugKit.deprecations_panel' => \Cake\View\View::class,
			'DebugKit.environment_panel' => \Cake\View\View::class,
			'DebugKit.history_panel' => \Cake\View\View::class,
			'DebugKit.include_panel' => \Cake\View\View::class,
			'DebugKit.log_panel' => \Cake\View\View::class,
			'DebugKit.mail_panel' => \Cake\View\View::class,
			'DebugKit.packages_panel' => \Cake\View\View::class,
			'DebugKit.preview_header' => \Cake\View\View::class,
			'DebugKit.request_panel' => \Cake\View\View::class,
			'DebugKit.routes_panel' => \Cake\View\View::class,
			'DebugKit.session_panel' => \Cake\View\View::class,
			'DebugKit.sql_log_panel' => \Cake\View\View::class,
			'DebugKit.timer_panel' => \Cake\View\View::class,
			'DebugKit.variables_panel' => \Cake\View\View::class,
			'Feedback.sidebar' => \Cake\View\View::class,
			'Flash/default' => \Cake\View\View::class,
			'Flash/error' => \Cake\View\View::class,
			'Flash/info' => \Cake\View\View::class,
			'Flash/success' => \Cake\View\View::class,
			'Flash/warning' => \Cake\View\View::class,
			'Queue.search' => \Cake\View\View::class,
			'Sandbox.actions' => \Cake\View\View::class,
			'Sandbox.inflector/result-row' => \Cake\View\View::class,
			'Sandbox.inflector/results' => \Cake\View\View::class,
			'Sandbox.navigation/ajax' => \Cake\View\View::class,
			'Sandbox.navigation/dto' => \Cake\View\View::class,
			'Sandbox.navigation/media_embed' => \Cake\View\View::class,
			'Sandbox.navigation/queue' => \Cake\View\View::class,
			'Sandbox.navigation/search' => \Cake\View\View::class,
			'Sandbox.navigation/tags' => \Cake\View\View::class,
			'Sandbox.navigation/tools' => \Cake\View\View::class,
			'TestHelper.test_cases' => \Cake\View\View::class,
			'TestHelper.url' => \Cake\View\View::class,
			'Tools.pagination' => \Cake\View\View::class,
			'navigation' => \Cake\View\View::class,
			'stats' => \Cake\View\View::class,
		])
	);

	override(
		\Cake\View\View::loadHelper(0),
		map([
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \App\View\Helper\FormHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Rss' => \Cake\View\Helper\RssHelper::class,
			'Session' => \Cake\View\Helper\SessionHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
			'App' => \App\View\Helper\AppHelper::class,
			'Navigation' => \App\View\Helper\NavigationHelper::class,
			'Sandbox' => \App\View\Helper\SandboxHelper::class,
			'AssetCompress.AssetCompress' => \AssetCompress\View\Helper\AssetCompressHelper::class,
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'BootstrapUI.Breadcrumbs' => \BootstrapUI\View\Helper\BreadcrumbsHelper::class,
			'BootstrapUI.Flash' => \BootstrapUI\View\Helper\FlashHelper::class,
			'BootstrapUI.Form' => \BootstrapUI\View\Helper\FormHelper::class,
			'BootstrapUI.Html' => \BootstrapUI\View\Helper\HtmlHelper::class,
			'BootstrapUI.Paginator' => \BootstrapUI\View\Helper\PaginatorHelper::class,
			'CakeDto.Template' => \CakeDto\View\Helper\TemplateHelper::class,
			'Captcha.Captcha' => \Captcha\View\Helper\CaptchaHelper::class,
			'Data.Data' => \Data\View\Helper\DataHelper::class,
			'Data.MimeType' => \Data\View\Helper\MimeTypeHelper::class,
			'DatabaseLog.Log' => \DatabaseLog\View\Helper\LogHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Tidy' => \DebugKit\View\Helper\TidyHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Geo.GoogleMap' => \Geo\View\Helper\GoogleMapHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Queue.QueueProgress' => \Queue\View\Helper\QueueProgressHelper::class,
			'Ratings.Rating' => \Ratings\View\Helper\RatingHelper::class,
			'Sandbox.MediaEmbedBbcode' => \Sandbox\View\Helper\MediaEmbedBbcodeHelper::class,
			'Search.Search' => \Search\View\Helper\SearchHelper::class,
			'Tags.TagCloud' => \Tags\View\Helper\TagCloudHelper::class,
			'Tags.Tag' => \Tags\View\Helper\TagHelper::class,
			'TestHelper.TestHelper' => \TestHelper\View\Helper\TestHelperHelper::class,
			'Tools.Common' => \Tools\View\Helper\CommonHelper::class,
			'Tools.Form' => \Tools\View\Helper\FormHelper::class,
			'Tools.Format' => \Tools\View\Helper\FormatHelper::class,
			'Tools.Gravatar' => \Tools\View\Helper\GravatarHelper::class,
			'Tools.Html' => \Tools\View\Helper\HtmlHelper::class,
			'Tools.Meter' => \Tools\View\Helper\MeterHelper::class,
			'Tools.Number' => \Tools\View\Helper\NumberHelper::class,
			'Tools.Obfuscate' => \Tools\View\Helper\ObfuscateHelper::class,
			'Tools.Progress' => \Tools\View\Helper\ProgressHelper::class,
			'Tools.QrCode' => \Tools\View\Helper\QrCodeHelper::class,
			'Tools.Text' => \Tools\View\Helper\TextHelper::class,
			'Tools.Time' => \Tools\View\Helper\TimeHelper::class,
			'Tools.Timeline' => \Tools\View\Helper\TimelineHelper::class,
			'Tools.Tree' => \Tools\View\Helper\TreeHelper::class,
			'Tools.Typography' => \Tools\View\Helper\TypographyHelper::class,
			'Tools.Url' => \Tools\View\Helper\UrlHelper::class,
		])
	);

}
