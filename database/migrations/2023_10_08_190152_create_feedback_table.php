<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    
    
    /**
     * Run the migrations.
     *
     * @return void
     */
   // Show the list of feedback submissions
public function list()
{
    $feedbackList = Feedback::all(); // Assuming Feedback is your model
    return view('feedback.list', compact('feedbackList'));
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
