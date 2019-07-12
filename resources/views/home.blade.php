<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#b92768">

    <title>Adrian Bavister's Sites</title>
    <meta name="description" content="This page serves as a handy reference to the Bavanco online portfolio. The objective is to list all public domains and sub-domains.">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
</head>

<body>

    <div class="row">
        <div class="small-12 columns">
            <h1 id="title">Adrian Bavister's Sites</h1>
            <h4 class="subheader">This page serves as a handy reference to all of my currently active websites. The objective is to list all public domains and sub-domains.</h4>
            <hr />
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">

            <h3>Domains:</h3>
            <p>The main web site for each of the domains I administer. Sites for myself, my friends and my family.</p>

            <ul class="sites small-block-grid-1 medium-block-grid-2 large-block-grid-3">
            @foreach ($domains as $domain)
                <li>
                    <a href="{{ $domain['url'] }}" target="_blank" title="{{ $domain['name'] }}">
                        <img src="{{ "/img/banners/{$domain['short_name']}.jpg" }}" alt="{{ $domain['name'] }}">
                        <div class="panel callout">
                            <h5>{{ $domain['name'] }}</h5>
                            <p><span class="{{ "icon icon-{$domain['short_name']}" }}">{{ $domain['url'] }}</span></p>
                        </div>
                    </a>
                </li>
            @endforeach
            </ul>

            <hr />

            <h3>Microsites:</h3>
            <p>A collection of microsites; Small websites, typically a side project or quick favour for a friend.</p>

            <ul class="sites small-block-grid-1 medium-block-grid-2 large-block-grid-3">
            @foreach ($micro_sites as $domain)
                <li>
                    <a href="{{ "https://microsites.adrianbavister.com{$domain['url']}" }}" target="_blank" title="{{ $domain['name'] }}">
                        <img src="{{ "/img/banners/{$domain['short_name']}.jpg" }}" alt="{{ $domain['name'] }}">
                        <div class="panel callout">
                            <h5>{{ $domain['name'] }}</h5>
                            <p>
                                <span class="{{ "icon icon-{$domain['short_name']}" }}">https://microsites.adrianbavister.com<br>
                                {{ $domain['url'] }}</span>
                            </p>
                        </div>
                    </a>
                </li>
            @endforeach
            </ul>

            <hr />

            <h3>Third-Party Tools:</h3>
            <p>These sites serve as tools to help with website development.</p>

            <ul class="sites small-block-grid-1 medium-block-grid-2 large-block-grid-3">
            @foreach ($sub_domains as $domain)
                <li>
                    <a href="{{ $domain['url'] }}" target="_blank" title="{{ $domain['name'] }}">
                        <img src="{{ "/img/banners/{$domain['short_name']}.jpg" }}" alt="{{ $domain['name'] }}">
                        <div class="panel callout">
                            <h5>{{ $domain['name'] }}</h5>
                            <p><span class="{{ "icon icon-{$domain['short_name']}" }}">{{ $domain['url'] }}</span></p>
                        </div>
                    </a>
                </li>
            @endforeach
            </ul>

        </div>
    </div>

    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/foundation.min.js') }}"></script>
    <script>
        $(document).foundation();
    </script>

</body>
</html>
