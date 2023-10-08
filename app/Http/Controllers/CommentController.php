<?php



// Store a new comment
function store(Request $request)
{
    $comment = new Comment();
    $comment->user_id = auth()->user()->id; // Assuming you have authentication
    $comment->content_id = $request->input('content_id');
    $comment->content_type = $request->input('content_type');
    $comment->body = $request->input('body');
    $comment->save();

    return redirect()->back()->with('success', 'Comment added successfully');
}

// List comments for a specific content
function index($contentId)
{
    $comments = Comment::where('content_id', $contentId)->get();
    return view('comments.index', compact('comments'));
}

// Delete a comment
function destroy($id)
{
    $comment = Comment::find($id);

    if (!$comment) {
        abort(404);
    }

    $comment->delete();

    return redirect()->back()->with('success', 'Comment deleted successfully');
}
