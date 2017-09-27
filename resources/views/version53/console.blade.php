@extends('layouts.app')

@section('content')
	<pre>
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }	
	</pre>
@endsection
