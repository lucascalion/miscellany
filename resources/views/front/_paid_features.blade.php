<section class="minimal-padding" id="paid-features">
    <div class="container">
        <div class="col-lg-12 my-auto">
            <div class="header-content mx-auto">
                <h1 class="mb-5">{{ __('front.features.patreon.title') }}</h1>
                <p class="mb-5">{{ __('front.features.patreon.description') }}</p>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>{{ __('front.features.patreon.free') }}</th>
                <th>{{ __('patreon.pledges.owlbear') }}</th>
                <th>{{ __('patreon.pledges.elemental') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text">{{ __('front.features.patreon.upload_limit') }}</td>
                <td>1 MB</td>
                <td>8 MB</td>
                <td>25 MB</td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.upload_limit_map') }}</td>
                <td>3 MB</td>
                <td>10 MB</td>
                <td>25 MB</td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.users_roles') }}</td>
                <td><i class="fa fa-infinity" title="{{ __('front.features.unlimited') }}"></i></td>
                <td><i class="fa fa-infinity" title="{{ __('front.features.unlimited') }}"></i></td>
                <td><i class="fa fa-infinity" title="{{ __('front.features.unlimited') }}"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.entities') }}</td>
                <td><i class="fa fa-infinity" title="{{ __('front.features.unlimited') }}"></i></td>
                <td><i class="fa fa-infinity" title="{{ __('front.features.unlimited') }}"></i></td>
                <td><i class="fa fa-infinity" title="{{ __('front.features.unlimited') }}"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.discord') }}</td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.default_image') }}</td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{!! __('front.features.patreon.hall_of_fame', ['link' => link_to_route('front.about', __('teams.hall_of_fame'), ['#patreon'])]) !!}</td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.api_calls') }}</td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.pagination') }} <i class="fa fa-question-circle-o" title="{{ __('front.features.patreon.pagination_help') }}"></i></td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.monthly_vote') }}</td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.boosts') }}</td>
                <td></td>
                <td>3</td>
                <td>10</td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.curation') }}</td>
                <td></td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.patreon.impact') }}</td>
                <td></td>
                <td></td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            </tbody>
        </table>

    </div>
</section>

<section class="minimal-padding" id="boost">
    <div class="container">
        <div class="col-lg-12 my-auto">
            <div class="header-content mx-auto">
                <h1 class="mb-5">{{ __('front.features.boosts.title') }}</h1>
                <p class="mb-5">{{ __('front.features.boosts.description') }}</p>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>{{ __('front.features.boosts.boosted') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text">{{ __('front.features.boosts.theme') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.css') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.tooltip') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.header_image') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.images') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.upload') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.entity_files') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.recovery') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.relation-visualiser') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            <tr>
                <td class="text">{{ __('front.features.boosts.beta') }}</td>
                <td><i class="fa fa-check-circle"></i></td>
            </tr>
            </tbody>
        </table>


        <div class="col-lg-6 my-auto">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/eSyHGSq4SbE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
