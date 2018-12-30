@extends('app.template')

@section('title', 'About Us')

@section('content')
<header class="content__title">
                        <h1>About Us</h1>
                    </header>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Introduction</div>
                                <div class="card-body">
                                    <p class="card-text">Growconomy is an online price checker for Growtopia. Our goal is to supply you with the most accurate prices. You can help us with that! All you have to do is keep using the website and report any wrong prices you encounter. Our team is carefully moderated and updates prices daily to ensure that you always see an up-to-date price!

Thank you for using Growconomy! Make sure to read all information on this page carefully before contacting us with your questions. We'd be more than happy to answer them though, if you send us a message here!
~ Adelicate</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">How can I edit prices here?</div>
                                <div class="card-body">
                                    Just go here and press 'Create Account'! Read this thread on the Growtopia forums carefully for more information!
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Why would I not just visit a price world?</div>
                                <div class="card-body">
                                    It all comes down to preference. While I would personally prefer being able to quickly search for a specific item's price, you may not want to leave the game at all. Our biggest selling point is accuracy. While price worlds are fairly limited, a website can implement more features to ensure more accurate prices. The report system is an example. Once you send us your report, the staff will look into it as soon as possible. It has worked pretty well so far, and will continue to improve as more people use the site. It's much harder for price worlds to keep track of which prices are incorrect, and besides that we also have a theorethically infinite amount of editor expansion.
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Are your prices really accurate?</div>
                                <div class="card-body">
                                    Our prices have the potential to be the most accurate. Whilst we have access to better mechanisms and tools than price worlds do, Growtopia's economy is still one of the most unpredictable ones out there. You may have noticed that we don't have 'price ranges' (e.g. 20-25 / WL) on our website. Our prices are an estimate of those ranges, and it isn't rare for prices to fluctuate with a couple of world locks too quickly to register. This happens predominantly with the items on the homepage, in 'Now Popular'. Be careful before trading, and don't rely blindly on our prices. For the biggest part, just like any prices in price worlds, they are merely an indication of the actual price.
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Is this just an elaborate scheme to steal my account data?</div>
                                <div class="card-body">
                                    Yes, and the goverment is lizard people.

In all seriousness, no, that's practically impossible unless you enter the data in the contact form, which would probably make it your fault.
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Why did you make this?</div>
                                <div class="card-body">
                                    Because I like building websites and I thought this was a good addition to Growtopia.
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">How did you make this?</div>
                                <div class="card-body">
                                    (Techincal stuff incoming)
The website is built using HTML / CSS, entirely from scratch. Some stuff is handled with JQuery (a Javascript library), but I tried to keep all animations in CSS. That usually runs better cross-browser. The item database is managed using PHPMyAdmin, and they are displayed on the website using MySQL functions in PHP.
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Do you have all the items?</div>
                                <div class="card-body">
                                    Yes, thanks to the semi-official Growtopia Wiki! New items are usually added on the day of the update.
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Does this cost $$$?</div>
                                <div class="card-body">
                                    Yeah, it does. Right now, it's fully dependent on my mom's credit card (I actually have a full time job, don't worry mom). I'd love the site to pay for itself, so if you are able to, please support us in one of these ways:
                                </div>
                            </div>

                        </div>
                    </div>
@endsection