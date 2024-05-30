<?php

namespace App\Repository;

use App\Models\Dashboard;

class DashboardRepository implements DashboardRepositoryInterface
{
    // public function all()
    // {
    //     return Dashboard::get();
    // }
    public function store(array $data)
    {
        if (isset($data['skills']) && is_array($data['skills'])) {
            $data['skills'] = implode(',', $data['skills']);
        }
        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $data['image'] = $data['image']->store('images', 'public');
        }
        return Dashboard::create($data);
    }
    public function get($id)
    {
        return Dashboard::find($id);
    }
    public function update($id, array $data)
    {
        return Dashboard::find($id)->update($data);
    }
    public function delete($id)
    {
        // return Dashboard::destroy($id);
        $data = Dashboard::find($id);
        if ($data) {
            $data->delete();
        }
    }
}
