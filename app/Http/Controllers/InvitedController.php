<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Invited;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class InvitedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Invitation $invitation)
    {
        if (!Gate::allows('author', $invitation)) {
            return abort(403);
        }

        return view('invited', [
            'title' => $invitation->name,
            'invitation_slug' => $invitation->slug,
            'inviteds' => Invited::OrderBy('name')->paginate(8),
            'presence' => count(Invited::where('presence', 'Akan Hadir')->get()),
            'absent' => count(Invited::where('presence', 'Tidak Hadir')->get()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Invitation $invitation)
    {
        static::middleware();
        return view('create.invited', [
            'title' => 'Tambah Tamu',
            'invitation' => $invitation,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Invitation $invitation)
    {
        static::middleware();
        $validated = $request->validate([
            'name.0' => 'required_without_all:name.1,name.2,name.3,name.4,name.5,name.6,name.7,name.8,name.9,name.10',
            'name.1' => 'required_without_all:name.0,name.2,name.3,name.4,name.5,name.6,name.7,name.8,name.9,name.10',
            'name.2' => 'required_without_all:name.0,name.1,name.3,name.4,name.5,name.6,name.7,name.8,name.9,name.10',
            'name.3' => 'required_without_all:name.0,name.1,name.2,name.4,name.5,name.6,name.7,name.8,name.9,name.10',
            'name.4' => 'required_without_all:name.0,name.1,name.2,name.3,name.5,name.6,name.7,name.8,name.9,name.10',
            'name.5' => 'required_without_all:name.0,name.1,name.2,name.3,name.4,name.6,name.7,name.8,name.9,name.10',
            'name.6' => 'required_without_all:name.0,name.1,name.2,name.3,name.4,name.5,name.7,name.8,name.9,name.10',
            'name.7' => 'required_without_all:name.0,name.1,name.2,name.3,name.4,name.5,name.6,name.8,name.9,name.10',
            'name.8' => 'required_without_all:name.0,name.1,name.2,name.3,name.4,name.5,name.6,name.7,name.9,name.10',
            'name.9' => 'required_without_all:name.0,name.1,name.2,name.3,name.4,name.5,name.6,name.7,name.8,name.10',
            'name.10' => 'required_without_all:name.0,name.1,name.2,name.3,name.4,name.5,name.6,name.7,name.8,name.9',
        ], [
            'name.*' => 'Minimal salah satu diisi!'
        ]);

        $request = array_filter($validated['name']);
        foreach ($request as $data) {
            Invited::create([
                'invitation_id' => $invitation->id,
                'name' => $data,
                'url' => Str::random(40),
            ]);
        }

        return redirect("/invitation/$invitation->slug/invited")->with('success', 'Tamu baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invitation $invitation, Invited $invited)
    {
        return view("invitation-card.$invitation->slug", [
            'title' => $invitation->name,
            'invitation' => $invitation,
            'invited' => $invited,
            'comments' => $invitation->comments()->with('invited')->latest()->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id, Invited $invited)
    {
        static::middleware();
        $invited->comments()->delete();
        $invited->delete();
        return back()->with('success', 'Tamu berhasil dihapus!');
    }

    protected function middleware()
    {
        Gate::allows('admin') || !Gate::allows('guest') ? abort(403) : false;
    }
}
