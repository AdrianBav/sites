<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $domains = array(
            array('name' => 'Bavanco', 'short_name' => 'bavanco', 'url' => 'https://www.bavanco.co.uk'),
            array('name' => 'Adrian Bavister', 'short_name' => 'ab', 'url' => 'https://adrianbavister.com'),
            array('name' => 'Helena Pluskowska', 'short_name' => 'hp', 'url' => 'http://helenapluskowska.co.uk'),
            array('name' => 'Coast to Coast Communications', 'short_name' => 'c2c', 'url' => 'http://coasttocoastfiberoptics.com'),
        );

        $micro_sites = array(
            array('name' => 'Bavanco Web Design', 'short_name' => 'bwd', 'url' => '/bavancowebdesign'),
            array('name' => 'KARTS', 'short_name' => 'karts', 'url' => '/karts'),
            array('name' => 'Matt\'s Wedding', 'short_name' => 'matt', 'url' => '/mattswedding'),
            array('name' => 'N-T-Tea Randomizer', 'short_name' => 'nttea', 'url' => '/nttea'),
            array('name' => 'Nutritional Infomation', 'short_name' => 'ni', 'url' => '/nutritionalinformation'),
            array('name' => 'Adrian Bavister Online Portfolio', 'short_name' => 'portfolio', 'url' => '/personalportfolio'),
            array('name' => 'Shift Lunch: Location Generator', 'short_name' => 'racklunch', 'url' => '/racklunch'),
            array('name' => 'Richard Wooldridge\'s Homepage', 'short_name' => 'richard', 'url' => '/richardshomepage'),
        );

        $sub_domains = array(
            array('name' => 'GitHub', 'short_name' => 'github', 'url' => 'https://github.com/adrianbav'),
            array('name' => 'Github Gist', 'short_name' => 'gist', 'url' => 'https://gist.github.com/AdrianBav'),
            array('name' => 'Laracasts', 'short_name' => 'laracasts', 'url' => 'https://laracasts.com/@AdrianBav'),
            array('name' => 'Sitepoint', 'short_name' => 'sitepoint', 'url' => 'https://www.sitepoint.com/premium/users/AdrianBav'),
        );

        return view('home', compact('domains', 'micro_sites', 'sub_domains'));
    }
}
