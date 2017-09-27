@extends('layouts.app')

@section('content')
	<h2>Laravel Mailable</h2>
	<ul>
		<li>php artisan make:mail TestMail</li>
		<li><pre>public function build()
{
    return $this->from('hello@app.com', 'Your Application')
        ->subject('Your Reminder!')
        ->view('emails.reminder');
}
		</pre></li>
		<li>
			<pre>
Mail::to($user)->send(new TestMail($event));

class TestMail extends Mailable
{
    public $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    public function build()
    {
        return $this->from('hello@app.com', 'Your Application')
            ->subject('Event Reminder: ' . $this->event->name)
            ->view('emails.reminder');
    }
}
			</pre>
		</li>
		<li> More: https://mattstauffer.com/blog/introducing-mailables-in-laravel-5-3/</li>
	</ul>
@endsection
