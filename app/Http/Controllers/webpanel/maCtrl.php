<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\MaIndustryMd;
use App\Models\MaProductMd;
use App\Models\TaskMd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class maCtrl extends Controller
{
    public function index()
    {
        try {
            return view("webpanel.ma.index", [
                'page' => 'page-index',
                'module' => 'ma',
            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function add()
    {
        try {
            $industry = MaIndustryMd::all();
            return view('webpanel.ma.index', [
                'module' => 'ma',
                'page' => 'add',
                'industry' => $industry
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            if ($request->type == 'industry') {
                foreach ($request->name as $key => $name) {
                    $filter = new MaIndustryMd;
                    $filter->name = $name;
                    $filter->icon = $request->icon[$key];
                    $filter->sort = $filter->max('sort') + 1;
                    $filter->save();
                }
            } else {
                foreach ($request->name as $key => $name) {
                    $filter = new MaProductMd;
                    $filter->industry_id = $request->industry;
                    $filter->name = $name;
                    $filter->sort = $filter->where(['industry_id' => $request->industry])->max('sort') + 1;
                    $filter->save();
                }
            }
            $log = new TaskMd;
            $log->action = "add-filter-$request->type-$filter->id";
            $log->module = "filter";
            $log->action_by = Auth::user()->id;
            $log->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function show(string $type, int $id)
    {
        try {
            switch ($type) {
                case 'industry':
                    $data = MaIndustryMd::find($id);
                    break;

                case 'product':
                    $data = MaProductMd::find($id);
                    break;
            }
            return view('webpanel.ma.index', [
                'module' => 'ma',
                'page' => 'edit',
                'type' => $type,
                'data' => $data,
                'industry' => MaIndustryMd::all()
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request)
    {
        try {
            switch ($request->type) {
                case 'industry':
                    $update = MaIndustryMd::find($request->id);
                    $update->icon = $request->icon;
                    break;
                case 'product':
                    $update = MaProductMd::find($request->id);
                    $update->name = $request->name;
                    break;
            }
            $update->name = $request->name;
            if ($update->save()) {
                $log = new TaskMd;
                $log->action = "updated-filter-$request->type-$request->id";
                $log->module = "filter";
                $log->action_by = Auth::user()->id;
                $log->save();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Filter has been Updated'
                ]);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(string $type, int $id)
    {
        try {
            switch ($type) {
                case 'industry':
                    MaIndustryMd::find($id)->delete();
                    MaProductMd::where('industry_id', $id)->delete();
                    break;
                case 'product':
                    MaProductMd::find($id)->delete();
                    break;
            }
            $log = new TaskMd;
            $log->action = "delete-filter-$type-$id";
            $log->module = "filter";
            $log->action_by = Auth::user()->id;
            $log->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function status(Request $request)
    {
        $filter = MaIndustryMd::find($request->id);
        $log = new TaskMd;
        if ($filter->status == 0) {
            $filter->update(['status' => '1']);
            $log->action = "online-filter-$request->id";
            $log->module = "filter";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        } else {
            $filter->update(['status' => '0']);
            $log->action = "offline-filter-$request->id";
            $log->module = "filter";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        }
    }
}
