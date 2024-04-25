<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Invitation;
use App\Models\Invited;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TypeInvitation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Can;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        !Gate::allows('guest') ?  abort(403) : false;

        if(!Gate::allows('admin')){
            return view('invitations', [
                'title' => 'Kartu Undangan Saya',
                'invitations' => User::find(Auth::id())->invitations()->paginate(5),
            ]);
        }

        return view('invitations', [
            'title' => 'Semua Kartu Undangan',
            'invitations' => Invitation::OrderBy('name')->with(['user' ,'category'])->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::allows('user') ? abort(403) : false;

        return view('create.invitation', [
            'title' => 'Buat Undangan',
            'users' => User::where('level', 'User')->orderBy('name')->get(),
            'categories' => Category::OrderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::allows('user') ? abort(403) : false;

        $validated = $request->validate([
            'name' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'event_time' => 'required',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        Invitation::create($validated);

        file_put_contents(resource_path('views/invitation-card/'. $validated['slug'] .'.blade.php'), '');

        return redirect('/invitation')->with('success', 'Undangan baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invitation $invitation)
    {
        !Gate::allows('guest') ?  abort(403) : false;

        return view("invitation-card.$invitation->slug", [
            'title' => $invitation->name,
            'invitation' => $invitation,
            'invited' => null,
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
    public function destroy(Invitation $invitation)
    {
        Gate::allows('user') ? abort(403) : false;
        $invitation->delete();
        unlink(resource_path('views/invitation-card/'. $invitation->slug .'.blade.php'));
        return back()->with('success', 'Undangan berhasil dihapus!');
    }
}
