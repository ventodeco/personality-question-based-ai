<?php

namespace App\Http\Controllers;

use App\Http\Requests\GraduationStoreRequest;
use App\Repositories\GraduationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GraduationController extends Controller
{
    public function __construct(GraduationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('graduation.index');
    }

    public function eightSemester()
    {
        $userId = Auth::id();

        $graduation = $this->repository->getByUserId($userId);
        $data = [
            'graduation' => $graduation ?? null
        ];

        // dd($data);
        
        return view('graduation.eight-semester', $data);
    }

    public function predict(GraduationStoreRequest $request)
    {
        $validated = $request->validated();

        $validated['prediction'] = 0;
        $validated['user_id'] = Auth::id();


        if (isset($validated['graduation_id'])) {
            $graduation = $this->repository->getById($validated['graduation_id']);
            unset($validated['graduation_id']);
            // dd($validated);
            $graduation = $this->repository->updateAttribute($graduation, $validated);
        } else {
            $graduation = $this->repository->create($validated);
        }

        $data = [
            'graduation' => $graduation
        ];

        return view('graduation.result-prediction', $data);
    }
}
