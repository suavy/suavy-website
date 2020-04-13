<?php

namespace App\Models\Metas;

use App\Traits\IsTranslatable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class Meta extends Model
{
    use CrudTrait;
    use IsTranslatable;

    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */
    protected $fillable = [
        'name_fr',
        'name_pt',
        'name_en',
        'name_es',
        'lft',
        'rgt',
        'depth',
        'parent_id',
    ];
    protected $dates = ['created_at', 'updated_at'];

    /*
    |--------------------------------------------------------------------------
    | _Accessors
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | _Mutators
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | _Scopes
    |--------------------------------------------------------------------------
    */
    public function scopePluckNameId($query)
    {
        return $query->pluck('translated_name', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | _Functions
    |--------------------------------------------------------------------------
    */
    public static function createMetaTable($tableName)
    {
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_fr');
            $table->string('name_en');
            $table->string('name_pt');
            $table->string('name_es');
            //reorder
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('lft')->default(0);
            $table->integer('rgt')->default(0);
            $table->integer('depth')->default(0);

            $table->timestamps();
        });
    }

    public static function forSelect()
    {
        return self::query()->pluckNameId();
    }

    public static function seedMeta(string $name, array $additionalParams = null)
    {
        $params = ['slug' => Str::slug($name), 'name' => $name];
        if (! is_null($additionalParams)) {
            $params = array_merge($params, $additionalParams);
        }

        return self::query()->create($params);
    }
}
