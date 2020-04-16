<?php

namespace Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Builder;

/**
 * @template T
 */
class Model
{
    /** @var bool */
    public $timestamps;

    /** @var string */
    protected $connection;

    /** @var string */
    protected $table;

    /** @var array<string, string> */
    protected $casts;

    /** @var list<string> */
    protected $fillable;

    /** @var null|string */
    protected $dateFormat;

    public function __isset(string $name): void {}

    /** @return mixed */
    public function __get(string $name) {}
    /** @param mixed $value */
    public function __set(string $name, $value): void {}

    /**
     * @psalm-return T
     */
    public static function whereId() {}

    /**
     * @psalm-return T
     */
    public static function newModelQuery() {}

    /**
     * @psalm-return T
     */
    public static function newQuery() {}

    /**
     * @psalm-return T
     */
    public static function query() {}

    /**
     * @param string[] $columns
     * @psalm-return Collection<T>
     */
    public function all($columns = ['*']) {}

    /**
     * @param string[] $columns
     * @psalm-return Collection<T>
     */
    public function get($columns = ['*']) {}

    /**
     * @param $id
     * @param string[] $columns
     * @psalm-return T
     */
    public function find($id, $columns = ['*']) {}

    /**
     * @param $id
     * @param string[] $columns
     * @psalm-return Collection<T>
     */
    public function findOrFail($id, $columns = ['*']) {}

    /**
     * @param string|array $relations
     * @psalm-return Collection<T>
     */
    public function with($relations) {}

    /**
     * @param mixed  $relations
     * @param string $direction
     * @psalm-return Collection<T>
     */
    public function orderBy($column, $direction = 'asc') {}
}