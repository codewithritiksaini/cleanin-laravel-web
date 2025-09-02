<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    /**
     * Increment view count for blog or service
     */
    protected function incrementView($type, $id)
    {
        $sessionKey = $type . '_' . $id;

        if (!session()->has($sessionKey)) {
            session()->put($sessionKey, true);

            if ($type === 'service') {
                DB::table('views')->updateOrInsert(
                    ['service_id' => $id],
                    ['count' => DB::raw('IFNULL(count,0) + 1'), 'updated_at' => now()]
                );
            } elseif ($type === 'blog') {
                DB::table('views')->updateOrInsert(
                    ['blog_id' => $id],
                    ['count' => DB::raw('IFNULL(count,0) + 1'), 'updated_at' => now()]
                );
            }
        }
    }

    /**
     * Reusable search filter function
     */
    protected function applySearchFilter($query, Request $request, array $fields = [])
    {
        if ($request->filled('q') && count($fields) > 0) {
            $keyword = $request->q;
            $query->where(function ($q) use ($fields, $keyword) {
                foreach ($fields as $field) {
                    $q->orWhere($field, 'like', "%{$keyword}%");
                }
            });
        }
        return $query;
    }
}
