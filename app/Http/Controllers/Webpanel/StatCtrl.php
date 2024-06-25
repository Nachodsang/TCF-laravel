<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\EmailContactMd;
use App\Models\VisitorLogMd;
use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class StatCtrl extends Controller
{
    public function index(request $request)
    {

        $date = $request->date;
        $date = explode('-', $date);
        $startDate = Carbon::create(2024, 1, 1);
        $endDate = Carbon::now();

        if ($request->date) {
            $startDate = Carbon::create($date[0]);
            $endDate = Carbon::create($date[1]);
        }


        try {
            // $test = Analytics::get(Period::months(6), ['activeUsers', 'newUsers'], ['country', 'date'], 100, [], 0, null, false);
            $test = Analytics::get(Period::create($startDate, $endDate), ['activeUsers', 'newUsers'], ['country'], 100, [], 0, null, false);
            $visit = Analytics::get(Period::create($startDate, $endDate), ['activeUsers'], [], 100, [], 0, null, false)[0]['activeUsers'];
            $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::create($startDate, $endDate), 50, 0);
            // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
            $visitorAmount =  VisitorLogMd::when($request->date, function ($query) use ($date) {
                $query->whereDate('created_at', '>=', $date[0])
                    ->whereDate('created_at', '<=', $date[1]);
            })->count();

            $visitorLogs = VisitorLogMd::selectRaw('city, country, COUNT(*) as count')
                ->when($request->date, function ($query) use ($date) {
                    $query->whereDate('created_at', '>=', $date[0])
                        ->whereDate('created_at', '<=', $date[1]);
                })
                ->groupBy('city')
                ->orderBy('count', 'desc')
                ->orderBy('country')
                ->get();

            $emailAmount = EmailContactMd::when($request->date, function ($query) use ($date) {
                $query->whereDate('created_at', '>=', $date[0])
                    ->whereDate('created_at', '<=', $date[1]);
            })->withTrashed()->count();

            return view('webpanel.stat.index', [
                'emailAmount' => $emailAmount,
                'module' => 'stat',
                'page' => 'page-index',
                'visitorAmount' => $visitorAmount,
                'visitorLogs' => $visitorLogs,
                'analyticsData' => $analyticsData,
                'test' => $visit,
                'gaVisit' => $visit

            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
