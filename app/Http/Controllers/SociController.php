<?php

namespace App\Http\Controllers;

use App\Repositories\MemberRepository;

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
        $members = $this->repository->allMembers()->map(function ($member) {
            return [
                ...$member->toArray(),
                'logo' => $member->image('logo'),
                'slug' => $member->slug,
            ];
        });

        return Inertia::render('Members/index', [
            'members' => $members,
        ]);
    }

    public function show($slug)
    {
        $member = $this->repository->forSlug($slug);

        $member = [
            ...$member->toArray(),
            'logo' => $member->image('logo'),
            'slug' => $member->slug,
            'carousel' => $member->images('carousel'),

        ];




        abort_unless($member, 404, "Socio non trovato");

        return Inertia::render('Members/show', [
            'member' => $member,
        ]);
    }
}
