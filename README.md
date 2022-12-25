# Bagisto Razorpay Payment Gateway
Razorpay is a popular payment gateway in India. This package provides a additional strong help for the user to use the Razorpay payment gateway in their Bagisto laravel ecommerce application.

### Extension to Integrate Razorpay payment gateway with bagisto laravel ecommerce.

<img src="https://razorpay.com/assets/razorpay-logo.svg" width="200" height="100" style="background: #fff; padding: 10px;"> <img src="https://laravel.com/img/logomark.min.svg" width="200" height="100"> <img src="https://devdocs.bagisto.com/logo.png?__WB_REVISION__=7623b31ea8912e775aa903f3da491179"  height="100"> 

## Automatic Installation
1. Use command prompt to run this package `composer require vian-technologies/bagisto-razorpay`
5. Now open the command prompt and run `composer dump-autoload`.
6. Now run `php artisan config:cache`
7. Now go to your bagisto admin section `admin/configuration/sales/paymentmethods` you will see the new payment gateway razorpay. 
8. Now open `app\Http\Middleware\VerifyCsrfToken.php` and add this route to the exception list.
```sh
protected $except = [
    '/razorpaycheck',
];

```

For any help or customisation email us <viantechnologies1@gmail.com>
