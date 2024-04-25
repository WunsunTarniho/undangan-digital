<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Invited;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Invitation $invitation, Invited $invited)
    {
        static::middleware();

        return view('comment', [
            'title' => 'Respon dari ' . $invited->name,
            'comments' => $invited->comments()->latest()->get(),
            'invited' => $invited,
            'invitation_slug' => $invitation->slug,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Invitation $invitation, Invited $invited)
    {
        $updated = false;
        $newComment = Comment::create([
            'invitation_id' => $invitation->id,
            'invited_id' => $invited->id,
            'content' => $request->content,
        ]);

        if($invited->presence != $request->presence){
            $invited->update(['presence' => $request->presence]);
            $updated = true;
        }
        
        return response()->json([
            'invited_name' => $invited->name,
            'created_at' => $newComment->created_at->diffForHumans(),
            'content' => $request->content,
            'presence' => $request->presence,
            'updated' => $updated,
            'amountPresence' => count($invitation->inviteds->where('presence', 'Akan Hadir')),
            'amountAbsent' => count($invitation->inviteds->where('presence', 'Tidak Hadir')),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(Invitation $invitation, Invited $invited, Comment $comment)
    {
        static::middleware();

        $comment->delete();

        return back()->with('success', 'Response dari ' . $invited->name . ' berhasil dihapus!');
    }

    protected function middleware()
    {
        Gate::allows('admin') || !Gate::allows('guest') ? abort(403) : false;
    }
}
