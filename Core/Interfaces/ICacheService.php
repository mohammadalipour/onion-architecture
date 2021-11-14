<?php


namespace Core\Interfaces;


interface ICacheService
{
    public function has(string $key):bool;

    public function get(string $key);

    public function put(string $key,$value,int $ttl):bool;

    public function remember(string $key,int $ttl,\Closure $closure);
}
