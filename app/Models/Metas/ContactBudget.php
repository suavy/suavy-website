<?php

namespace App\Models\Metas;

use Illuminate\Http\Request;

class ContactBudget extends Meta
{
    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */
    protected $table = 'contact_budgets';

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

    /*
    |--------------------------------------------------------------------------
    | _Functions
    |--------------------------------------------------------------------------
    */
    public static function forSelect(array $ids = [])
    {
        return self::query()->whereVerified(true)->orWhereIn('id', $ids)->orderBy('name')->pluckNameId();
    }

    public static function seedNewSkillWithRequest(Request $request)
    {
        $inputSkills = $request->input('skills', []);
        $skills = Skill::query()->whereIn('id', $inputSkills)->pluck('id');
        //get only skill to seed
        foreach ($inputSkills as $key => $skill) {
            if ($skills->contains($skill)) {
                unset($inputSkills[$key]);
            }
        }
        //seed new skill
        foreach ($inputSkills as $skill) {
            $newSkill = Skill::seedMeta($skill);
            $skills->add($newSkill->id);
        }

        return $skills;
    }
}
