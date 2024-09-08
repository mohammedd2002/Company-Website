<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
   protected $imageService; //service

   public function __construct(ImageService $imageService) //service
   {
      $this->imageService = $imageService;
   }
   public function index()
   {
      $members = Member::paginate(config('pagination.count'));
      return view('admin.members.index', get_defined_vars());
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      return view('admin.members.create', get_defined_vars());
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(StoreMemberRequest $request)
   {
      $data = $request->validated();
      $data['image'] = $this->imageService->membersImage($request);
      Member::create($data);
      return to_route('admin.member.index')->with('success', __('keywords.created_successfully'));
   }

   /**
    * Display the specified resource.
    */
   public function show(Member $member)
   {
      return view('admin.members.show', get_defined_vars());
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Member $member)
   {
      return view('admin.members.edit', get_defined_vars());
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(UpdateMemberRequest $request, Member $member)
   {
      $data = $request->validated();
      if ($request->hasFile('image')) {
         Storage::delete("public/members/$member->image");
         $data['image'] = $this->imageService->membersImage($request);
      }
      $member->update($data);
      return to_route('admin.member.index')->with('success', __('keywords.updated_successfully'));
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Member $member)
   {
      Storage::delete("public/members/$member->image");
      $member->delete();
      return to_route('admin.member.index')->with('success', __('keywords.deleted_successfully'));
   }
}
