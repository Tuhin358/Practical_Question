<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\User;
use App\Repository\DashboardRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Exception;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $repository;

    public function __construct(DashboardRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index(Request $request)
    {
        try {

            if ($request->ajax()) {
                $data = Dashboard::query();
                if ($request->startDate && $request->endDate) {
                    $data = $data->whereDate('created_at', '>=', $request->startDate)
                        ->whereDate('created_at', '<=', $request->endDate);
                }
                $data = $data->get();

                return DataTables::of($data)->editColumn('name', function ($row) {
                    return $row->name ?? 'N/A';
                })
                    ->editColumn('email', function ($row) {

                        return $row->email ?? 'N/A';
                    })
                    ->editColumn('image', function ($row) {

                        return $row->image;
                    })->editColumn('gender', function ($row) {

                        return $row->gender ?? 'N/A';
                    })->editColumn('skills', function ($row) {

                        return $row->skills ?? 'N/A';
                    })

                    // ->editColumn('created_at', function ($row) {

                    //     return $row->created_at->format('d-m-Y h:i A');
                    // })
                    // ->addColumn('status', function ($row) {

                    //     if ($row->status == 1) {
                    //         return '<span class="badge bg-success mb-1">' . ($row->status == 0 ? "Inactive" : "Active") . '</span>';
                    //     } else {
                    //         return '<span class="badge bg-danger mb-1">' . ($row->status == 0 ? "Inactive" : "Active") . '</span>';
                    //     }
                    // })
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '';
                        $btn .= '<a href="' . route('data.edit', $row->id) . '" class="btn btn-primary btn-table me-1"><i
                            class="fa fa-edit f-16"></i></a>';

                        $btn .= '<a href="' . route('data.destroy', $row->id) . '" onclick="onDelete(this)" class="btn btn-danger btn-table me-1"><i class="fa fa-trash-o f-16"></i>
                        </a>';
                        return $btn;
                    })
                    ->rawColumns(['action', 'email', 'name', 'gender', 'skills', 'image',])
                    ->make(true);
            }

            $user = Dashboard::get();
            return view('dashboard');
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'skills' => 'required',
            'gender' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $this->repository->store($request->all());

        return back()->withSuccess("Data Create Successfully");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }


    public function edit($id)
    {
        $data['dashboard'] = $this->repository->get($id);
        $data['dashboard']->skills = explode(',', $data['dashboard']->skills);
        return view('backend.edit', $data);
    }


    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'skills' => 'required|array',
            'gender' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        // Process skills to JSON
        $data['skills'] = json_encode($request->input('skills'));

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        $this->repository->update($id, $data);

        return back()->withSuccess("Data Update Successfully");
    }


    // public function update($id, Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'skills' => 'required',
    //         'gender' => 'required',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     $this->repository->update($id, $request->all());
    //     return back()->withSuccess("Data Update Successfully");
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return back();
    }
}
