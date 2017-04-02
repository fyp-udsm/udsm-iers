<?php

namespace Illuminate\Contracts\Routing;

interface UrlGenerator
{
    /**
     * Generate a absolute URL to the given path.
     *
     * @param  string $path
     * @param  mixed $extra
     * @param  bool $secure
     * @return string
     */
    public function to($path, $extra = [], $secure = null);

    /**
     * Generate a secure, absolute URL to the given path.
     *
     * @param  string $path
     * @param  array $parameters
     * @return string
     */
    public function secure($path, $parameters = []);

    /**
     * Generate a URL to an application asset.
     *
     * @param  string $path
     * @param  bool $secure
     * @return string
     */
    public function asset($path, $secure = null);

    /**
     * Get the URL to a named route.
     *
     * @param  string $name
     * @param  mixed $parameters
     * @param  bool $absolute
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function route($name, $parameters = [], $absolute = true);

    /**
     * Get the URL to a controller action.
     *
     * @param  string $action
     * @param  mixed $parameters
     * @param  bool $absolute
     * @return string
     */
    public function action($action, $parameters = [], $absolute = true);

    /**
     * Set the root controller namespace.
     *
     * @param  string $rootNamespace
     * @return $this
     */
    public function setRootControllerNamespace($rootNamespace);
}