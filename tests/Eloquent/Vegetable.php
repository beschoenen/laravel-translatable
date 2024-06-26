<?php

namespace Tests\Eloquent;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Vegetable extends Eloquent implements TranslatableContract
{
    use Translatable;

    public $translationForeignKey = 'vegetable_identity';

    public $translatedAttributes = ['name'];

    public $localeKey;

    public $translationModel;

    protected $primaryKey = 'identity';

    protected $fillable = ['quantity'];
}
