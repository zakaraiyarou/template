<?php

if (!function_exists('base_path')) {
  function base_path($path = '')
  {
    return  __DIR__ . "/../{$path}";
  }
}

if (!function_exists('storage_path')) {
  function storage_path($path)
  {
    return base_path('storage') . "/$path";
  }
}

if (!function_exists('app_path')) {
  function app_path($path)
  {
    return base_path('app') . "/$path";
  }
}
