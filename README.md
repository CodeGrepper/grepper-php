# Grepper PHP client

The Grepper PHP library provides convenient access to the Grepper API from
applications written in the PHP language.  

## Requirements

PHP 5.6.0 and later.

## Composer

You can install the php client via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require grepper/grepper-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once 'vendor/autoload.php';
```

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/grepper/grepper-php/releases). Then, to use the php client, include the `init.php` file.

```php
require_once '/path/to/grepper-php/init.php';
```

## Dependencies

The bindings require the following extensions in order to work properly:

-   [`curl`](https://secure.php.net/manual/en/book.curl.php), although you can use your own non-cURL client if you prefer
-   [`json`](https://secure.php.net/manual/en/book.json.php)

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

## Getting Started

Simple usage looks like:

```php
$grepper = new \Grepper\GrepperClient('your_api_key_here');
$answers = $grepper->answers->search([
    'query' => 'javascript loop array backwords'
]);
print_r($answers);
```
## Documentation

See the [PHP API docs](https://grepper.com/docs/api/?lang=php#intro).

## Custom Request Timeouts
To modify request timeouts (connect or total, in seconds) you'll need to tell the API client to use a CurlClient other than its default. You'll set the timeouts in that CurlClient.

```php
// set up your tweaked Curl client
$curl = new \Grepper\HttpClient\CurlClient();
$curl->setTimeout(10); // default is \Grepper\HttpClient\CurlClient::DEFAULT_TIMEOUT
$curl->setConnectTimeout(5); // default is \Grepper\HttpClient\CurlClient::DEFAULT_CONNECT_TIMEOUT

echo $curl->getTimeout(); // 10
echo $curl->getConnectTimeout(); // 5

// tell Grepper to use the tweaked client
\Grepper\ApiRequestor::setHttpClient($curl);

// use the Grepper API client as you normally would
```

## Custom cURL Options (e.g. proxies)

Need to set a proxy for your requests? Pass in the requisite `CURLOPT_*` array to the CurlClient constructor, using the same syntax as `curl_stopt_array()`. This will set the default cURL options for each HTTP request made by the SDK, though many more common options (e.g. timeouts; see above on how to set those) will be overridden by the client even if set here.

```php
// set up your tweaked Curl client
$curl = new \Grepper\HttpClient\CurlClient([CURLOPT_PROXY => 'proxy.local:80']);
// tell Grepper to use the tweaked client
\Grepper\ApiRequestor::setHttpClient($curl);
```

Alternately, a callable can be passed to the CurlClient constructor that returns the above array based on request inputs. See `testDefaultOptions()` in `tests/CurlClientTest.php` for an example of this behavior. Note that the callable is called at the beginning of every API request, before the request is sent.

### Configuring a Logger

The library does minimal logging, but it can be configured
with a [`PSR-3` compatible logger][psr3] so that messages
end up there instead of `error_log`:

```php
\Grepper\Grepper::setLogger($logger);
```

### Accessing response data

You can access the data from the last API response on any object via `getLastResponse()`.

```php
$answers = $grepper->answers->search([
    'query' => 'js loop',
]);
echo $answers->getLastResponse()->headers['Request-Id'];
```

### Configuring CA Bundles

By default, the library will use its own internal bundle of known CA
certificates, but it's possible to configure your own:

```php
\Grepper\Grepper::setCABundlePath("path/to/ca/bundle");
```

### Configuring Automatic Retries

The library can be configured to automatically retry requests that fail due to
an intermittent network problem:

```php
\Grepper\Grepper::setMaxNetworkRetries(2);
```
