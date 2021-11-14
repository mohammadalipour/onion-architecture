<?php


namespace Infrastructure\Cache;


use Core\Interfaces\ICacheService;
use Illuminate\Support\Facades\Cache;

class ICacheService implements ICacheService
{

    public function has(string $key):bool
    {
        return Cache::has('key');
    }

    public function get(string $key)
    {
        return Cache::get('key');
    }

    public function put(string $key,$value,int $ttl):bool
    {
        return Cache::put('key',$value,$ttl);
    }

    public function remember(string $key, int $ttl, \Closure $closure)
    {
        return Cache::remember($key, $ttl, function () use ($closure) {
            return $closure;
        });
    }
}
