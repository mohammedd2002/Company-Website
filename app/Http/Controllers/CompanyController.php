<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Services\ImageService;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{

    protected $imageService; //service
    

    public function __construct(ImageService $imageService) //service
    {
        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(config('pagination.count'));
        return view('admin.companies.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->imageService->companiesImage($request);
        Company::create($data);
        return to_route('admin.company.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            Storage::delete("public/companies/$company->image");
            $data['image'] = $this->imageService->companiesImage($request);
        }
        $company->update($data);
        return to_route('admin.company.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        Storage::delete("public/companies/$company->image");
        $company->delete();
        return to_route('admin.company.index')->with('success', __('keywords.deleted_successfully'));
    }
}
