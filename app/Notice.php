<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'provider_id',
        'title',
        'description',
        'template',
        'content_removed',
    ];
    public static function open(array $attributes)
    {
        return new static($attributes);
    }

    public function useTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

}
