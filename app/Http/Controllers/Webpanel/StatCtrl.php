<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\EmailContactMd;
use App\Models\VisitorLogMd;
use Illuminate\Http\Request;

class StatCtrl extends Controller
{
    public function index(request $request)
    {

        $date = $request->date;
        $date = explode('-', $date);
        try {
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

            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
