<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

		<!-- Bootsrap Styles -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!-- Styles -->
		
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" id="fontawesome-css" href="/slider/css/font-awesome/css/font-awesome.css" type="text/css" media="all">
        <link rel="stylesheet" id="prettyPhoto-css" href="/slider/css/prettyPhoto.css" type="text/css" media="all">
        <link rel="stylesheet" id="flexslider-css" href="/slider/css/flexslider.css" type="text/css" media="screen">
        <link rel="stylesheet" id="mainstyle-css" href="/slider/css/style0.css" type="text/css" media="all">

		<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
  transition: 0.3s;
  width: 100%;
  text-align: center;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);
}

.container {
  padding: 2px 16px;
}
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script type="text/javascript"  src="/slider/js/jquery.js"></script>
	<script type="text/javascript"  src="/slider/js/jquery-migrate.min.js"></script>
	<script type="text/javascript"  src="/slider/js/modernizr.custom.79639.js"></script>
	<script type="text/javascript"  src="/slider/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript"  src="/slider/js/all-functions.js"></script>
	<script type="text/javascript"  src="/slider/js/classList.js"></script>
	<script type="text/javascript"  src="/slider/js/bespoke.js"></script>
	<script type="text/javascript"  src="/slider/js/jquery.flexslider.js"></script>
    <!-- START AUDIO SUPPORT ( comment or delete this if you not going to use audio 
    <script  src="/slider/js/audioplayer/script/berniecode-animator.js"></script>
	<script  src="/slider/js/audioplayer/script/soundmanager2.js"></script>
    <script  src="/slider/js/audioplayer/mp3-player-button.js"></script>
    <script  src="/slider/js/audioplayer/script/360player.js"></script>  
	<script>
		soundManager.setup({
			url: 'js/audioplayer/swf',
		});
		threeSixtyPlayer.config.scaleFont = (navigator.userAgent.match(/msie/i)?false:true);
		threeSixtyPlayer.config.showHMSTime = true;
	
		// enable some spectrum stuffs
		
		threeSixtyPlayer.config.useWaveformData = true;
		threeSixtyPlayer.config.useEQData = true;
		
		// enable this in SM2 as well, as needed
		
		if (threeSixtyPlayer.config.useWaveformData) {
		  soundManager.flash9Options.useWaveformData = true;
		}
		if (threeSixtyPlayer.config.useEQData) {
		  soundManager.flash9Options.useEQData = true;
		}
		if (threeSixtyPlayer.config.usePeakData) {
		  soundManager.flash9Options.usePeakData = true;
		}
		
		if (threeSixtyPlayer.config.useWaveformData || threeSixtyPlayer.flash9Options.useEQData || threeSixtyPlayer.flash9Options.usePeakData) {
		  // even if HTML5 supports MP3, prefer flash so the visualization features can be used.
		  soundManager.preferFlash = true;
		}
		
		// favicon is expensive CPU-wise, but can be used.
		if (window.location.href.match(/hifi/i)) {
		  threeSixtyPlayer.config.useFavIcon = true;
		}
		
		if (window.location.href.match(/html5/i)) {
		  // for testing IE 9, etc.
		  soundManager.useHTML5Audio = true;
		}
    </script> -->
    <!-- END AUDIO SUPPORT -->
	<script>
	jQuery(document).ready(function ($) {
		/* LEGEND
			scrollinit(); - default with no additional pages.
			
			scrollinit('carousel', 1, 0, true, true, true, true, true); - custom settings
			
			1. Scroll effect: 'classic', 'cube', 'carousel', 'concave', 'coverflow', 'spiraltop', 'spiralbottom', 'classictilt'.
		 	2. Number of scroll pages. '1' means no additional pages.
			3. Select which slide to be on focus when slider is loaded. '0' means first slide.
			4. Enable / disable keys navigation: true, false.
			5. Enable / disable buttons navigation: true, false.
			6. Enable / disable slide gestures navigation on touch devices: true, false.
			7. Enable / disable click navigation: true, false.
			8. Enable / disable mouse wheel navigation: true, false.
		*/
		
		scrollinit("coverflow", 1, 0, true, true, true, true, true);
	});
	</script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
