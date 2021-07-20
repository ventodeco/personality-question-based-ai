<?php 

namespace App\Repositories;

use App\Graduation;

class GraduationRepository
{
    public function create(array $data)
    {
        $graduation = new Graduation;
        $graduation->user_id = $data['user_id'];
        $graduation->semester_1 = $data['semester_1'];
        $graduation->semester_2 = $data['semester_2'];
        $graduation->semester_3 = $data['semester_3'];
        $graduation->semester_4 = $data['semester_4'];
        $graduation->semester_5 = $data['semester_5'] ?? null;
        $graduation->semester_6 = $data['semester_6'] ?? null;
        $graduation->semester_7 = $data['semester_7'] ?? null;
        $graduation->semester_8 = $data['semester_8'] ?? null;
        $graduation->type       = $data['type'];

        // can be deleted if model deployed
        $graduation->prediction = $data['prediction'];

        $graduation->save();

        return $graduation;
    }

    public function getById(int $id)
    {
        return Graduation::find($id);
    }

    public function getByUserId(int $id)
    {
        return Graduation::where('user_id', $id)->get()->last();
    }

    public function updateAttribute(Graduation $graduation, array $data)
    {
        // dd($data);
        foreach($data as $key => $value) {
            // dd($key, $value);
            $graduation->{$key} = $value;
        }
        $graduation->save();

        return $graduation;
    }
}