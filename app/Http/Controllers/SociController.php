<?php

namespace App\Http\Controllers;

use App\Repositories\MemberRepository;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Inertia\Inertia;




class SociController extends Controller
{

    public function __construct(MemberRepository $repository)
    {
        $this->repository = $repository;
    }





    public function index()
    {
        $members = $this->repository->allMembers();

        return view('pages.members.index', [
            'members' => $members,
        ]);
    }

    public function show($slug)
    {
        $member = $this->repository->forSlug($slug);

        abort_unless($member, 404, "Socio non trovato");

        //redirect to the correct slug if the one in the url is wrong

        if ($member->slug != $slug) {
            return redirect()->route('members.show', $member->slug, 301);
        }
        return view('pages.members.show', [
            'member' => $member,
        ]);
    }
}
