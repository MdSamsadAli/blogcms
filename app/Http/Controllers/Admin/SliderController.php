<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use App\Services\SliderService;


class SliderController extends Controller
{

    protected $slider;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }

    public function index()
    {
        return $this->sliderService->all();
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request)
    {
        return $this->sliderService->createSlider($request);
    }

    public function edit($id)
    {
        return $this->sliderService->get($id);
    }

    public function update(SliderFormRequest $request, $id)
    {
        return $this->sliderService->updateSlider($request, $id);
    }

    public function destroy($id)
    {
        return $this->sliderService->delete($id);
    }
}
