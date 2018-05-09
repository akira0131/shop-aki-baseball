<?php

namespace App\Http\Forms\Category;

use App\Models\Category;
use App\Forms\FormGroup;
use App\Events\CategoryEvent;

use Illuminate\View\View;

/**
 * 共通定義
 *
 */
class CategoryFormGroup extends FormGroup
{
    /**
     * @var
     */
    public $event = CategoryEvent::class;

    /**
     * @var
     */
    protected $categoryBehavior;

    /**
     * 値を設定
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            // コンテンツタイトル
            'name'        => trans('dashboard::systems/category.title'),
            
            // コンテンツ説明文
            'description' => trans('dashboard::systems/category.description'),
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main(): View
    {
        $behavior = config('platform.common.category');
        $behavior = new $behavior;

        // ビューテンプレートへのパス
        return view('dashboard.systems.category.index', [
            'category' => Category::filtersApply($behavior->filters())->where('parent_id', 0)->with('allChildrenTerm')->paginate(),
            'behavior' => $behavior,
            'filters'  => collect($behavior->filters()),
            'chunk'    => $behavior->chunk,
        ]);
    }
}
