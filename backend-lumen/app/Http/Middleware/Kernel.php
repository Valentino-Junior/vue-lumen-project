protected $middleware = [
    // ... other middleware

    App\Http\Middleware\CorsMiddleware::class,
    
    \Illuminate\Cookie\Middleware\EncryptCookies::class,
    \Illuminate\Session\Middleware\StartSession::class,
    // ... other middleware
];
