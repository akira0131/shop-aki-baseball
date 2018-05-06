<?php

namespace App\Http\Forms\Systems\Users;

use App\Models\User;
use App\Forms\FormGroup;
use App\Events\Systems\UserEvent;
use Illuminate\Contracts\View\View;

class UserFormGroup extends FormGroup
{
    /**
     * @var
     */
    public $event = UserEvent::class;

    /**
     * Description Attributes for group.
     *
     * @return array
     */
    public function attributes() : array
    {
        return [
            'name'        => trans('dashboard::systems/users.title'),
            'description' => trans('dashboard::systems/users.description'),
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|View|\Illuminate\View\View
     */
    public function main() : View
    {
        $behavior = config('platform.common.user');
        $behavior = new $behavior;

        return view('dashboard::container.systems.users.grid', [
            'users'    => User::filtersApply($behavior->filters())->paginate(),
            'behavior' => $behavior,
            'filters'  => collect($behavior->filters()),
            'chunk'    => $behavior->chunk,
        ]);
    }
}
