<?php

namespace App\Http\Controllers;


function upvote($id)
{
    $feedback = Feedback::find($id);

    if (!$feedback) {
        abort(404);
    }

    $feedback->increment('upvotes');
    return redirect()->back();
}

// Downvote a feedback submission
function downvote($id)
{
    $feedback = Feedback::find($id);

    if (!$feedback) {
        abort(404);
    }

    $feedback->increment('downvotes');
    return redirect()->back();
}
function showForm()
{
    return view('feedback.form');
}



