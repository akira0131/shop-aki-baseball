<?php

namespace App\Http\Controllers\Posts;

use App\Models\Page;
use App\Facades\Alert;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * @var
     */
    public $locales;

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->checkPermission('dashboard.posts');
        $this->locales = collect(config('platform.locales'));
    }

    /**
     * @param Page $page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function show(Page $page = null)
    {
        $this->checkPermission('dashboard.pages.type.'.$page->slug);

        return view('dashboard::container.posts.page', [
            'type'    => $page->getBehaviorObject($page->slug),
            'locales' => $this->locales,
            'post'    => $page,
        ]);
    }

    /**
     * @param Page    $page
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function update(Page $page, Request $request)
    {
        $this->checkPermission('dashboard.pages.type.'.$page->slug);
        $type = $page->getBehaviorObject($page->slug);

        $page->fill($request->all());

        $page->fill([
            'user_id'    => Auth::user()->id,
            'type'       => 'page',
            'slug'       => $page->slug,
            'status'     => 'publish',
            'options'    => $page->getOptions(),
            'publish_at' => Carbon::now(),
        ]);

        $page->save();

        foreach ($type->getModules() as $module) {
            $module = new $module();
            $module->save($type, $page);
        }

        Alert::success(trans('dashboard::common.alert.success'));

        return back();
    }
}
