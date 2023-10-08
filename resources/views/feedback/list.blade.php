@extends('layouts.app') <!-- Use your layout as needed -->

@section('content')
<div class="container">
    <h1>Feedback Submissions</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbackList as $feedback)
                <tr>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@foreach ($feedbackList as $feedback)
    <tr>
        <td>{{ $feedback->name }}</td>
        <td>{{ $feedback->email }}</td>
        <td>{{ $feedback->message }}</td>
        <td>
            <form action="{{ route('feedback.upvote', $feedback->id) }}" method="POST">
                @csrf
                <button type="submit">Upvote ({{ $feedback->upvotes }})</button>
            </form>
        </td>
        <td>
            <form action="{{ route('feedback.downvote', $feedback->id) }}" method="POST">
                @csrf
                <button type="submit">Downvote ({{ $feedback->downvotes }})</button>
            </form>
        </td>
    </tr>
@endforeach
