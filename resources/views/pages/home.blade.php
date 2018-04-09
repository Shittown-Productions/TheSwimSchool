@extends('layouts.app-uikit')

@section('seo')
    <title>The Swim School | Parrish Swimming Lessons | Lakewood Ranch Florida</title>
    <meta name="description" content="Enjoy the convenience of private, semi-private, or small group swimming lessons for all ability levels with The Swim School! Located near Lakewood Ranch, Bradenton, and Palmetto."/>
@endsection

@section('heading')
Home
@endsection

@section('content')
<div id="page#1" class="uk-section-secondary uk-section-overlap">
    <div style="background-image: url('/img/pool-water.jpg'); background-color: #1e3040;" class="uk-background-norepeat uk-background-cover uk-background-bottom-center uk-background-fixed uk-section uk-padding-remove-vertical">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-width-1-1@m uk-first-column">
                    <h2 class="text-black uk-margin-remove-vertical uk-text-center uk-heading-primary uk-scrollspy-inview uk-animation-slide-top" uk-scrollspy-class="" style="font-family:sans-serif;">
                        The Swim School
                    </h2>
                    <div class="text-black uk-margin-small uk-text-center uk-text-lead uk-scrollspy-inview uk-animation-slide-bottom" uk-scrollspy-class="uk-animation-slide-bottom">
                        Taking School To The Pool
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="uk-section-muted uk-section-overlap uk-section">
    <div class="uk-container">
        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m uk-first-column">
                <h2 class="uk-text-center uk-h1 uk-scrollspy-inview uk-animation-slide-top-medium" uk-scrollspy-class="">Services</h2>
                <hr class="uk-divider-icon uk-scrollspy-inview uk-animation-slide-top-medium" uk-scrollspy-class="">
            </div>
        </div>
        <div class="uk-grid-margin uk-grid" uk-grid="">
            <div class="uk-width-expand@m uk-grid-item-match uk-first-column">
                <div class="uk-margin uk-text-left@s uk-text-center uk-card uk-card-default uk-card-hover uk-scrollspy-inview uk-animation-slide-top-medium" uk-scrollspy-class="">
                    <a title="Lakewood Ranch swim lesson" href="/lessons" class="el-link uk-position-cover uk-position-z-index uk-margin-remove-adjacent"></a>
                    <div class="uk-card-media-top"><img src="/img/group-lessons.jpg" class="el-image uk-border-rounded" alt="Lakewood Ranch children's swim lessons"></div>
                    <div class="uk-card-body">
                        <h3 class="el-title uk-margin uk-h2 uk-heading-bullet">Group Lessons</h3>
                        <div class="el-content uk-margin">The Swim School features aquatics programs to meet the specific needs of various age groups from beginner to advanced skill levels. Sessions of small group classes are available for
                            Parent & Infant/Toddler, Preschool, Youth/Teen, and Adult & Active Older Adults.
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m uk-grid-item-match">
                <div class="uk-margin uk-text-left@s uk-text-center uk-card uk-card-default uk-card-hover uk-scrollspy-inview uk-animation-slide-top-medium" uk-scrollspy-class="">
                    <a title="Parrish private swim lessons" href="/private-semi-private" class="el-link uk-position-cover uk-position-z-index uk-margin-remove-adjacent"></a>
                    <div class="uk-card-media-top"><img src="/img/kids-floating.jpg" class="el-image uk-border-rounded" alt="Ellenton swimming lessons"></div>
                    <div class="uk-card-body">
                        <h3 class="el-title uk-margin uk-h2 uk-heading-bullet">Private Lessons</h3>
                        <div class="el-content uk-margin">The Swim School offers packages of individualized lessons available to adults and children (12 months+) of all ability levels at our pool or yours! Swim instruction is customized to meet the needs
                            and goals of each participant. These lessons are also great if group swim lessons do not accommodate your schedule.
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m uk-grid-item-match">
                <div class="uk-margin uk-text-left@s uk-text-center uk-card uk-card-default uk-card-hover uk-scrollspy-inview uk-animation-slide-top-medium" uk-scrollspy-class="">
                    <a title="Parrish swim team" href="/swim-team" class="el-link uk-position-cover uk-position-z-index uk-margin-remove-adjacent"></a>
                    <div class="uk-card-media-top"><img src="/img/private-lessons.jpg" class="el-image uk-border-rounded" alt="Lakewood Ranch swim club"></div>
                    <div class="uk-card-body">
                        <h3 class="el-title uk-margin uk-h2 uk-heading-bullet">Swim Team</h3>
                        <div class="el-content uk-margin">Love to swim? Join the North River Swim Team, a seasonal program run by The Swim School. Quality level coaches provide a fun atmosphere for children ages 5-18 to improve their technique
                            of the four competitive strokes, build endurance and learn about sportsmanship through local competition.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="uk-section-default uk-section-overlap uk-section">
    <div class="uk-container">
        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m uk-first-column">
                <h2 class="uk-text-center uk-h1 uk-scrollspy-inview uk-animation-slide-bottom-medium" uk-scrollspy-class="">
                    Testimonials
                </h2>
                <hr class="uk-divider-icon uk-scrollspy-inview uk-animation-slide-bottom-medium" uk-scrollspy-class="">
            </div>
        </div>
        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m uk-first-column">
                <div class="uk-margin uk-grid-match uk-child-width-1-1 uk-child-width-1-3@m uk-grid uk-scrollspy-inview uk-animation-slide-bottom-medium" uk-scrollspy-class="" uk-grid="">
                    <div class="uk-first-column">
                        <div uk-scrollspy-class="" class="el-item uk-card uk-card-secondary uk-card-body uk-scrollspy-inview uk-animation-slide-bottom-medium">
                            <h3 class="el-title uk-margin uk-h2 uk-heading-line uk-margin-remove-adjacent">
                                Jenny Spears
                            </h3>
                            <div class="el-meta uk-margin uk-text-meta">June 20, 2016</div>
                            <div class="el-content uk-margin">"Ms. Hilary is Amazing!! When my son started swim lessons he had sensory issues and did not want to put his face under water or participate much. After only 2 four week sessions he is swimming on his own without a float at 4 years old and is willing to try everything. She is so patient and creative. I will definitely use her for my daughter as well."</div>
                        </div>
                    </div>
                    <div>
                        <div uk-scrollspy-class="" class="el-item uk-card uk-card-secondary uk-card-body uk-scrollspy-inview uk-animation-slide-bottom-medium">
                            <h3 class="el-title uk-margin uk-h2 uk-heading-line uk-margin-remove-adjacent">
                                Kenny Mitchell
                            </h3>
                            <div class="el-meta uk-margin uk-text-meta">May 11, 2016</div>
                            <div class="el-content uk-margin">"Hilary is the best instructor around! Although she has the best prices around, It's not about money. She is more than just a teacher, she really cares about the kids she works with; she goes above &amp; beyond for their success."</div>
                        </div>
                    </div>
                    <div>
                        <div uk-scrollspy-class="" class="el-item uk-card uk-card-secondary uk-card-body uk-scrollspy-inview uk-animation-slide-bottom-medium">
                            <h3 class="el-title uk-margin uk-h2 uk-heading-line uk-margin-remove-adjacent">
                                Jennifer McCarthy-Murray
                            </h3>
                            <div class="el-meta uk-margin uk-text-meta">March 12, 2016</div>
                            <div class="el-content uk-margin">"She is amazing and seems to work miracles! Definitely the best at what she does. And her pricing is the best too."</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m uk-first-column">
                <div class="uk-text-center uk-scrollspy-inview uk-animation-slide-bottom-medium" uk-scrollspy-class="uk-animation-slide-bottom-medium">
                    <a title="Swim School Testimonials" class="el-content uk-button uk-button-primary uk-button-large" href="/testimonials/" title="Explore More">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

