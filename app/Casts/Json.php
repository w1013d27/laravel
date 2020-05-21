<?php
namespace App\Casts;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Json implements CastsAttributes
{


    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return mixed|void
     */
    public function get($model, string $key, $value, array $attributes)
    {
        // TODO: Implement get() method.
        return json_decode($value,true);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return array|void
     */
    public function set($model, string $key, $value, array $attributes)
    {
        // TODO: Implement set() method.
       json_encode($value);
    }
}
